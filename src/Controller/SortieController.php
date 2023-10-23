<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SortieController extends AbstractController
{
    #[Route('/sortir', name: 'app_sortir')]
    public function index(): Response
    {
        return $this->render('sortir/index.html.twig', [
            'controller_name' => 'SortieController',
        ]);
    }
}
