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
  <title>Premiere ordinateur</title>
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
      <li class=\"active\"><a href=\"#\">Home</a></li>
      <li class=\"dropdown\"><a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">Menu <span class=\"caret\"></span></a>
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
      <li><a href=\"";
        // line 32
        echo $this->env->getExtension('routing')->getPath("ppe_hopital_identification", array());
        echo "\">Identification</a></li>
        </ul>
      </li>
      <li class=\"dropdown\"><a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">Horaire <span class=\"caret\"></span></a>
        <ul class=\"dropdown-menu\">
      <li><a href=\"";
        // line 37
        echo $this->env->getExtension('routing')->getPath("ppe_hopital_accueil", array());
        echo "\">Accueil</a></li>

      <li><a href=\"";
        // line 39
        echo $this->env->getExtension('routing')->getPath("ppe_hopital_specialiter", array());
        echo "\">Spécialiter</a></li>
        </ul>
      </li>
      <li class=\"dropdown\"><a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">Consultation <span class=\"caret\"></span></a>
        <ul class=\"dropdown-menu\">
      <li><a href=\"";
        // line 44
        echo $this->env->getExtension('routing')->getPath("ppe_hopital_accueil", array());
        echo "\">Accueil</a></li>

      <li><a href=\"";
        // line 46
        echo $this->env->getExtension('routing')->getPath("ppe_hopital_specialiter", array());
        echo "\">Spécialiter</a></li>
        </ul>
      </li>
    </ul>
  </div>
</nav>
  

</body>
</html>
  ";
        // line 56
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
        return array (  119 => 56,  106 => 46,  101 => 44,  93 => 39,  88 => 37,  80 => 32,  76 => 31,  72 => 30,  68 => 29,  43 => 6,  40 => 5,  33 => 3,  30 => 2,);
    }
}
