<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/")
     */
    public function homepageAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..'),
        ]);
    }

        /**
     * @Route("/hello/{name}", name="hello")
     */
    public function helloAction($name)
    {
        $request = Request::createFromGlobals();
        $pathInfo = $request->getPathInfo();
        return $this->render('default/hello.html.twig', array(
            'name' => $name,
            'pathInfo' => $pathInfo
        ));
    }

}