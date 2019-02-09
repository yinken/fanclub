<?php
namespace App\Controller;

use App\Entity\Member;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

class Members extends AbstractController
  {
      /**
       * @Route("/members")
       */
    //   public function showMember()
    //   {
    //       $name = 'martin senne';

    //       return $this->render('members.html.twig', [
    //           'name' => $name
    //       ]);
    //   }
    
      public function showAllMembers()
      {
        $members = $this->getDoctrine()->getRepository(Member::class)->findAll();
        $out = [];
        foreach($members as $member) {
            array_push($out,[
                'name' => $member->getName(),
                'email' => $member->getEmail(),
                'fanclub' => $member->getFanclub(),
                'favchar' => $member->getFavchar()
            ]);
        }
        $response = new Response(
        json_encode($out),
            Response::HTTP_OK,
            array('content-type' => 'application/json')
            );
        return $response;
      }
  }