<?php
/**
 * Created by PhpStorm.
 * User: julien
 * Date: 27/04/17
 * Time: 14:58
 */

namespace UserBundle\Entity;


use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="player")
 * Class Player
 * @package UserBundle\Entity
 */
class Player extends BaseUser
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     * @var
     */
    protected $id;

    public function __construct()
    {
        parent::__construct();
    }
}