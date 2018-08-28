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
//        $blog = new Blog();
//

        $form = $this->createForm(BlogFormType::class);

        // Only handles data on POST
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            // dump($form->getData());die;
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

//        $comment = new Comment();
//        $comment->setComment('Hello World!');
//        $comment->setUserId(rand(123,8999));
//        $comment->setCreatedAt(new \DateTime('-1 month'));
//        $comment->setBlog($blog);
//
//        // Entity Manager
//        // Saving Data
//        $em = $this->getDoctrine()->getManager();
//        $em->persist($blog);
//        $em->persist($comment);
//        $em->flush();
//
//        return new Response('<html><body>Blog created!</body></html>');
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