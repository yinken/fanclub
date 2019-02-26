<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Entity\Fanclub;
class CreateFanclubController extends AbstractController
{
    /**
     * @Route("/create/fanclub", name="create_fanclub")
     */
    public function submit() {          
        $entityManager = $this->getDoctrine()->getManager();
  
        // Submit to Formsubmitdata table
          $fanclub = new Fanclub();
          // Get data from POST and parse
            $request = new Request($_POST);
            $data = json_decode($request->getContent(), true);

          // Set new table rows
            $fanclub->setName($data['name']);
            $fanclub->setSeries($data['series']);
          // Persist and flush
            $entityManager->persist($fanclub);
            $entityManager->flush();
        return new Response('Data saved to database with ID: '.json_encode($data));
    }
}
