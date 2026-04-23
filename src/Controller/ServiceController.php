<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class ServiceController extends AbstractController
{
    // Exercice 2 & 3
    #[Route('/service/{name}', name: 'service_show')]
    public function showService(string $name): Response
    {
        // Fait appel au template Twig en lui passant la variable 'name'
        return $this->render('services/showService.html.twig', [
            'name' => $name,
        ]);
    }

    // Exercice 5 : Redirection
    #[Route('/gotoindex', name: 'service_goto_index')]
    public function goToIndex(): Response
    {
        // Redirige vers le nom de la route définie dans HomeController
        return $this->redirectToRoute('home_index');
    }
}