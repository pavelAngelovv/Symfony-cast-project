<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class QuestionController extends AbstractController
{
    #[Route('/')]
    public function homepage(): Response
    {

        return $this->render('vinyl/homepage.html.twig', [
            "title" => "Cats & Boots"
        ]);
    }


    #[Route('/browse/{slug}')]
    public function browse(string $slug = null): Response
    {
        if (!$slug) {

            return new Response('Currently browsing main page');   
        }

        return new Response('Browsing: ' .$slug);   
    }
}