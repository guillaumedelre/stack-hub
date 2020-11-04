<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController
{
    /**
     * @Route("/", name="default")
     */
    public function index(): Response
    {
        return $this->render('default/index.html.twig', [
            'controller_name' => 'DefaultController',
        ]);
    }

    /**
     * @Route("/room", name="room")
     */
    public function room(): Response
    {
        return $this->render('default/room.html.twig', [
            'controller_name' => 'DefaultController',
        ]);
    }

    /**
     * @Route("/members", name="members")
     */
    public function members(): Response
    {
        return $this->render('default/members.html.twig', [
            'controller_name' => 'DefaultController',
        ]);
    }
}
