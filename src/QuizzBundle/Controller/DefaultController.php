<?php

namespace QuizzBundle\Controller;

use QuizzBundle\Entity\Game;
use QuizzBundle\QuizzBundle;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
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
            ->findBy([], ['finalscore' => 'DESC'], 10, 0);

        $user = $this->getUser();
        return $this->render('QuizzBundle:Site:index.html.twig', ['user' => $user, 'games' => $games]);
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
            ->findBy([], ['finalscore' => 'DESC'], 10, 0);

        $em = $this->getDoctrine()->getManager();
        $gamesSolo = $em->getRepository('QuizzBundle:Game')
            ->findBy(['player' => $user->getUsername()], ['finalscore' => 'DESC'], 10, 0);

        $param = ['categories' => $category, 'user' => $user, 'games' => $games, 'gamesSolo' => $gamesSolo];
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

            foreach ($questions as $question) {
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

            foreach ($questions as $question) {
                $game[] = $question['id'];
            }
        }

        $game = implode(',', $game);
        $starttime = microtime(true);

        $em = $this->getDoctrine()->getManager();
        $games = $em->getRepository('QuizzBundle:Game')
            ->findBy([], ['finalscore' => 'DESC'], 10, 0);

        $em = $this->getDoctrine()->getManager();
        $gamesSolo = $em->getRepository('QuizzBundle:Game')
            ->findBy(['player' => $user->getUsername()], ['finalscore' => 'DESC'], 10, 0);


        $param = ['questions' => $questions, 'diff' => $_POST['difficultee'], 'user' => $user, 'starttime' => $starttime,
            'game' => $game, 'games2' => $games, 'gamesSolo' => $gamesSolo];
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
                    $scoreU++;
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

        $em = $this->getDoctrine()->getManager();
        $games = $em->getRepository('QuizzBundle:Game')
            ->findBy([], ['finalscore' => 'DESC'], 10, 0);

        $gamesSolo = $em->getRepository('QuizzBundle:Game')
            ->findBy(['player' => $user->getUsername()], ['finalscore' => 'DESC'], 10, 0);

        $tmp = $em->getRepository('QuizzBundle:Game')
            ->findBy([], ['finalscore' => 'DESC']);
        $positionGen = 0;
        foreach ($tmp as $key => $val) {
            if ($score == $val->getFinalscore()) {
                $positionGen = $key + 1;
            }
        }

        $tmp2 = $em->getRepository('QuizzBundle:Game')
            ->findBy(['player' => $user->getUsername()], ['finalscore' => 'DESC']);
        $positionSolo = 0;
        foreach ($tmp2 as $key => $val) {
            if ($score == $val->getFinalscore()) {
                $positionSolo = $key + 1;
            }
        }


        $param = ['score' => $score, 'user' => $user, 'temps' => $timer, 'games' => $games, 'gamesSolo' => $gamesSolo,
            'positionGen' => $positionGen, 'positionSolo' => $positionSolo];
        return $this->render('QuizzBundle:Site:result.html.twig', $param);
    }


    /**
     * @Route("/player/", name="player")
     */
    public function playerAction()
    {
        $user = $this->getUser();
        $moyenne = $moyennetime = 0;
        $cat = 'Culture Générale';
        $diff = 'QuestionEasy';

        $em = $this->getDoctrine()->getManager();


        if (!empty($_POST['choix'])) {
            $cat = $_POST['Cate'];
            $diff = $_POST['difficultee'];
        }

        $parties = $em->getRepository('QuizzBundle:Game')
            ->findBy(['diff' => $diff, 'player' => $user->getUsername()]);

        $avg = [];
        foreach ($parties as $party) {
            $avg[] = $party->getScore();
        }
        if (count($parties) != 0) {
            $moyenne = array_sum($avg) / count($parties);
            $moyenne *= 10;
        }

        $times = $em->getRepository('QuizzBundle:Game')
            ->findBy(['player' => $user->getUsername()]);

        $chrono = [];
        foreach ($times as $time) {
            $chrono[] = $time->getTime();
        }
        if (count($times) != 0) {
            $moyennetime = array_sum($chrono) / count($times);
        }

        $category = $em->getRepository('QuizzBundle:Category')
            ->findAll();

        $gamesSolo = $em->getRepository('QuizzBundle:Game')
            ->findBy(['player' => $user->getUsername()], ['finalscore' => 'DESC'], 10, 0);

        return $this->render('QuizzBundle:Site:player.html.twig',

            ['user' => $user, 'categories' => $category, 'cat' => $cat, 'diff' => $diff, 'gamesSolo' => $gamesSolo, 'moyenne' => $moyenne, 'moyennetime' => $moyennetime]);

    }

    /**
     * @Route("/defis/", name="defis")
     */
    public function defisAction()
    {
        $em = $this->getDoctrine()->getManager();
        $games = $em->getRepository('QuizzBundle:Game')
            ->findBy([], ['finalscore' => 'DESC'], 20, 0);

        $user = $this->getUser();
        return $this->render('QuizzBundle:Site:defis.html.twig', ['user' => $user, 'games' => $games]);
    }

    /**
     * @Route("/duel/{id}", name="duel")
     *
     *
     */

    public function duelAction(Game $duel)
    {
        $em = $this->getDoctrine()->getManager();
        $user = $this->getUser();

        $games = $em->getRepository('QuizzBundle:Game')
            ->findBy([], ['finalscore' => 'DESC'], 10, 0);

        $em = $this->getDoctrine()->getManager();
        $gamesSolo = $em->getRepository('QuizzBundle:Game')
            ->findBy(['player' => $user->getUsername()], ['finalscore' => 'DESC'], 10, 0);


        $diff = $duel->getDiff();

        $questionList = explode(',', $duel->getQuestionList());

        $questions = [];
        foreach ($questionList as $question_id) {
            $questions[] = $em->getRepository('QuizzBundle:' . $diff)
                ->find($question_id);
        }

        $list = $duel->getQuestionList();

        $starttime = microtime(true);
        $user = $this->getUser();

        return $this->render('QuizzBundle:Site:duel.html.twig', ['user' => $user, 'games'=>$games, 'diff'=>$diff,
            'duel'=>$duel, 'starttime'=>$starttime, 'questions'=>$questions, 'list'=>$list, 'gamesSolo'=>$gamesSolo]);

    }

    /**
     * @Route("/final/", name="final")
     */
    public function finalAction()
    {
        $user = $this->getUser();

        $endtime = microtime(true);
        $starttime = $_POST['starttime'];
        $timer = $endtime - $starttime;
        $timer = round($timer);

        $scoreU = 0;
        $score = 0;
        for ($i = 1; $i <= 10; $i++) {
            if (isset($_POST['Question' . $i])) {
                if ($_POST['Question' . $i] == $_POST['answer' . $i]) {
                    $score += 10000;
                    $scoreU++;
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

        $em = $this->getDoctrine()->getManager();

        $tmp = $em->getRepository('QuizzBundle:Game')
            ->findBy([], ['finalscore' => 'DESC']);

        $games = $em->getRepository('QuizzBundle:Game')
            ->findBy([], ['finalscore' => 'DESC'], 10, 0);

        $positionGen = 0;
        foreach ($tmp as $key => $val) {
            if ($score == $val->getFinalscore()) {
                $positionGen = $key + 1;
            }
        }

        $param = ['score' => $score, 'user' => $user, 'temps' => $timer, 'games' => $games, 'positionGen' => $positionGen];
        return $this->render('QuizzBundle:Site:result.html.twig', $param);
    }


}
