<?php

/* FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig */
class __TwigTemplate_fe51d0479e385d9b67670387a7ecf9472cfd4a1fbf822a1ec2a8713aef2cb8f5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig", 1);
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
        $__internal_b4b66addd427dcceb75448554eaa296e90dcc142abb7c1c30f861f81e08c1a7b = $this->env->getExtension("native_profiler");
        $__internal_b4b66addd427dcceb75448554eaa296e90dcc142abb7c1c30f861f81e08c1a7b->enter($__internal_b4b66addd427dcceb75448554eaa296e90dcc142abb7c1c30f861f81e08c1a7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b4b66addd427dcceb75448554eaa296e90dcc142abb7c1c30f861f81e08c1a7b->leave($__internal_b4b66addd427dcceb75448554eaa296e90dcc142abb7c1c30f861f81e08c1a7b_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_efe8d1cb99e52f546d13b1c296a939e0c027ee6ae91827e6d53cc6d28f8a08d0 = $this->env->getExtension("native_profiler");
        $__internal_efe8d1cb99e52f546d13b1c296a939e0c027ee6ae91827e6d53cc6d28f8a08d0->enter($__internal_efe8d1cb99e52f546d13b1c296a939e0c027ee6ae91827e6d53cc6d28f8a08d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.password_already_requested", array(), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_efe8d1cb99e52f546d13b1c296a939e0c027ee6ae91827e6d53cc6d28f8a08d0->leave($__internal_efe8d1cb99e52f546d13b1c296a939e0c027ee6ae91827e6d53cc6d28f8a08d0_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/* <p>{{ 'resetting.password_already_requested'|trans }}</p>*/
/* {% endblock fos_user_content %}*/
/* */
