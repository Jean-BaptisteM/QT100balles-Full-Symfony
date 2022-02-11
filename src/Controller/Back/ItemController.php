<?php

namespace App\Controller\Back;

use App\Entity\Item;
use App\Form\ItemType;
use App\Service\Slugger;
use App\Service\ImageUploader;
use App\Repository\ItemRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

/**
 * @Route("/admin/item", name="admin_item_", requirements={"id"="\d+"})
 */
class ItemController extends AbstractController
{

    /**
     * filtering of categories using findBy with
     * the id of the corresponding media_categories
     * @Route("/liste/{id}", name="index", methods={"GET"})
     */
    public function index(ItemRepository $itemRepository, $id): Response
    {
        return $this->render('back/item/index.html.twig', [
            'items' => $itemRepository->findBy(['item_categories' => $id], []),
        ]);
    }

    /**
     * @Route("/new", name="new", methods={"GET", "POST"})
     */
    public function new(Request $request, EntityManagerInterface $entityManager, Slugger $slugger,  ImageUploader $imageUploader): Response
    {
        $item = new Item();
        $form = $this->createForm(ItemType::class, $item);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $image = $form->get('image')->getData();
            if ($image != null) {
                // Use of the ImageUploader service allowing the user to upload a profile picture
                $imageUploader->uploadItemImage($form);
            }
            // Processing Slug
            $slugger->slugifyItem($item);

            $entityManager->persist($item);
            $entityManager->flush();

            return $this->redirectToRoute('admin', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('back/item/new.html.twig', [
            'item' => $item,
            'form' => $form,
        ]);
    }

    /**
     * @Route("/{id}", name="show", methods={"GET"})
     */
    public function show(Item $item): Response
    {
        return $this->render('back/item/show.html.twig', [
            'item' => $item,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, Item $item, EntityManagerInterface $manager, Slugger $slugger,  ImageUploader $imageUploader): Response
    {
        $form = $this->createForm(ItemType::class, $item);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $image = $form->get('image')->getData();
            if ($image != null) {
                // Use of the ImageUploader service allowing the user to upload a profile picture
                $imageUploader->uploadItemImage($form);
            }
            // Processing Slug
            $slugger->slugifyItem($item);

            $manager->flush();

            return $this->redirectToRoute('admin', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('back/item/edit.html.twig', [
            'item' => $item,
            'form' => $form,
        ]);
    }

    /**
     * @Route("/{id}", name="delete", methods={"POST"})
     */
    public function delete(Request $request, Item $item, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete' . $item->getId(), $request->request->get('_token'))) {
            $entityManager->remove($item);
            $entityManager->flush();
        }

        return $this->redirectToRoute('admin', [], Response::HTTP_SEE_OTHER);
    }
}
