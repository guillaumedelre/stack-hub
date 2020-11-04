<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\BadRequestHttpException;
use Symfony\Component\Mercure\PublisherInterface;
use Symfony\Component\Mercure\Update;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Validator\Constraints\DateTime;

class RoomController extends AbstractController
{
    /**
     * @Route("/room/{channel}", name="room", defaults={"channel": "general"})
     */
    public function room(string $channel, Request $request): Response
    {
        if (!$request->query->has('username')) {
            $this->addFlash('danger', 'Missing parameter: username is required');
            return $this->redirectToRoute('room_join');
        }

        if (!$request->query->has('avatar_url')) {
            $this->addFlash('danger', 'Missing parameter: avatar_url is required');
            return $this->redirectToRoute('room_join');
        }

        return $this->render(
            'room/index.html.twig',
            [
                'topic' => $channel,
                'publisher' => [
                    'username' => $request->query->get('username'),
                    'avatarUrl' => $request->query->get('avatar_url'),
                ],
            ]
        );
    }

    /**
     * @Route("/join", name="room_join")
     */
    public function join(): Response
    {
        return $this->render(
            'room/join.html.twig',
            [
                'topic' => 'general',
            ]
        );
    }

    /**
     * @Route("/room/publish", name="room_publish", priority="1")
     */
    public function publish(PublisherInterface $publisher, Request $request): Response
    {
        // 'https://avatars2.githubusercontent.com/u/2004182?s=460&v=4' GDE
        // 'https://avatars1.githubusercontent.com/u/798295?s=460&u=7dfab4c185ecdf601a4bb9ef2006fd3259e14c6d&v=4'; JMO

        $data = [
            "username"   => $request->query->get('username'),
            "sent_at"    => (new \DateTime())->format(\DateTime::ISO8601),
            "message"    => $request->query->get('message'),
            "channel"    => $request->query->get('channel'),
            "avatar_url" => $request->query->get('avatar_url'),
        ];

        $update = new Update(
            'https://localhost/room/' . $request->query->get('channel'),
            json_encode($data)
        );

        $publisher($update);

        return new Response();
    }
}
