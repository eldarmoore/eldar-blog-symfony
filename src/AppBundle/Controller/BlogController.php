<?php
/**
 * Created by PhpStorm.
 * User: eldarmoore
 * Date: 24/08/2018
 * Time: 11:17
 */

namespace AppBundle\Controller;


use AppBundle\Entity\Blog;
use AppBundle\Entity\Comment;
use AppBundle\Form\BlogFormType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class BlogController extends Controller
{

    public function newAction(Request $request)
    {

        $form = $this->createForm(BlogFormType::class);

        // Only handles data on POST
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {

            $blog = $form->getData();
            $blog->setBlogDate(new \DateTime());
            $blog->setUserId(rand(10, 9999));

            $em = $this->getDoctrine()->getManager();
            $em->persist($blog);
            $em->flush();

            $this->addFlash('success', 'Blog created - you are amazing!!!');

            return $this->redirectToRoute('index_page');
        }

        return $this->render('blog/new.html.twig', [
            'blogForm' => $form->createView()
        ]);

    }

    public function editAction(Request $request, Blog $blog)
    {

        $form = $this->createForm(BlogFormType::class, $blog);

        // Only handles data on POST
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {

            $blog = $form->getData();
            $blog->setBlogDate(new \DateTime());
            $blog->setUserId(rand(10, 9999));

            $em = $this->getDoctrine()->getManager();
            $em->persist($blog);
            $em->flush();

            $this->addFlash('success', 'Blog updated - you are amazing!!!');

            return $this->redirectToRoute('index_page');
        }

        return $this->render('blog/edit.html.twig', [
            'blogForm' => $form->createView()
        ]);

    }


    public function indexAction($blogId)
    {

        $em = $this->getDoctrine()->getManager();
        $blog = $em->getRepository('AppBundle:Blog')->find($blogId);

        if (!$blog) {
            throw $this->createNotFoundException('No blog found!');
        }

        return $this->render('blog/blog.html.twig', array('blog' => $blog));
    }

}