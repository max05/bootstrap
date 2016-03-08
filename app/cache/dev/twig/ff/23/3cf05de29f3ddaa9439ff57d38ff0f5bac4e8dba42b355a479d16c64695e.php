<?php

/* PPEHopitalBundle:Default:base.html.twig */
class __TwigTemplate_ff233cf05de29f3ddaa9439ff57d38ff0f5bac4e8dba42b355a479d16c64695e extends Twig_Template
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
<div>
<img src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("image/aaa.jpg"), "html", null, true);
        echo "\" alt=\"\" width=\"128\" height=\"128\" />
</div>

<nav class=\"navbar navbar-inverse\">
  <div class=\"container-fluid\">
    <div class=\"navbar-header\">
      <a class=\"navbar-brand\" href=\"#\">WebSiteName</a>
    </div>
    <ul class=\"nav navbar-nav\">
      <li class=\"active\"><a href=\"#\">Home</a></li>
      <li class=\"dropdown\"><a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">Menu <span class=\"caret\"></span></a>
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
      <li class=\"dropdown\"><a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">Horaire <span class=\"caret\"></span></a>
        <ul class=\"dropdown-menu\">
      <li><a href=\"";
        // line 38
        echo $this->env->getExtension('routing')->getPath("ppe_hopital_accueil", array());
        echo "\">Accueil</a></li>
      <li><a href=\"";
        // line 39
        echo $this->env->getExtension('routing')->getPath("ppe_hopital_services", array());
        echo "\">Services</a></li>
      <li><a href=\"";
        // line 40
        echo $this->env->getExtension('routing')->getPath("ppe_hopital_specialiter", array());
        echo "\">Spécialiter</a></li>
        </ul>
      </li>
      <li class=\"dropdown\"><a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">Consultation <span class=\"caret\"></span></a>
        <ul class=\"dropdown-menu\">
      <li><a href=\"";
        // line 45
        echo $this->env->getExtension('routing')->getPath("ppe_hopital_accueil", array());
        echo "\">Accueil</a></li>
      <li><a href=\"";
        // line 46
        echo $this->env->getExtension('routing')->getPath("ppe_hopital_services", array());
        echo "\">Services</a></li>
      <li><a href=\"";
        // line 47
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
        return array (  126 => 57,  113 => 47,  109 => 46,  105 => 45,  97 => 40,  93 => 39,  89 => 38,  81 => 33,  77 => 32,  73 => 31,  58 => 19,  43 => 6,  40 => 5,  33 => 3,  30 => 2,);
    }
}
