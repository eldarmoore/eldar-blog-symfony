<?php
/**
 * Created by PhpStorm.
 * User: eldarmoore
 * Date: 24/08/2018
 * Time: 11:07
 */

namespace AppBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {

        $em = $this->getDoctrine()->getManager();
        $blogs = $em->getRepository('AppBundle:Blog')->findAll();

        return $this->render('default/index.html.twig', array(
            'blogs' => $blogs
        ));

    }

}