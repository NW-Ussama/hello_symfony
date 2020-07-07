<?php

// I guess this is a comment

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;

class HelloWorldController {
    public function hello(): Response {
        $greeting = "Hello World !!";
        return new Response($greeting);
    }
}