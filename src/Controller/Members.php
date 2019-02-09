<?php
namespace App\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class Members extends AbstractController
  {
      /**
       * @Route("/members")
       */
      public function showMember()
      {
          $name = 'martin senne';

          return $this->render('members.html.twig', [
              'name' => $name
          ]);
      }
  }