<?php

namespace App\Controller\Front;

use App\Entity\Person;
use App\Form\PersonType;
use App\Repository\PersonRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

/**
 * @Route("/person", name="person_", requirements={"id"="\d+"})
 */
class PersonController extends AbstractController
{

    /**
     * @Route("/{id}", name="show", methods={"GET"})
     */
    public function show(Person $person, PersonRepository $personRepository): Response
    {
        return $this->render('front/person/show.html.twig', [
            'person' => $person,
        ]);
    }

    /**
     * @Route("/new", name="new", methods={"GET", "POST"})
     */
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $person = new Person();
        $form = $this->createForm(PersonType::class, $person);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
           
            $entityManager->persist($person);
            $entityManager->flush();

            $this->addFlash('success', 'Nouvelle Personne Ajoutée !');

            return $this->redirectToRoute('home', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('front/person/new.html.twig', [
            'person' => $person,
            'form' => $form,
        ]);
    }

}
