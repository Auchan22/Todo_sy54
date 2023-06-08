<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    #[Route('/', name: 'app_home')]
    public function index(): Response
    {
        return new Response("Que onda perruki", 200);
    }

    #[Route("/questions/{id}", name: "app_question_show")]
    public function show(int $id): Response
    {
        return new Response("Recibiendo el id: $id", 200);
    }
}
