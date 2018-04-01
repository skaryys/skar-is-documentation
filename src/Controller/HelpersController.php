<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class HelpersController extends Controller
{
    /**
     * @Route("/helpers", name="helpers")
     */
    public function index()
    {
        return $this->render('helpers/index.html.twig', [
            'controller_name' => 'HelpersController',
        ]);
    }
}
