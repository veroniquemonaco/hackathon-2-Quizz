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
        $user = $this->getUser();
        return $this->render('QuizzBundle:Site:index.html.twig', ['user'=>$user]);
    }

    /**
     * @Route("/select/", name="select")
     */
    public function selectAction()
    {
        $user = $this->getUser();
        $em = $this->getDoctrine()->getManager();
        $category = $em->getRepository('QuizzBundle:Category')
            ->findAll();

        $param = ['categories'=>$category, 'user'=>$user];
        return $this->render('QuizzBundle:Site:select.html.twig',$param);
    }

    /**
     * @Route("/play/", name="play")
     */
    public function playAction()
    {
        $user = $this->getUser();
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
        $param = ['questions'=>$questions, 'user'=>$user];
        return $this->render('QuizzBundle:Site:play.html.twig',$param);
    }

    /**
     * @Route("/result/", name="result")
     */
    public function resultAction()
    {
        return $this->render('QuizzBundle:Site:result.html.twig');
    }
}
