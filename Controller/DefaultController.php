<?php

namespace FOB\HelloRestBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('FOBHelloRestBundle:Default:index.html.twig', array('name' => $name));
    }
}
