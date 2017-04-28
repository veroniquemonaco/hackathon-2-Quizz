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
        $em = $this->getDoctrine()->getManager();
        $games = $em->getRepository('QuizzBundle:Game')
            ->findBy([], ['finalscore'=>'DESC'], 10,0);

        $user = $this->getUser();
        return $this->render('QuizzBundle:Site:index.html.twig', ['user' => $user, 'games'=>$games]);
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

        $em = $this->getDoctrine()->getManager();
        $games = $em->getRepository('QuizzBundle:Game')
            ->findBy([], ['finalscore'=>'DESC'], 10,0);

        $em = $this->getDoctrine()->getManager();
        $gamesSolo = $em->getRepository('QuizzBundle:Game')
            ->findBy(['player'=>$user->getUsername()], ['finalscore'=>'DESC'], 10,0);

        $param = ['categories' => $category, 'user' => $user, 'games'=>$games, 'gamesSolo'=>$gamesSolo];
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
            shuffle($question);
            $questions = array_slice($question, 0, 10);

            foreach ($questions as $question)
            {
                $game[] = $question->getId();
            }
        } else {
            $category = $em->getRepository('QuizzBundle:Category')
                ->findBy(['name' => $_POST['Cate']]);
            $cateId = $category[0]->getId();
            $question = $em->getRepository('QuizzBundle:' . $_POST['difficultee'])
                ->findByCategory($cateId);
            shuffle($question);
            $questions = array_slice($question, 0, 10);

            foreach ($questions as $question)
            {
                $game[] = $question['id'];
            }
        }

        $game=implode(',',$game);
        $starttime = microtime(true);


        $param = ['questions'=>$questions, 'diff'=>$_POST['difficultee'], 'user'=>$user, 'starttime'=>$starttime, 'game'=>$game];
        return $this->render('QuizzBundle:Site:play.html.twig',$param);

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
            $score = $score * 1111;

        } elseif ('QuestionMedium' == $_POST['diff']) {
            $score = $score * 2222;

        } elseif ('QuestionHard' == $_POST['diff']) {
            $score = $score * 3333;
        }

        $score = round($score / $timer);

        if (!empty($_POST)) {
            $em = $this->getDoctrine()->getManager();
            $game = new Game();
            $game->setFinalscore($score);
            $game->setPlayer($user->getUsername());
            $game->setScore($scoreU);
            $game->setTime($timer);
            $game->setQuestionList($_POST['game']);
            $game->setDiff($_POST['diff']);
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
        $user = $this->getUser();

        $cat= 'Culture Générale';
        $diff = 'Facile';
        $player = '';


        if (!empty($_POST)){
            $cat = $_POST['Cate'];
            $diff = $_POST['difficultee'];
            $player = $_POST['player'];
        }


        $em = $this->getDoctrine()->getManager();

        $category = $em->getRepository('QuizzBundle:Category')
            ->findAll();

        $score = $em->getRepository('QuizzBundle:Game')
            ->findBy(['score', 'player'=>$player]);

        $parties = $em->getRepository('QuizzBundle:Game')
            ->findBy (['diff'=>$diff, 'player'=>$player]);

        $somme = 0;
        foreach ($parties as $value){
            $somme += $value;
        }
        $result =  $somme / $parties;

        $gamesSolo = $em->getRepository('QuizzBundle:Game')
            ->findBy(['player'=>$user->getUsername()], ['finalscore'=>'DESC'], 10,0);

        return $this->render('QuizzBundle:Site:player.html.twig',
            ['user'=>$user, 'categories'=>$category, 'game'=>$game, 'cat'=>$cat, 'diff'=>$diff,
                'score'=>$score, 'gamesSolo'=>$gamesSolo,'parties'=>$parties]);

    }

//    public function moyenne()
//    {
//        $Nombres = func_get_args();
//        $Nb = sizeof($Nombres);
//        $Somme = 0;
//        foreach ($Nombres as $Valeur)
//        {
//            $Somme += $Valeur;
//        }
//        return ($Somme / $Nb);
//    }

}
