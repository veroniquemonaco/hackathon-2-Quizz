<?php

namespace QuizzBundle\Repository;

/**
 * QuestionMediumRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class QuestionMediumRepository extends \Doctrine\ORM\EntityRepository
{
    public function findByCategory($category) {
        $rawSql = "SELECT * FROM question_medium JOIN category ON question_medium.category_id=category.id WHERE category.id=$category";

        $stmt = $this->getEntityManager()->getConnection()->prepare($rawSql);
        $stmt->execute([]);

        return $stmt->fetchAll();
    }
}
