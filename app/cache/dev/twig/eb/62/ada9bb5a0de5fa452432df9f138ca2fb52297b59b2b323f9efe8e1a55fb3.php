<?php

/* PPEHopitalBundle:Default:DemandeRDV.html.twig */
class __TwigTemplate_eb62ada9bb5a0de5fa452432df9f138ca2fb52297b59b2b323f9efe8e1a55fb3 extends Twig_Template
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
    <td>Entrez la date sous la forme JJ/MM/AAAA</td>
    <td><input type=\"text\" name=\"date\" maxlength=\"250\"></td>
  </tr>
  <tr>
    <td>Entrez l'heure sous la forme HH:MM :</td>
    <td><input type=\"password\"name=\"heure\" maxlength=\"50\"></td>
  </tr>
  <tr>
    <td colspan=\"2\" align=\"center\"><input type=\"submit\" value=\"Validez le Rendez-Vous\"></td>
  </tr>



</table>
</form> 
";
    }

    public function getTemplateName()
    {
        return "PPEHopitalBundle:Default:DemandeRDV.html.twig";
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
