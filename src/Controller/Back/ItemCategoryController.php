<?php

namespace App\Controller\Back;

use App\Entity\ItemCategory;
use App\Form\ItemCategoryType;
use App\Repository\ItemCategoryRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/admin/item/category", name="admin_item_category_", requirements={"id"="\d+"})
 */
class ItemCategoryController extends AbstractController
{
    /**
     * @Route("/", name="index", methods={"GET"})
     */
    public function index(ItemCategoryRepository $itemCategoryRepository): Response
    {
        return $this->render('back/item_category/index.html.twig', [
            'item_categories' => $itemCategoryRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="new", methods={"GET", "POST"})
     */
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $itemCategory = new ItemCategory();
        $form = $this->createForm(ItemCategoryType::class, $itemCategory);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($itemCategory);
            $entityManager->flush();

            return $this->redirectToRoute('admin_item_category_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('back/item_category/new.html.twig', [
            'item_category' => $itemCategory,
            'form' => $form,
        ]);
    }

    /**
     * @Route("/{id}", name="show", methods={"GET"})
     */
    public function show(ItemCategory $itemCategory): Response
    {
        return $this->render('back/item_category/show.html.twig', [
            'item_category' => $itemCategory,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, ItemCategory $itemCategory, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(ItemCategoryType::class, $itemCategory);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('admin_item_category_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('back/item_category/edit.html.twig', [
            'item_category' => $itemCategory,
            'form' => $form,
        ]);
    }

    /**
     * @Route("/{id}", name="delete", methods={"POST"})
     */
    public function delete(Request $request, ItemCategory $itemCategory, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$itemCategory->getId(), $request->request->get('_token'))) {
            $entityManager->remove($itemCategory);
            $entityManager->flush();
        }

        return $this->redirectToRoute('admin_item_category_index', [], Response::HTTP_SEE_OTHER);
    }
}
