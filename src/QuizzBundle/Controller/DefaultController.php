<?php

namespace QuizzBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use QuizzBundle\Entity\Category;

class DefaultController extends Controller
{
    /**
     * @Route("/")
     */
    public function indexAction()
    {
        return $this->render('QuizzBundle:Site:index.html.twig');
    }

    /**
     * @Route("/select/", name="select")
     */
    public function selectAction()
    {
        $em = $this->getDoctrine()->getManager();
        $category = $em->getRepository('QuizzBundle:Category')
            ->findAll();

        $param = ['categories'=>$category];
        return $this->render('QuizzBundle:Site:select.html.twig',$param);
    }

    /**
     * @Route("/play/", name="play")
     */
    public function playAction()
    {
        $em = $this->getDoctrine()->getManager();
        if ( "random" == $_POST['Cate'] )
        {
            $question = $em->getRepository('QuizzBundle:'.$_POST['difficultee'])
                ->findAll();

        } else {
        $category = $em->getRepository('QuizzBundle:Category')
            ->findBy(['name'=>$_POST['Cate']]);
        $cateId= $category[0]->getId();


            $question = $em->getRepository('QuizzBundle:'.$_POST['difficultee'])
                ->findByCategory($cateId);

        }
        shuffle($question);
        $questions = array_slice($question, 0, 10);
        $param = ['questions'=>$questions];
        return $this->render('QuizzBundle:Site:play.html.twig',$param);
    }

    /**
     * @Route("/result/", name="result")
     */
    public function resultAction()
    {
        return $this->render('QuizzBundle:Site:result.html.twig');
    }

    /**
     * @Route("/player/", name="player")
     */
    public function playerAction()
    {
        return $this->render('QuizzBundle:Site:player.html.twig');
    }
}
