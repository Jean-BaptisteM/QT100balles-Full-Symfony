<?php

namespace App\Controller\Front;

use App\Entity\CommentMedia;
use App\Entity\Media;
use App\Form\CommentMediaType;
use App\Form\MediaType;
use App\Repository\MediaRepository;
use App\Repository\PersonRepository;
use App\Repository\TypeRepository;
use App\Service\ImageUploader;
use App\Service\Slugger;
use Doctrine\ORM\EntityManagerInterface;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;


/**
 * @Route("/media", name="media_", requirements={"id"="\d+"})
 */
class MediaController extends AbstractController
{
    /**
     * filtering of categories (movie, series, cartoon, etc.) using findBy with
     * the id of the corresponding media_categories
     * @Route("/liste/{id}", name="liste", methods={"GET"})
     */
    public function indexList(MediaRepository $mediaRepository, TypeRepository $typeRepository, Request $request, PaginatorInterface $paginator, $id): Response
    {
        $data = $mediaRepository->findBy(['media_categories' => $id], ['title' => 'ASC']);
        $types = $typeRepository->findBY([], ['name' => 'ASC']);

        $medias = $paginator->paginate(
            $data, // Query containing the data to paginate (here our medias)
            $request->query->getInt('page', 1), // Number of the current page, passed in the URL, 1 if no page
            14 // Number of results per page
        );
        return $this->render('front/media/index.html.twig', [
            'medias' => $medias,
            'types' => $types,
        ]);
    }

    /**
     * @Route("", name="index", methods={"GET"})
     */
    public function index(MediaRepository $mediaRepository): Response
    {
        return $this->render('front/media/index.html.twig', [
            'medias' => $mediaRepository->findAll(),
        ]);
    }


    /**
     * @Route("/new", name="new", methods={"GET", "POST"})
     */
    public function new(Request $request, EntityManagerInterface $entityManager, Slugger $slugger): Response
    {
        $media = new Media();
        $form = $this->createForm(MediaType::class, $media);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // Processing Slug
            $slugger->slugifyMedia($media);

            $entityManager->persist($media);
            $entityManager->flush();

            $this->addFlash('success', 'Nouveau Média Ajouté !');

            return $this->redirectToRoute('home', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('front/media/new.html.twig', [
            'media' => $media,
            'form' => $form,
        ]);
    }

    /**
     * @Route("/{id}", name="show", methods={"GET"})
     */
    public function show(Media $media, PersonRepository $personRepository, EntityManagerInterface $manager, Slugger $slugger): Response
    {
        // calculate the slug if it does not exist
        if ($media->getSlug() === null) {
            $slugger->slugifyMedia($media);
            $manager->flush();
        }

        // redirects on the road /media/{slug}
        return $this->redirectToRoute('media_show_slug', [
            'slug' => $media->getSlug(),
        ]);
    }

    /**
     * @Route("/{slug}", name="show_slug")
     *
     * @return Response
     */
    public function readSlug(EntityManagerInterface $em, Media $media, ImageUploader $imageUploader, Request $request): Response
    {
        //*Parties commentaires
        $comment = new CommentMedia;
        $user = $this->getUser();

        //generate comment
        $commentForm = $this->createForm(CommentMediaType::class, $comment);
        $commentForm->handleRequest($request);

        //Processing form
        if ($commentForm->isSubmitted() && $commentForm->isValid()) {
            $image = $commentForm->get('image')->getData();
            if ($image != null) {
                // Use of the ImageUploader service allowing the user to upload a profile picture
                $imageUploader->uploadCommentImage($commentForm);
            }

            //faut lui passer l'annonce dans laquelle on se trouve aussi
            $comment->SetMedias($media);

            // Associer le user connecté à la réponse
            $comment->SetUsers($user);

            $em->persist($comment);
            $em->flush();

            // puis un flash
            $this->addFlash('message', 'Votre commentaire a bien été envoyé');

            //* redirects on the road /item/{slug}
            return $this->redirectToRoute('media_show_slug', [
                'slug' => $media->getSlug(),
            ]);
        }

        return $this->render('front/media/show.html.twig', [
            'media' => $media,
            'commentForm' => $commentForm->createView(),
        ]);
    }

    /**
     * @Route("/favorite/add/{id}", name="add_favorite")
     */
    public function addFavorite(EntityManagerInterface $manager, Media $media, $id)
    {
        $media->addUser($this->getUser());

        $manager->persist($media);
        $manager->flush();

        $this->addFlash('success', 'Ajouté aux favoris !');

        return $this->redirectToRoute('media_show', ['id' => $id]);
    }

    /**
     * @Route("/favorite/remove/{id}", name="remove_favorite")
     */
    public function removeFavorite(EntityManagerInterface $manager, Media $media, $id)
    {
        $media->removeUser($this->getUser());

        $manager->persist($media);
        $manager->flush();

        $this->addFlash('success', 'Retiré des favoris !');

        return $this->redirectToRoute('media_show', ['id' => $id]);
    }
}
