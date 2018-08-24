<?php
/**
 * Created by PhpStorm.
 * User: eldarmoore
 * Date: 24/08/2018
 * Time: 11:07
 */

namespace AppBundle\Controller;


use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response; // Response

class BlogController
{
    /**
     * @Route("/") // use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route
     */
    public function showAction()
    {
        // use Symfony\Component\HttpFoundation\Response
        return new Response('Welcome to symfony version blog page!');
    }
}