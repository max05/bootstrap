<?php

namespace PPE\HopitalBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('PPEHopitalBundle:Default:index.html.twig', array('name' => $name));
    }
}
