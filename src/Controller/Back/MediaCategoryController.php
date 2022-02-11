<?php

namespace App\Controller\Back;

use App\Entity\MediaCategory;
use App\Form\MediaCategoryType;
use App\Repository\MediaCategoryRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/admin/media/category", name="admin_media_category_", requirements={"id"="\d+"})
 */
class MediaCategoryController extends AbstractController
{
    /**
     * @Route("/", name="index", methods={"GET"})
     */
    public function index(MediaCategoryRepository $mediaCategoryRepository): Response
    {
        return $this->render('back/media_category/index.html.twig', [
            'media_categories' => $mediaCategoryRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="new", methods={"GET", "POST"})
     */
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $mediaCategory = new MediaCategory();
        $form = $this->createForm(MediaCategoryType::class, $mediaCategory);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($mediaCategory);
            $entityManager->flush();

            return $this->redirectToRoute('admin_media_category_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('back/media_category/new.html.twig', [
            'media_category' => $mediaCategory,
            'form' => $form,
        ]);
    }

    /**
     * @Route("/{id}", name="show", methods={"GET"})
     */
    public function show(MediaCategory $mediaCategory): Response
    {
        return $this->render('back/media_category/show.html.twig', [
            'media_category' => $mediaCategory,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, MediaCategory $mediaCategory, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(MediaCategoryType::class, $mediaCategory);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('admin_media_category_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('back/media_category/edit.html.twig', [
            'media_category' => $mediaCategory,
            'form' => $form,
        ]);
    }

    /**
     * @Route("/{id}", name="delete", methods={"POST"})
     */
    public function delete(Request $request, MediaCategory $mediaCategory, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$mediaCategory->getId(), $request->request->get('_token'))) {
            $entityManager->remove($mediaCategory);
            $entityManager->flush();
        }

        return $this->redirectToRoute('admin_media_category_index', [], Response::HTTP_SEE_OTHER);
    }
}
