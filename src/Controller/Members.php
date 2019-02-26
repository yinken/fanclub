<?php
namespace App\Controller;

use App\Entity\Member;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

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
        return $this->render('members.html.twig', [
            'members' => $members
        ]);
      }
  }