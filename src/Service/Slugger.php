<?php

namespace App\Service;

use App\Entity\Item;
use App\Entity\Media;
use Symfony\Component\String\Slugger\SluggerInterface;

class Slugger
{
    private $slugger;

    public function __construct(SluggerInterface $slugger)
    {
        $this->slugger = $slugger;
    }

    /**
     * Return the slug of a string
     *
     * @param string $stringToSlugify The string will be turned into a slug
     * @return string
     */
    public function slugify(string $stringToSlugify): string
    {
        // Slugger du composant String de Symfony
        return strtolower($this->slugger->slug($stringToSlugify));
    }

    /**
     * Create a slug for a Item
     *
     * @param Item $item
     * @return void
     */
    public function slugifyItem(Item $item)
    {
        $name = $item->getName();
        // On appelle slugify() plutot que de copier le code dans slugify
        $slug = $this->slugify($name);
        $item->setSlug($slug);
    }

    /**
     * Create a slug for a Media
     *
     * @param Media $media
     * @return void
     */
    public function slugifyMedia(Media $media)
    {
        $title = $media->getTitle();
        // On appelle slugify() plutot que de copier le code dans slugify
        $slug = $this->slugify($title);
        $media->setSlug($slug);
    }
}