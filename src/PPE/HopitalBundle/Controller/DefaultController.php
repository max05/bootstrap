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

        $db = mysql_connect('localhost' , 'root','');
        mysql_select_db('ppehopitalpoulmanewan',$db);


        if(isset($_POST) && !empty($_POST['login']) && !empty($_POST['mdp'])) {
        extract($_POST);
         // on recupère le password de la table qui correspond au login du visiteur
        $sql = "select mdp from patient where nom='".$login."'";
        $req = mysql_query($sql) or die('Erreur SQL !<br>'.$sql.'<br>'.mysql_error());

        $data = mysql_fetch_assoc($req);

            if($data['mdp'] != $mdp) {
            echo '<p>Mauvais login / password. Merci de recommencer</p>';
             return $this->render('PPEHopitalBundle:Default:identification.html.twig');
             exit;
             }
             else {
                session_start();

                 $_SESSION['nom'] = $login;
    
                  echo 'Vous êtes bien logué en tant que : ',$login;
                  return $this->render('PPEHopitalBundle:Default:login.html.twig');
             }   
         }
    mysql_close();

        return $this->render('PPEHopitalBundle:Default:identification.html.twig');
    }

        public function loginAction()
    {
        return $this->render('PPEHopitalBundle:Default:login.html.twig');
    }
}
