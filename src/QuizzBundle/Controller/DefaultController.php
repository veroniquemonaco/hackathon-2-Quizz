<?php

namespace QuizzBundle\Controller;

use QuizzBundle\Entity\Game;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use QuizzBundle\Entity\Category;
use Symfony\Component\Validator\Constraints\DateTime;

class DefaultController extends Controller
{
    /**
     * @Route("/")
     */
    public function indexAction()
    {
        $user = $this->getUser();
        return $this->render('QuizzBundle:Site:index.html.twig', ['user' => $user]);
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

        $param = ['categories' => $category, 'user' => $user];
        return $this->render('QuizzBundle:Site:select.html.twig', $param);
    }

    /**
     * @Route("/play/", name="play")
     */
    public function playAction()
    {
        $user = $this->getUser();
        $em = $this->getDoctrine()->getManager();
        if ("random" == $_POST['Cate']) {
            $question = $em->getRepository('QuizzBundle:' . $_POST['difficultee'])
                ->findAll();
        } else {
            $category = $em->getRepository('QuizzBundle:Category')
                ->findBy(['name' => $_POST['Cate']]);
            $cateId = $category[0]->getId();
            $question = $em->getRepository('QuizzBundle:' . $_POST['difficultee'])
                ->findByCategory($cateId);
        }
        shuffle($question);
        $questions = array_slice($question, 0, 10);
        $starttime = microtime(true);

        $param = ['questions' => $questions, 'diff' => $_POST['difficultee'], 'user' => $user, 'starttime' => $starttime];
        return $this->render('QuizzBundle:Site:play.html.twig', $param);
    }

    /**
     * @Route("/result/", name="result")
     */
    public function resultAction()
    {
        $endtime = microtime(true);
        $starttime = $_POST['starttime'];
        $timer = $endtime - $starttime;
        $timer = round($timer);

        $user = $this->getUser();

        $scoreU = 0;
        $score = 0;
        for ($i = 1; $i <= 10; $i++) {
            if (isset($_POST['Question' . $i])) {
                if ($_POST['Question' . $i] == $_POST['answer' . $i]) {
                    $score += 10000;
                    $scoreU ++;
                }
            }
        }

        if ('QuestionEasy' == $_POST['diff']) {
            $score = $score * (111 + (1 / (mt_rand(1, 99999999))));

        } elseif ('QuestionMedium' == $_POST['diff']) {
            $score = $score * (222 + (1 / (mt_rand(1, 99999999))));

        } elseif ('QuestionHard' == $_POST['diff']) {
            $score = $score * (333 + (1 / (mt_rand(1, 99999999))));
        }

        $score = $score / $timer;

        if (!empty($_POST)) {
            $em = $this->getDoctrine()->getManager();
            $game = new Game();
            $game->setFinalscore($score);
            $game->setPlayer($user->getUsername());
            $game->setScore($scoreU);
            $game->setTime($timer);
            $game->setQuestionList($_POST['game']);
            $em->persist($game);
            $em->flush();
        }

        $param = ['score' => $score, 'user' => $user, 'temps' => $timer];
        return $this->render('QuizzBundle:Site:result.html.twig', $param);
    }


    /**
     * @Route("/player/", name="player")
     */
    public function playerAction()
    {
        $cat= 'Culture Générale';
        if (!empty($_POST)){
            $cat = $_POST['Cate'];
        }

        $user = $this->getUser();
        $em = $this->getDoctrine()->getManager();
        $category = $em->getRepository('QuizzBundle:Category')
            ->findAll();
        $game = $em->getRepository('QuizzBundle:Game')
            ->findAll();

        return $this->render('QuizzBundle:Site:player.html.twig', ['user'=>$user, 'categories'=>$category, 'game'=>$game, 'cat'=>$cat]);
    }

}
