<?php

namespace App\Controller\Front;

use App\Repository\ItemRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class HomeController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function index(ItemRepository $itemRepository, Request $request): Response
    {   
        $items = $itemRepository->findBy([], ['id' => 'DESC'], 4);
        $candies = $itemRepository->findBy(['item_categories' => 1], ['id' => 'DESC'], 3);
        $objects = $itemRepository->findBy(['item_categories' => 2], ['id' => 'DESC'], 3);
        $toys = $itemRepository->findBy(['item_categories' => 3], ['id' => 'DESC'], 3);
        return $this->render('front/home/index.html.twig', [
            'items' => $items,
            'candies' => $candies,
            'objects' => $objects,
            'toys' => $toys,
        ]);
    }
}