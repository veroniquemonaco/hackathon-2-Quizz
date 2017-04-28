<?php

namespace QuizzBundle\Repository;

/**
 * QuestionHardRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class QuestionHardRepository extends \Doctrine\ORM\EntityRepository
{
    public function findByCategory($category) {
        $rawSql = "SELECT * FROM category JOIN question_hard ON category.id=question_hard.category_id WHERE category.id=$category";

        $stmt = $this->getEntityManager()->getConnection()->prepare($rawSql);
        $stmt->execute([]);

        return $stmt->fetchAll();
    }
}
