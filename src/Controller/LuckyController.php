<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class LuckyController extends AbstractController
{
    public function number($id)
    {
        $number = random_int(0, 100);

        return $this->render('nuber.html.twig', [
            'number' => $id
        ]);
    }
}