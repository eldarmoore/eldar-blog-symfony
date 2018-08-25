<?php
/**
 * Created by PhpStorm.
 * User: eldarmoore
 * Date: 24/08/2018
 * Time: 11:07
 */

namespace AppBundle\Controller;


use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response; // Response

class IndexController extends Controller
{
    /**
     * @Route("/") // use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route
     */
    public function showAction()
    {
        // use Symfony\Component\HttpFoundation\Response
        // return new Response('Welcome to symfony version blog page!');

        $blogs = [
            [
                'id' => 12,
                'name' => 'Elliot Blog',
                'quick_content' => 'Some Text 1222'
            ],
            [
                'id' => 13,
                'name' => 'Hellen Blog',
                'quick_content' => 'Some Text 1232'
            ],
            [
                'id' => 14,
                'name' => 'Alex Blog',
                'quick_content' => 'Some Text 14124'
            ],
            [
                'id' => 15,
                'name' => 'Dunar Blog',
                'quick_content' => 'Some Text 21312'
            ],
        ];

        return $this->render('default/index.html.twig', array(
            'name'  => 'Breitbart Blog',
            'url' => 'https://www.breitbart.com',
            'notes' => $blogs
        ));

    }
}