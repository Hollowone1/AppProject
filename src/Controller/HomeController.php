<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class HomeController extends AbstractController
{
    #[Route('/', name: 'app_home')]
    public function index(): Response
    {
        $movies = [
            [
                'title' => 'Inception',
                'poster' => '/uploads/inception.jpg',
                'description' => 'Un voleur talentueux s’infiltre dans les rêves pour voler des secrets...'
            ],
            [
                'title' => 'Interstellar',
                'poster' => '/uploads/interstellar.jpg',
                'description' => 'Un voyage à travers l’espace et le temps pour sauver l’humanité.'
            ],
            [
                'title' => 'The Batman',
                'poster' => '/uploads/batman.jpg',
                'description' => 'Le chevalier noir face à l’énigmatique Riddler.'
            ],
        ];

        return $this->render('home/index.html.twig', [
            'movies' => $movies
        ]);
    }
}
