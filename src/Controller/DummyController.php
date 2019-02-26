<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class DummyController extends AbstractController
{
    /**
     * @Route("/dummy", name="dummy")
     */
    public function index()
    {
        return $this->render('dummy/index.html.twig', [
            'controller_name' => 'DummyController',
        ]);
    }
}
