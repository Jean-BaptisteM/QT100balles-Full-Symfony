<?php

namespace App\Controller\Back;

use App\Entity\CommentItem;
use App\Entity\CommentMedia;
use App\Form\CommentItem1Type;
use Doctrine\ORM\EntityManagerInterface;
use App\Repository\CommentItemRepository;
use App\Repository\CommentMediaRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

/**
 * @Route("/admin/comment", name="admin_comment_", requirements={"id"="\d+"})
 */
class CommentController extends AbstractController
{
    /**
     * @Route("/media", name="media_index", methods={"GET"})
     */
    public function indexCommentMedia(CommentMediaRepository $commentMediaRepository): Response
    {
        return $this->render('back/comment/media/index.html.twig', [
            'commentMedias' => $commentMediaRepository->findBy([], ['id' => 'DESC']),
        ]);
    }

    /**
     * @Route("/item", name="item_index", methods={"GET"})
     */
    public function indexCommentItem(CommentItemRepository $commentItemRepository): Response
    {
        return $this->render('back/comment/item/index.html.twig', [
            'commentItems' => $commentItemRepository->findBy([], ['id' => 'DESC']),
        ]);
    }

    /**
     * @Route("/media/{id}", name="media_show", methods={"GET"})
     */
    public function showCommentMedia(CommentMedia $commentMedia): Response
    {
        return $this->render('back/comment/media/show.html.twig', [
            'commentMedia' => $commentMedia,
        ]);
    }

    /**
     * @Route("/item/{id}", name="item_show", methods={"GET"})
     */
    public function showCommentItem(CommentItem $commentItem): Response
    {
        return $this->render('back/comment/item/show.html.twig', [
            'commentItem' => $commentItem,
        ]);
    }

    /**
     * @Route("/media/{id}", name="media_delete", methods={"POST"})
     */
    public function deleteCommentMedia(Request $request, CommentMedia $commentMedia, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$commentMedia->getId(), $request->request->get('_token'))) {
            $entityManager->remove($commentMedia);
            $entityManager->flush();
        }

        return $this->redirectToRoute('admin_comment_media_index', [], Response::HTTP_SEE_OTHER);
    }

    /**
     * @Route("/item/{id}", name="item_delete", methods={"POST"})
     */
    public function deleteCommentItem(Request $request, CommentItem $commentItem, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$commentItem->getId(), $request->request->get('_token'))) {
            $entityManager->remove($commentItem);
            $entityManager->flush();
        }

        return $this->redirectToRoute('admin_comment_item_index', [], Response::HTTP_SEE_OTHER);
    }
}
