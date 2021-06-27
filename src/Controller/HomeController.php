<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/", name="app_home")
     */
    public function index(): Response
    {
        setlocale(LC_TIME, "fr-FR");
        $date = strftime('%e/%m/%Y');
        return $this->render('home/index.html.twig', [
            'Message' => $date,
        ]);
    }
}
