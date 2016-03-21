<?php

/* PPEHopitalBundle:Default:login.html.twig */
class __TwigTemplate_5be7ee2584c5baa811ba0fbb166e055eca6839e5994f0fe3a93d17f2d7a4fa1d extends Twig_Template
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
        echo "
<form  method=\"POST\" action=\"\">
<table align=\"center\" border=\"0\">
  <tr>
    <td colspan=\"2\" align=\"center\"><input type=\"button\" value=\"Se déconnecter\"></td>
  </tr>

</table>
</form> 
";
    }

    public function getTemplateName()
    {
        return "PPEHopitalBundle:Default:login.html.twig";
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
