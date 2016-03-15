<?php

/* PPEHopitalBundle:Default:identification.html.twig */
class __TwigTemplate_f864e0441971fde52e49ab7592f6f20cc12bf31888616bab14c5e3dbd8006e8d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("PPEHopitalBundle:Default:base.html.twig");

        $this->blocks = array(
            'corps' => array($this, 'block_corps'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "PPEHopitalBundle:Default:base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_corps($context, array $blocks = array())
    {
        // line 3
        echo "<!DOCTYPE html>

<form  method=\"POST\" action=\"\">
<table align=\"center\" border=\"0\">
  <tr>
    <td>Login :</td>
    <td><input type=\"text\" name=\"login\" maxlength=\"250\"></td>
  </tr>
  <tr>
    <td>Mot de passe :</td>
    <td><input type=\"password\"name=\"mdp\" maxlength=\"50\"></td>
  </tr>
  <tr>
    <td colspan=\"2\" align=\"center\"><input type=\"submit\" value=\"Valider\"></td>
  </tr>

</table>
</form> 
";
    }

    public function getTemplateName()
    {
        return "PPEHopitalBundle:Default:identification.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  28 => 2,);
    }
}
