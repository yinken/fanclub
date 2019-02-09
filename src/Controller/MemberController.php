<?php

namespace App\Controller;

use App\Entity\Member;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

class MemberController extends AbstractController
{
    /**
     * @Route("/member/{id}", name="member_show")
     */
    public function showMember($id) 
        {
            $member = $this->getDoctrine()
                ->getRepository(Member::class)
                ->find($id);
        
            if (!$member) {
                throw $this->createNotFoundException(
                    'No member found for id '.$id
                );
            }
        
            return new Response('This is the member with id '.$id.': '.$member->getName());
        }

}
