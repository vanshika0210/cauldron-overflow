<?php 
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class QuestionController extends AbstractController
{
    /**
    * @Route("/questions/{slug}")
    */

    public function show($slug)
    {
        $answers=[            
            'Make sure your cat is sitting purrrfectly still 🤣',
        'Honestly, I like furry shoes better than MY cat',
        'Maybe... try saying the spell backwards?',

        ];
        //return new Response('Hello vanshika,How are you!');
        return $this->render('question/show.html.twig',['question'=>ucwords(str_replace('-',' ',$slug)),
        'answers'=>$answers,
    ]);
    }

    

   
}
?>