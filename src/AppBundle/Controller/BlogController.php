<?php
/**
 * Created by PhpStorm.
 * User: eldarmoore
 * Date: 24/08/2018
 * Time: 11:17
 */

namespace AppBundle\Controller;


use AppBundle\Entity\Blog;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class BlogController extends Controller
{
    public $content = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad adipisci alias asperiores corporis delectus doloremque dolores, enim facilis fugit id incidunt, libero, maxime nam nulla perspiciatis quidem quos similique sunt.';

    public function newAction()
    {
        $blog = new Blog();
        $blog->setTitle('My first Title');
        $blog->setArticle($this->content);
        $blog->setBlogDate(new \DateTime());
        $blog->setUserId(rand(10, 9999));

        // Entity Manager
        // Saving Data
        $em = $this->getDoctrine()->getManager();
        $em->persist($blog);
        $em->flush();

        return new Response('<html><body>Blog created!</body></html>');
    }

    public function indexAction($blogId)
    {

        $em = $this->getDoctrine()->getManager();
        $blog = $em->getRepository('AppBundle:Blog')->find($blogId);

        if (!$blog) {
            throw $this->createNotFoundException('No blog found!');
        }

        return $this->render('default/blog_page.html.twig', array('blog' => $blog));
    }

}