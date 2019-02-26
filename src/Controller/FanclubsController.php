<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Fanclub;

class FanclubsController extends AbstractController
{
    /**
     * @Route("/start", name="start")
     */

    
    public function index()
    {
        $fanclubs = $this->getDoctrine()->getRepository(Fanclub::class)->findAll();
        $out = [];
        foreach($fanclubs as $fanclub) {
            array_push($out,[
              'name' => $fanclub->getName(),
              'series' => $fanclub->getSeries(),
              'count' => count($fanclubs)
            ]);
        }
        return $this->render('fanclubs/index.html.twig', [
            'fanclubs' => $out
        ]);
    }
       
}
