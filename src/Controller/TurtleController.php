<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class TurtleController extends Controller
{
    /**
     * @Route("/turtle", name="turtle")
     */
    public function turtle()
    {
        return $this->render('turtle/index.html.twig', [
            'controller_name' => 'TurtleController',
        ]);
    }
}
