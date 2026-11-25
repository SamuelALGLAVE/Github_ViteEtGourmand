<?php

namespace App\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class HomeController extends AbstractController
{
    #[Route('/',name:'home',schemes: [ 'https'])]
    public function index(): Response {
        //return new Response('Hello World!');
        return $this->render( 'home/home.html.twig');
    }


}
