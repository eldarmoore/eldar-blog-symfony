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

class DefaultController extends Controller
{
    /**
     * @Route("/", name="index_page") // use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route
     */
    public function indexAction()
    {
        // use Symfony\Component\HttpFoundation\Response
        // return new Response('Welcome to symfony version blog page!');

        $blogs = [
            ['id' => 12, 'name' => 'American History',                                          'quick_content' => 'Some random and clever text is going on here.'],
            ['id' => 13, 'name' => 'Palestinians against peace',                                'quick_content' => 'Some random and clever text is going on here.'],
            ['id' => 14, 'name' => 'UN Human rights watch money goes straight to terror',       'quick_content' => 'Some random and clever text is going on here.'],
            ['id' => 15, 'name' => 'EU finances of Hezbollah',                                  'quick_content' => 'Some random and clever text is going on here.'],
            ['id' => 16, 'name' => 'Never Again',                                               'quick_content' => 'Some random and clever text is going on here.'],
            ['id' => 17, 'name' => 'Hillary Clinton financed Russia Advanced nuclear program.', 'quick_content' => 'Some random and clever text is going on here.']
        ];

        return $this->render('default/index.html.twig', array(
            'notes' => $blogs
        ));

    }
}