<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class DefaultController extends AbstractController
{
    #[Route('/base', name: 'base')]
    public function index(): Response
    {
        return $this->render('game/base.html.twig', [
        ]);
    }
}
