<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        $templData = $em->getRepository('AppBundle:Template')->findAll();
        $data = $em->getRepository('AppBundle:Menu')->findData();
//        dump($data); exit;
        // replace this example code with whatever you need
        return $this->render('AppBundle::layout.html.twig',
            array('data'=>$data, 'templ'=>$templData)
        );
    }
}
