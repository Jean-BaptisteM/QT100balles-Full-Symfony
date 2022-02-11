<?php

namespace App\Controller\Front;

use App\Entity\Item;
use App\Entity\Media;
use App\Entity\User;
use App\Form\UserType;
use App\Service\ImageUploader;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Annotation\Route;


/**
 * @Route("/user", name="user_")
 */
class UserController extends AbstractController
{
    

    /**
     * @Route("/new", name="new", methods={"GET", "POST"})
     */
    public function new(Request $request, UserPasswordHasherInterface $userPasswordHasher, EntityManagerInterface $entityManager, ImageUploader $imageUploader ): Response
    {
        $user = new User();
        $form = $this->createForm(UserType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            
            $image = $form->get('image')->getData();
            if ($image != null) {
                // Use of the ImageUploader service allowing the user to upload a profile picture
                $imageUploader->uploadUserImage($form);
            }
            // If the password is given, we get it, hash it and place in $user
            // We get the password's value from the form
            $password = $form->get('password')->getData();
            $hashedPassword = $userPasswordHasher->hashPassword($user, $password);
            $user->setPassword($hashedPassword);
            $entityManager->persist($user);
            $entityManager->flush();

            // short message to make notice the user that his profile has been created
            $this->addFlash('success', 'Votre compte a bien été crée !');

            return $this->redirectToRoute('app_login', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('front/user/new.html.twig', [
            'user' => $user,
            'form' => $form,
        ]);
    }

    /**
     * @Route("/{id}", name="show", methods={"GET"})
     */
    public function show(User $user): Response
    {
        return $this->render('front/user/show.html.twig', [
            'user' => $user,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, User $user, EntityManagerInterface $entityManager, UserPasswordHasherInterface $userPasswordHasher, ImageUploader $imageUploader): Response
    {
        $form = $this->createForm(UserType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
   
            $image = $form->get('image')->getData();
            if ($image != null) {
                // Use of the ImageUploader service allowing the user to upload a profile picture
                $imageUploader->uploadUserImage($form);
            }

            // If the password is given, we get it, hash it and place in $user
            // We get the password's value from the form
            $password = $form->get('password')->getData();

            // $password equal null if nothing was given
            if ($password != null) {
                // If a password was given, we update it in $user
                // but we hash it first
                $hashedPassword = $userPasswordHasher->hashPassword($user, $password);
                $user->setPassword($hashedPassword);
            }
            $entityManager->flush();
            
            // short message to make notice the user that his profile has been modified
            $this->addFlash('notice', 'Votre compte a bien été modifié !');

            return $this->redirectToRoute('home', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('front/user/edit.html.twig', [
            'user' => $user,
            'form' => $form,
        ]);
    }

    /**
     * @Route("/{id}/edit/avatar", name="edit_avatar", methods={"GET", "POST"})
     */
    public function editAvatar(Request $request, User $user, EntityManagerInterface $entityManager, UserPasswordHasherInterface $userPasswordHasher, ImageUploader $imageUploader): Response
    {
        $form = $this->createForm(UserType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
   
            $image = $form->get('image')->getData();
            if ($image != null) {
                // Use of the ImageUploader service allowing the user to upload a profile picture
                $imageUploader->uploadUserImage($form);
            }

            $entityManager->flush();
            
            // short message to make notice the user that his profile has been modified
            $this->addFlash('notice', 'Votre avatar a bien été modifié !');

            return $this->redirectToRoute('home', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('front/user/avatar_edit.html.twig', [
            'user' => $user,
            'form' => $form,
        ]);
    }

    /**
     * @Route("/{id}/edit/description", name="edit_description", methods={"GET", "POST"})
     */
    public function editDescription(Request $request, User $user, EntityManagerInterface $entityManager, UserPasswordHasherInterface $userPasswordHasher, ImageUploader $imageUploader): Response
    {
        $form = $this->createForm(UserType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
   
            
            $entityManager->flush();
            
            // short message to make notice the user that his profile has been modified
            $this->addFlash('notice', 'Votre anecdote a bien été modifié !');

            return $this->redirectToRoute('home', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('front/user/description_edit.html.twig', [
            'user' => $user,
            'form' => $form,
        ]);
    }

    /**
     * @Route("/{id}", name="delete", methods={"POST"})
     */
    public function delete(Request $request, User $user, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$user->getId(), $request->request->get('_token'))) {
            $entityManager->remove($user);
            $entityManager->flush();
        }

        return $this->redirectToRoute('home', [], Response::HTTP_SEE_OTHER);
    }
}
