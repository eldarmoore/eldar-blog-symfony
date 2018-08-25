<?php
/**
 * Created by PhpStorm.
 * User: eldarmoore
 * Date: 25/08/2018
 * Time: 18:57
 */

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="blog")
 */
class Blog
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string",options={"collate"="utf8_general_ci"})
     */
    private $title;

    /**
     * @ORM\Column(type="text",options={"collate"="utf8_general_ci"})
     */
    private $article;

    /**
     * @ORM\Column(type="datetime")
     */
    private $blog_date;

    /**
     * @ORM\Column(type="integer")
     */
    private $user_id;
}