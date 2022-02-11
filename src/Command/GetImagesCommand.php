<?php

namespace App\Command;

use App\Repository\MediaRepository;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;

use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;


class GetImagesCommand extends Command
{
    private $mediaRepository;

    public function __construct(MediaRepository $mediaRepository)
    {
        // We exectute parent's class and call the media repository
        parent::__construct();

        $this->mediaRepository = $mediaRepository;
    }

    protected static $defaultName = 'qt100:get-posters';
    protected static $defaultDescription = 'Fetch all posters for the series in database';

    protected function configure(): void
    {
        // $this
        //     ->addArgument('arg1', InputArgument::OPTIONAL, 'Argument description')
        //     ->addOption('option1', null, InputOption::VALUE_NONE, 'Option description')
        // ;
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $io = new SymfonyStyle($input, $output);
        // $arg1 = $input->getArgument('arg1');

        // We search all media from the DB
        $medias = $this->mediaRepository->findAll();

        // for each movie, we search for the poster's media
        foreach($medias as $media) {
            // Url of the API's access
            $url = 'http://www.omdbapi.com/?apikey=ffe238a0&t=' . urlencode($media->getOriginalTitle());
            // file_get_content allow to make request GET HTTP
            $json = file_get_contents($url);
            $mediaObject = json_decode($json);

            // We check if we get results
            if ($mediaObject->Response != 'False') {
                // And if there is a match between media and poster
                if ($mediaObject->Poster != 'N/A') {
                    // download the content and put it in a file target
                    file_put_contents('public/assets/images/api/' . $media->getOriginalTitle(). '.jpg', file_get_contents($mediaObject->Poster));
                }
            }
        }


        $io->success('Ça a fonctionné, toutes les affiches disponibles sont téléchargées');

        return Command::SUCCESS;
    }


}
