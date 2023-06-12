<?php


namespace App\Controller;

use Psr\Log\LoggerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CommentController extends AbstractController
{
    #[Route('/comment/{id}/vote/{direction<up|down>}', name: 'app_comment', methods: ["POST"])]
    public function commentVote(int $id, $direction, LoggerInterface $logger): Response
    {
        if($direction === "up"){
            $logger->info("voting up");
            $currentVoteCount = rand(7, 100);
        }else{
            $logger->info("voting down");
            $currentVoteCount = rand(0, 5);
        }

        return $this->json(["votes" => $currentVoteCount]);
    }
}
