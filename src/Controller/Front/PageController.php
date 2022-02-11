<?php

namespace App\Controller\Front;

use App\Form\ContactType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class PageController extends AbstractController
{
    /**
     * To go to the contact form
     * 
     * @Route("/contact", name="contact")
     */
    public function contact(Request $request)
    {
        // we call creatForm method of the Form class to use the FormType
        $form = $this->createForm(ContactType::class);

        // we ask to form to check inputs in POST to validate the form
        $form->handleRequest($request);

        // we test if the form sended is valid
        if ($form->isSubmitted() && $form->isValid()) {
            $form->getData();
        }

        return $this->render('front/page/contact.html.twig',  [
            'form' => $form->createView()
        ]);
    }

    /** 
     * To show legal mention of the website
     * 
     * @Route("/legalmention", name="legal_mention")
     * 
     * @return Response
     */
    public function legal()
    {
        return $this->render('front/page/legalmention.html.twig');
    }

    /** 
     * To show sitemap of the website
     * 
     * @Route("/sitemap", name="sitemap")
     * 
     * @return Response
     */
    public function sitemap()
    {
        return $this->render('front/page/sitemap.html.twig');
    }

    /**
     * To download charte in PDF
     * 
     * @Route("/charte/download", name="charte_download")
     *
     * @return Response
     */
    public function download()
    {
        return $this->file('assets/charte_download.pdf');
    }

}
