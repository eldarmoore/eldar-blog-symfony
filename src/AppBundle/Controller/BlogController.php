<?php
/**
 * Created by PhpStorm.
 * User: eldarmoore
 * Date: 24/08/2018
 * Time: 11:17
 */

namespace AppBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class BlogController extends Controller
{

    public function indexAction($blogId)
    {

        $content = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad adipisci alias asperiores corporis delectus doloremque dolores, enim facilis fugit id incidunt, libero, maxime nam nulla perspiciatis quidem quos similique sunt.';

        return $this->render('default/blog_page.html.twig', array(
            'id'    => $blogId,
            'header'  => 'My Blog',
            'content' => $content
        ));
    }
}