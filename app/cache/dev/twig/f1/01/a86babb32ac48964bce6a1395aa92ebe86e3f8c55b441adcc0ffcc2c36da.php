<?php

/* PPEHopitalBundle:Default:base.html.twig */
class __TwigTemplate_f101a86babb32ac48964bce6a1395aa92ebe86e3f8c55b441adcc0ffcc2c36da extends Twig_Template
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
  <title>Premiere ordinateur</title>
  <meta charset=\"utf-8\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
  <link rel=\"stylesheet\" href=\"http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css\">
  <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js\"></script>
  <script src=\"http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js\"></script>
</head>
<body>
<div class=\"row\">
\t <div class=\"col-md-3\"></div>
  <img src=\"photo-baby.jpg\" class=\"img-circle\" alt=\"Responsive image\" width=50% height=50% >
</div>

<div>
\t<div class=\"col-md-2\">
<ul class=\"nav nav-pills nav-stacked\">
  <li class=\"active\"><a href=\"#\">Menu</a></li>
  <li class=\"dropdown\">
    <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"";
        // line 28
        echo $this->env->getExtension('routing')->getPath("ppe_hopital_accueil", array());
        echo "\">Menu
    <span class=\"caret\"></span></a>
    <ul class=\"dropdown-menu\">
      <li><a href=\"";
        // line 31
        echo $this->env->getExtension('routing')->getPath("ppe_hopital_accueil", array());
        echo "\">Accueil</a></li>
      <li><a href=\"";
        // line 32
        echo $this->env->getExtension('routing')->getPath("ppe_hopital_services", array());
        echo "\">Services</a></li>
      <li><a href=\"";
        // line 33
        echo $this->env->getExtension('routing')->getPath("ppe_hopital_specialiter", array());
        echo "\">Spécialiter</a></li>
    </ul>
  </li>
    <li class=\"dropdown\">
    <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"";
        // line 37
        echo $this->env->getExtension('routing')->getPath("ppe_hopital_accueil", array());
        echo "\">Services
    <span class=\"caret\"></span></a>
    <ul class=\"dropdown-menu\">
      <li><a href=\"";
        // line 40
        echo $this->env->getExtension('routing')->getPath("ppe_hopital_accueil", array());
        echo "\">Accueil</a></li>
      <li><a href=\"";
        // line 41
        echo $this->env->getExtension('routing')->getPath("ppe_hopital_services", array());
        echo "\">Services</a></li>
      <li><a href=\"";
        // line 42
        echo $this->env->getExtension('routing')->getPath("ppe_hopital_specialiter", array());
        echo "\">Spécialiter</a></li>
    </ul>
  </li>
  <li class=\"dropdown\">
    <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">A propos
    <span class=\"caret\"></span></a>
    <ul class=\"dropdown-menu\">
  <li><a href=\"#\">Horaires</a></li>
  </li>
  </ul>
  <li class=\"dropdown\">
    <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">Nous contacter
    <span class=\"caret\"></span></a>
    <ul class=\"dropdown-menu\">
      <li><a href=\"#\">Plan</a></li>
      <li><a href=\"#\">Coordonnées</a></li>
      <li><a href=\"#\">SOUS MENU</a></li> 
      </li>
      </ul> 
</ul>
</div>
</div>
<div class=\"col-md-2\">
<form class=\"form-inline\">
  <div class=\"form-group\">
    <label class=\"sr-only\" for=\"exampleInputAmount\">Montant en euro</label>
    <div class=\"input-group\">
      
      <input type=\"text\" class=\"form-control\" id=\"exampleInputAmount\" placeholder=\"Montant\">
      <div class=\"input-group-addon\">euro</div>
    </div>
  </div>
  <button type=\"submit\" class=\"btn btn-primary\">Donne l'argent ! </button>
</form>
</div>
</body>
</html>
  ";
        // line 79
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
        return array (  142 => 79,  102 => 42,  98 => 41,  94 => 40,  88 => 37,  81 => 33,  77 => 32,  73 => 31,  67 => 28,  43 => 6,  40 => 5,  33 => 3,  30 => 2,  31 => 3,  28 => 2,);
    }
}
