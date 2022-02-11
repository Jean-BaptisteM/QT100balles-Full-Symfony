<?php

namespace App\Controller\Back;

use App\Entity\Media;
use App\Form\MediaType;
use App\Repository\MediaRepository;
use App\Service\Slugger;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/admin/media", name="admin_media_", requirements={"id"="\d+"})
 */
class MediaController extends AbstractController
{

    /**
     * filtering of categories (movie, series, cartoon, etc.) using findBy with
     * the id of the corresponding media_categories
     * @Route("/liste/{id}", name="index", methods={"GET"})
     */
    public function index(MediaRepository $mediaRepository, $id): Response
    {
        return $this->render('back/media/index.html.twig', [
            'medias' => $mediaRepository->findBy(['media_categories' => $id], []),
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

            return $this->redirectToRoute('admin', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('back/media/new.html.twig', [
            'media' => $media,
            'form' => $form,
        ]);
    }

    /**
     * @Route("/{id}", name="show", methods={"GET"})
     */
    public function show(Media $media): Response
    {
        return $this->render('back/media/show.html.twig', [
            'media' => $media,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, Media $media, EntityManagerInterface $entityManager, Slugger $slugger): Response
    {
        $form = $this->createForm(MediaType::class, $media);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // Processing Slug
            $slugger->slugifyMedia($media);

            $entityManager->flush();

            return $this->redirectToRoute('admin', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('back/media/edit.html.twig', [
            'media' => $media,
            'form' => $form,
        ]);
    }

    /**
     * @Route("/{id}", name="delete", methods={"POST"})
     */
    public function delete(Request $request, Media $media, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete' . $media->getId(), $request->request->get('_token'))) {
            $entityManager->remove($media);
            $entityManager->flush();
        }

        return $this->redirectToRoute('admin', [], Response::HTTP_SEE_OTHER);
    }
}
