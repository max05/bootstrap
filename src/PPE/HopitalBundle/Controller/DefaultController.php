<?php

namespace PPE\HopitalBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('PPEHopitalBundle:Default:index.html.twig', array('name' => $name));
    }
    public function accueilAction()
    {
        return $this->render('PPEHopitalBundle:Default:accueil.html.twig');
    }
    public function medecinAction()
    {
        return $this->render('PPEHopitalBundle:Default:medecin.html.twig');
    }
    public function DemandeRDVAction()
    {
        return $this->render('PPEHopitalBundle:Default:DemandeRDV.html.twig');
    }
    public function specialiterAction()
    {
        return $this->render('PPEHopitalBundle:Default:specialiter.html.twig');
    }
    public function ListAction()
    {
        return $this->render('PPEHopitalBundle:Default:List.html.twig');
    }
        public function identificationAction()
    {
        return $this->render('PPEHopitalBundle:Default:identification.html.twig');
    }
}
