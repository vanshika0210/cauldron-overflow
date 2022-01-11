<?php 
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class QuestionController extends AbstractController
{
    /**
     * @Route("/",name="app_homepage")
     */

    public function homepage()
    {
        //return new Response('Hello vanshika,How are you!');
        return $this->render('question/homepage.html.twig');
    }

    /**
     * @Route("/questions/{slug}")
     */

    public function show($slug)
    {
        dump($this);
        return new Response(sprintf(
            
           ucwords(str_replace('-',' ',$slug))
        
        ));
    }
}
?>