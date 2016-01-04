<?php

/* FOSUserBundle:Resetting:reset.html.twig */
class __TwigTemplate_0bf1385d15ea1737c9c783199454f72af89501572a6e1d8112b703d9abb72a19 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c3547dd7663417fec726f56d12add2d992d577a101c785c4ee4a0c2232718d00 = $this->env->getExtension("native_profiler");
        $__internal_c3547dd7663417fec726f56d12add2d992d577a101c785c4ee4a0c2232718d00->enter($__internal_c3547dd7663417fec726f56d12add2d992d577a101c785c4ee4a0c2232718d00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c3547dd7663417fec726f56d12add2d992d577a101c785c4ee4a0c2232718d00->leave($__internal_c3547dd7663417fec726f56d12add2d992d577a101c785c4ee4a0c2232718d00_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_dd8632ac6f66a00be4066fb2614a50ec2696d7f03bd2519dd866e272720b17fa = $this->env->getExtension("native_profiler");
        $__internal_dd8632ac6f66a00be4066fb2614a50ec2696d7f03bd2519dd866e272720b17fa->enter($__internal_dd8632ac6f66a00be4066fb2614a50ec2696d7f03bd2519dd866e272720b17fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_dd8632ac6f66a00be4066fb2614a50ec2696d7f03bd2519dd866e272720b17fa->leave($__internal_dd8632ac6f66a00be4066fb2614a50ec2696d7f03bd2519dd866e272720b17fa_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:reset.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/* {% include "FOSUserBundle:Resetting:reset_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
