<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class GridController extends Controller
{
    /**
     * @Route("/grid", name="grid")
     */
    public function index()
    {
        return $this->render('grid/index.html.twig', [
            'controller_name' => 'GridController',
        ]);
    }
}
