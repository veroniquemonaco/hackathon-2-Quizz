<?php

namespace QuizzBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Game
 *
 * @ORM\Table(name="game")
 * @ORM\Entity(repositoryClass="QuizzBundle\Repository\GameRepository")
 */
class Game
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var int
     *
     * @ORM\Column(name="score", type="integer")
     */
    private $score;

    /**
     * @var string
     *
     * @ORM\Column(name="time", type="string", length=255)
     */
    private $time;

    /**
     * @var int
     *
     * @ORM\Column(name="finalscore", type="integer")
     */
    private $finalscore;

    /**
     * @var string
     *
     * @ORM\Column(name="questionList", type="string", length=255)
     */
    private $questionList;

    /**
     * @var string
     *
     * @ORM\Column(name="player", type="string", length=70)
     */
    private $player;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set score
     *
     * @param integer $score
     *
     * @return Game
     */
    public function setScore($score)
    {
        $this->score = $score;

        return $this;
    }

    /**
     * Get score
     *
     * @return int
     */
    public function getScore()
    {
        return $this->score;
    }

    /**
     * Set time
     *
     * @param string $time
     *
     * @return Game
     */
    public function setTime($time)
    {
        $this->time = $time;

        return $this;
    }

    /**
     * Get time
     *
     * @return string
     */
    public function getTime()
    {
        return $this->time;
    }

    /**
     * Set finalscore
     *
     * @param integer $finalscore
     *
     * @return Game
     */
    public function setFinalscore($finalscore)
    {
        $this->finalscore = $finalscore;

        return $this;
    }

    /**
     * @return string
     */
    public function getQuestionList()
    {
        return $this->questionList;
    }

    /**
     * @param string $questionList
     * @return Game
     */
    public function setQuestionList($questionList)
    {
        $this->questionList = $questionList;
        return $this;
    }

    /**
     * @return string
     */
    public function getPlayer()
    {
        return $this->player;
    }

    /**
     * @param string $player
     * @return Game
     */
    public function setPlayer($player)
    {
        $this->player = $player;
        return $this;
    }

    /**
     * Get finalscore
     *
     * @return int
     */
    public function getFinalscore()
    {
        return $this->finalscore;
    }
}
