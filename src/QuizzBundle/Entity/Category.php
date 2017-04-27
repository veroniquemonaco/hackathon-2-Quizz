<?php

namespace QuizzBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Category
 *
 * @ORM\Table(name="category")
 * @ORM\Entity(repositoryClass="QuizzBundle\Repository\CategoryRepository")
 */
class Category
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
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;


    /**
     * @var string
     *
     * @ORM\OneToMany(targetEntity="QuestionEasy",mappedBy="category")
     */
    private $questionsEasy;

    /**
     * @var string
     *
     * @ORM\OneToMany(targetEntity="QuestionMedium",mappedBy="category")
     */
    private $questionsMedium;

    /**
     * @var string
     *
     * @ORM\OneToMany(targetEntity="QuestionHard",mappedBy="category")
     */
    private $questionsHard;


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
     * Set name
     *
     * @param string $name
     *
     * @return Category
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->questionsEasy = new \Doctrine\Common\Collections\ArrayCollection();
        $this->questionsMedium = new \Doctrine\Common\Collections\ArrayCollection();
        $this->questionsHard = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add questionsEasy
     *
     * @param \QuizzBundle\Entity\QuestionEasy $questionsEasy
     *
     * @return Category
     */
    public function addQuestionsEasy(\QuizzBundle\Entity\QuestionEasy $questionsEasy)
    {
        $this->questionsEasy[] = $questionsEasy;

        return $this;
    }

    /**
     * Remove questionsEasy
     *
     * @param \QuizzBundle\Entity\QuestionEasy $questionsEasy
     */
    public function removeQuestionsEasy(\QuizzBundle\Entity\QuestionEasy $questionsEasy)
    {
        $this->questionsEasy->removeElement($questionsEasy);
    }

    /**
     * Get questionsEasy
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getQuestionsEasy()
    {
        return $this->questionsEasy;
    }

    /**
     * Add questionsMedium
     *
     * @param \QuizzBundle\Entity\QuestionMedium $questionsMedium
     *
     * @return Category
     */
    public function addQuestionsMedium(\QuizzBundle\Entity\QuestionMedium $questionsMedium)
    {
        $this->questionsMedium[] = $questionsMedium;

        return $this;
    }

    /**
     * Remove questionsMedium
     *
     * @param \QuizzBundle\Entity\QuestionMedium $questionsMedium
     */
    public function removeQuestionsMedium(\QuizzBundle\Entity\QuestionMedium $questionsMedium)
    {
        $this->questionsMedium->removeElement($questionsMedium);
    }

    /**
     * Get questionsMedium
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getQuestionsMedium()
    {
        return $this->questionsMedium;
    }

    /**
     * Add questionsHard
     *
     * @param \QuizzBundle\Entity\QuestionHard $questionsHard
     *
     * @return Category
     */
    public function addQuestionsHard(\QuizzBundle\Entity\QuestionHard $questionsHard)
    {
        $this->questionsHard[] = $questionsHard;

        return $this;
    }

    /**
     * Remove questionsHard
     *
     * @param \QuizzBundle\Entity\QuestionHard $questionsHard
     */
    public function removeQuestionsHard(\QuizzBundle\Entity\QuestionHard $questionsHard)
    {
        $this->questionsHard->removeElement($questionsHard);
    }

    /**
     * Get questionsHard
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getQuestionsHard()
    {
        return $this->questionsHard;
    }
}
