<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class QuestionController
{
    #[Route('/')]
    public function homepage(): Response
    {

        return new Response('<h1>PB and Jams</h1>');
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