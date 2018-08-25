<?php
/**
 * Created by PhpStorm.
 * User: eldarmoore
 * Date: 24/08/2018
 * Time: 11:17
 */

namespace AppBundle\Controller;


use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class BlogController extends Controller
{
    /**
     * @Route("/blog/{blogPageId}", name="blog_page")
     */
    public function showAction($blogPageId)
    {
        // Basic Routing
        // return new Response('Welcome to the blog page number: '.$blogPageId);

        $content = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad adipisci alias asperiores corporis delectus doloremque dolores, enim facilis fugit id incidunt, libero, maxime nam nulla perspiciatis quidem quos similique sunt.';

        return $this->render('default/blog_page.html.twig', array(
            'id'    => $blogPageId,
            'header'  => 'My Blog',
            'content' => $content
        ));
    }
}