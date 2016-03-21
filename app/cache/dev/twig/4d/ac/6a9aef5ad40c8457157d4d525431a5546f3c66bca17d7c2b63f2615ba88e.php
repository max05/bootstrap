<?php

/* PPEHopitalBundle:Default:base.html.twig */
class __TwigTemplate_4dac6a9aef5ad40c8457157d4d525431a5546f3c66bca17d7c2b63f2615ba88e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'styleshoots' => array($this, 'block_styleshoots'),
            'body' => array($this, 'block_body'),
            'corps' => array($this, 'block_corps'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_styleshoots($context, array $blocks = array())
    {
        // line 3
        echo " <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>
";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "
<!DOCTYPE HTML>
<html>
<head>
  <title>Hopital</title>
  <meta charset=\"utf-8\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
  <link rel=\"stylesheet\" href=\"http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css\">
  <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js\"></script>
  <script src=\"http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js\"></script>
</head>
<body>


<nav class=\"navbar navbar-inverse\">
  <div class=\"container-fluid\">
    <div class=\"navbar-header\">
      <a class=\"navbar-brand\" href=\"#\">Hopital</a>
    </div>
    <ul class=\"nav navbar-nav\">
      <li><a href=\"#\">Home</a></li>
      <li class=\"dropdown ";
        // line 27
        if (twig_in_filter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "attributes"), "get", array(0 => "_route"), "method"), array(0 => "ppe_hopital_accueil", 1 => "ppe_hopital_DemandeRDV", 2 => "ppe_hopital_specialiter"))) {
            echo "active";
        }
        echo "\"><a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">Menu <span class=\"caret\"></span></a>
        <ul class=\"dropdown-menu\">
      <li><a href=\"";
        // line 29
        echo $this->env->getExtension('routing')->getPath("ppe_hopital_accueil", array());
        echo "\">Accueil</a></li>
      <li><a href=\"";
        // line 30
        echo $this->env->getExtension('routing')->getPath("ppe_hopital_DemandeRDV", array());
        echo "\">Demande de Rendez-Vous</a></li>
      <li><a href=\"";
        // line 31
        echo $this->env->getExtension('routing')->getPath("ppe_hopital_specialiter", array());
        echo "\">Spécialiter</a></li>
        </ul>
      </li>
      <li class=\"dropdown\"><a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">Horaire <span class=\"caret\"></span></a>
        <ul class=\"dropdown-menu\">
      <li><a href=\"";
        // line 36
        echo $this->env->getExtension('routing')->getPath("ppe_hopital_accueil", array());
        echo "\">Accueil</a></li>

      <li><a href=\"";
        // line 38
        echo $this->env->getExtension('routing')->getPath("ppe_hopital_specialiter", array());
        echo "\">Spécialiter</a></li>
        </ul>
      </li>
      <li class=\"dropdown\"><a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">Consultation <span class=\"caret\"></span></a>
        <ul class=\"dropdown-menu\">
      <li><a href=\"";
        // line 43
        echo $this->env->getExtension('routing')->getPath("ppe_hopital_accueil", array());
        echo "\">Accueil</a></li>

      <li><a href=\"";
        // line 45
        echo $this->env->getExtension('routing')->getPath("ppe_hopital_specialiter", array());
        echo "\">Spécialiter</a></li>
        </ul>
      </li>
    </ul>
    <li><a href=\"";
        // line 49
        echo $this->env->getExtension('routing')->getPath("ppe_hopital_identificationPatient", array());
        echo "\">Connexion patient</a></li>
    <li><a href=\"";
        // line 50
        echo $this->env->getExtension('routing')->getPath("ppe_hopital_identificationSecretaire", array());
        echo "\">Connexion secrétaire</a></li>
  </div>
</nav>
  

</body>
</html>
  ";
        // line 57
        $this->displayBlock('corps', $context, $blocks);
    }

    public function block_corps($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "PPEHopitalBundle:Default:base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 57,  118 => 50,  114 => 49,  107 => 45,  102 => 43,  94 => 38,  89 => 36,  81 => 31,  77 => 30,  73 => 29,  66 => 27,  43 => 6,  40 => 5,  33 => 3,  30 => 2,);
    }
}
