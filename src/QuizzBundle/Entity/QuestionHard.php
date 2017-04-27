<?php

namespace QuizzBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * QuestionHard
 *
 * @ORM\Table(name="question_hard")
 * @ORM\Entity(repositoryClass="QuizzBundle\Repository\QuestionHardRepository")
 */
class QuestionHard
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
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=255)
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="answer1", type="string", length=255)
     */
    private $answer1;

    /**
     * @var string
     *
     * @ORM\Column(name="answer2", type="string", length=255)
     */
    private $answer2;

    /**
     * @var string
     *
     * @ORM\Column(name="answer3", type="string", length=255)
     */
    private $answer3;

    /**
     * @var string
     *
     * @ORM\Column(name="answer4", type="string", length=255)
     */
    private $answer4;

    /**
     * @var string
     *
     * @ORM\Column(name="goodanswer", type="string", length=255)
     */
    private $goodanswer;

    /**
     * @var string
     *
     * @ORM\ManyToOne(targetEntity="Category",inversedBy="questionshard")
     */
    private $category;


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
     * Set title
     *
     * @param string $title
     *
     * @return QuestionHard
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set answer1
     *
     * @param string $answer1
     *
     * @return QuestionHard
     */
    public function setAnswer1($answer1)
    {
        $this->answer1 = $answer1;

        return $this;
    }

    /**
     * Get answer1
     *
     * @return string
     */
    public function getAnswer1()
    {
        return $this->answer1;
    }

    /**
     * Set answer2
     *
     * @param string $answer2
     *
     * @return QuestionHard
     */
    public function setAnswer2($answer2)
    {
        $this->answer2 = $answer2;

        return $this;
    }

    /**
     * Get answer2
     *
     * @return string
     */
    public function getAnswer2()
    {
        return $this->answer2;
    }

    /**
     * Set answer3
     *
     * @param string $answer3
     *
     * @return QuestionHard
     */
    public function setAnswer3($answer3)
    {
        $this->answer3 = $answer3;

        return $this;
    }

    /**
     * Get answer3
     *
     * @return string
     */
    public function getAnswer3()
    {
        return $this->answer3;
    }

    /**
     * Set answer4
     *
     * @param string $answer4
     *
     * @return QuestionHard
     */
    public function setAnswer4($answer4)
    {
        $this->answer4 = $answer4;

        return $this;
    }

    /**
     * Get answer4
     *
     * @return string
     */
    public function getAnswer4()
    {
        return $this->answer4;
    }

    /**
     * Set goodanswer
     *
     * @param string $goodanswer
     *
     * @return QuestionHard
     */
    public function setGoodanswer($goodanswer)
    {
        $this->goodanswer = $goodanswer;

        return $this;
    }

    /**
     * Get goodanswer
     *
     * @return string
     */
    public function getGoodanswer()
    {
        return $this->goodanswer;
    }

    /**
     * Set category
     *
     * @param \QuizzBundle\Entity\Category $category
     *
     * @return QuestionHard
     */
    public function setCategory(\QuizzBundle\Entity\Category $category = null)
    {
        $this->category = $category;

        return $this;
    }

    /**
     * Get category
     *
     * @return \QuizzBundle\Entity\Category
     */
    public function getCategory()
    {
        return $this->category;
    }
}
