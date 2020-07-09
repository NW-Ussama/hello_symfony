<?php

// I guess this is a comment

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HelloWorldController extends AbstractController {

    /**
     * @Route("/hello", name="greeting", methods={"GET"})
     */
    public function hello(): Response {
        $greeting = "Hello World !!";
        return new Response($greeting);
    }
}