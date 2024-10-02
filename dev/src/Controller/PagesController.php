<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PagesController extends AbstractController{

    #[Route('/pages', name: 'app_pages')]
    public function index(): Response{
        // th response will render the page that we will receive after hitting that "/pages" in url
        return $this->render('pages/index.html.twig',
            // ce 2 eme parameter c'est une list des parameter passer a la page index.html.twig
            // in index.html.twig page, we can access this parameter directly by {{controller_name}}
            [
                'controller_name' => 'PagesController',
            ]);
    }
}
