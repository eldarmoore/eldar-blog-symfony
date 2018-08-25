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

    /**
     * @return mixed
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param mixed $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * @return mixed
     */
    public function getArticle()
    {
        return $this->article;
    }

    /**
     * @param mixed $article
     */
    public function setArticle($article)
    {
        $this->article = $article;
    }

    /**
     * @return mixed
     */
    public function getBlogDate()
    {
        return $this->blog_date;
    }

    /**
     * @param mixed $blog_date
     */
    public function setBlogDate($blog_date)
    {
        $this->blog_date = $blog_date;
    }

    /**
     * @return mixed
     */
    public function getUserId()
    {
        return $this->user_id;
    }

    /**
     * @param mixed $user_id
     */
    public function setUserId($user_id)
    {
        $this->user_id = $user_id;
    }


}