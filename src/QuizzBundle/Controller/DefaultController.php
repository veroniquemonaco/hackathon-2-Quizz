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
        $param = ['questions'=>$questions, 'diff'=>$_POST['difficultee']];;
        return $this->render('QuizzBundle:Site:play.html.twig',$param);
    }

    /**
     * @Route("/result/", name="result")
     */
    public function resultAction()
    {

        $score = 0;
        for ($i = 1; $i <= 10; $i++)
        {
            if ($_POST['Question'.$i] == $_POST['answer'.$i])
            {
                $score += 10000;
            }
        }

        if ('QuestionEasy' == $_POST['diff'])
        {
            $score = $score*(111+(1/(mt_rand(1,99999999))));

        } elseif ('QuestionMedium' == $_POST['diff']) {
            $score = $score*(222+(1/(mt_rand(1,99999999))));

        } elseif ('QuestionHard' == $_POST['diff']) {
            $score = $score*(333+(1/(mt_rand(1,99999999))));
        }

        $param = ['score'=>$score];
        return $this->render('QuizzBundle:Site:result.html.twig',$param);
    }
}
