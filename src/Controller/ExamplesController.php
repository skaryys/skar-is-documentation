<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ExamplesController extends Controller
{
    /**
     * @Route("/examples", name="examples")
     */
    public function index()
    {
        return $this->render('examples/index.html.twig', [
            'controller_name' => 'ExamplesController',
        ]);
    }
}
