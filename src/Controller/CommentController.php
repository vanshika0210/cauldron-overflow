<?php 

namespace App\Controller;
use Psr\Log\LoggerInterface;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;


class CommentController extends AbstractController
{
    /**
     * @Route("/comments/{id}/vote/{direction<up|down>}", methods="POST")
     */

    public function commentVote($id,$direction,LoggerInterface $logger)
    {
        
        if ($direction === 'up') {
            $logger->info('Voting Up!');
            $currentVoteCount = rand(7, 100);
        } else {
            $logger->info('Voting Down!');
            $currentVoteCount = rand(0, 5);
        }
        return new JsonResponse(['votes' => $currentVoteCount]);
    }
}
?>