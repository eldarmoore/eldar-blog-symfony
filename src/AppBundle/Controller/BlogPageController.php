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

class BlogPageController extends Controller
{
    /**
     * @Route("/blog/{blogPageId}")
     */
    public function showAction($blogPageId)
    {
        // Basic Routing
        // return new Response('Welcome to the blog page number: '.$blogPageId);

        $notes = [
            'Octopus asked me a riddle, outsmarted me',
            'I counted 8 legs.. as they wrapped around me',
            'Inked!'
        ];

        return $this->render('default/index.html.twig', array(
            'id'    => $blogPageId,
            'name'  => 'Breitbart Blog',
            'url' => 'https://www.breitbart.com',
            'notes' => $notes
        ));
    }
}