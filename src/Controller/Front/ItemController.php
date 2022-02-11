<?php

namespace App\Controller\Front;

use App\Entity\CommentItem;
use App\Entity\Item;
use App\Entity\User;
use App\Form\CommentItemType;
use App\Form\ItemType;
use App\Repository\ItemRepository;
use App\Repository\UserRepository;
use App\Service\ImageUploader;
use App\Service\Slugger;
use DateTime;
use Doctrine\ORM\EntityManagerInterface;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;


/**
 * @Route("/item", name="item_", requirements={"id"="\d+"})
 */
class ItemController extends AbstractController
{
    /**
     * filtering of categories (jouets, objets, bonbons) using findBy with
     * the id of the corresponding item_categories
     * @Route("/liste/{id}", name="liste", methods={"GET"})
     */
    public function indexList(ItemRepository $itemRepository, Request $request, PaginatorInterface $paginator, $id): Response
    {
        $data = $itemRepository->findBy(['item_categories' => $id], ['name' => 'ASC']);

        $items = $paginator->paginate(
            $data, // Query containing the data to paginate (here our items)
            $request->query->getInt('page', 1), // Number of the current page, passed in the URL, 1 if no page
            14 // Number of results per page
        );

        return $this->render('front/item/index.html.twig', [
            'items' => $items,
        ]);
    }

    /**
     * @Route("", name="index", methods={"GET"})
     */
    public function index(ItemRepository $itemRepository): Response
    {
        return $this->render('front/item/index.html.twig', [
            'items' => $itemRepository->findAll(),
        ]);
    }

    /**
     *
     * URL : /item/{id}
     * Route name : item_show
     *
     * @Route("/{id}", name="show", methods={"GET"})
     *
     * @return Response
     */
    public function show(EntityManagerInterface $em, Item $item, Slugger $slugger, Request $request): Response
    {
        //* calculate the slug if it does not exist
        if ($item->getSlug() === null) {
            $slugger->slugifyItem($item);
            $em->flush();
        }

        //* redirects on the road /item/{slug}
        return $this->redirectToRoute('item_show_slug', [
            'slug' => $item->getSlug(),
        ]);
    }

    /**
     * @Route("/new", name="new", methods={"GET", "POST"})
     */
    public function new(Request $request, EntityManagerInterface $entityManager, Slugger $slugger, ImageUploader $imageUploader): Response
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

            $this->addFlash('success', 'Nouveau Item Ajouté !');

            return $this->redirectToRoute('home', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('front/item/new.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{slug}", name="show_slug")
     *
     * @return Response
     */
    public function readSlug(EntityManagerInterface $em, Item $item, ImageUploader $imageUploader, Request $request): Response
    {

        //*Parties commentaires
        $comment = new CommentItem;
        $user = $this->getUser();

        //generate comment
        $commentForm = $this->createForm(CommentItemType::class, $comment);
        $commentForm->handleRequest($request);

        //Processing form
        if ($commentForm->isSubmitted() && $commentForm->isValid()) {

            $image = $commentForm->get('image')->getData();
            if ($image != null) {
                // Use of the ImageUploader service allowing the user to upload a profile picture
                $imageUploader->uploadCommentImage($commentForm);
            }


            //faut lui passer l'annonce dans laquelle on se trouve aussi
            $comment->SetItems($item);

            // Associer le user connecté à la réponse
            $comment->SetUsers($user);

            $em->persist($comment);
            $em->flush();

            // puis un flash
            $this->addFlash('message', 'Votre commentaire a bien été envoyé');

            //* redirects on the road /item/{slug}
            return $this->redirectToRoute('item_show_slug', [
                'slug' => $item->getSlug(),
            ]);
        }

        return $this->render('front/item/show.html.twig', [
            'item' => $item,
            'commentForm' => $commentForm->createView(),
        ]);
    }

    /**
     * @Route("/favorite/add/{id}", name="add_favorite")
     */
    public function addFavorite(EntityManagerInterface $manager, Item $item, $id)
    {
        $item->addUser($this->getUser());

        $manager->persist($item);
        $manager->flush();

        $this->addFlash('success', 'Ajouté aux favoris !');

        return $this->redirectToRoute('item_show', ['id' => $id]);
    }

    /**
     * @Route("/favorite/remove/{id}", name="remove_favorite")
     */
    public function removeFavorite(EntityManagerInterface $manager, Item $item, $id)
    {
        $item->removeUser($this->getUser());

        $manager->persist($item);
        $manager->flush();

        $this->addFlash('success', 'Retiré des favoris !');

        return $this->redirectToRoute('item_show', ['id' => $id]);
    }
}
