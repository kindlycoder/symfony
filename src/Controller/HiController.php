<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class HiController extends AbstractController
{
    /**
     * @Route("/hi", name="hi")
     */
    public function index()
    {
        return $this->render('hi/index.html.twig', [
            'controller_name' => 'HiController',
        ]);
    }
}
