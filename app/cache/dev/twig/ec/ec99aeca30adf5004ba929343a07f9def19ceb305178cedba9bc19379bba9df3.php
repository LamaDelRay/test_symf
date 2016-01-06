<?php

/* FOSUserBundle:Resetting:reset.html.twig */
class __TwigTemplate_e9e64ea3bca1168a94fd3d28bc93b2c572e45e9a8f2d80770a8686555b566766 extends Twig_Template
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
        $__internal_52b4b4dffefd37b7ee3be42eb35e29bd17119e63c53edea977afbcb5f7a563f0 = $this->env->getExtension("native_profiler");
        $__internal_52b4b4dffefd37b7ee3be42eb35e29bd17119e63c53edea977afbcb5f7a563f0->enter($__internal_52b4b4dffefd37b7ee3be42eb35e29bd17119e63c53edea977afbcb5f7a563f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_52b4b4dffefd37b7ee3be42eb35e29bd17119e63c53edea977afbcb5f7a563f0->leave($__internal_52b4b4dffefd37b7ee3be42eb35e29bd17119e63c53edea977afbcb5f7a563f0_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_2c5420cc605d03af5b77dc2cafb4d42470fac48e49eca384cb6d388e5e420b8f = $this->env->getExtension("native_profiler");
        $__internal_2c5420cc605d03af5b77dc2cafb4d42470fac48e49eca384cb6d388e5e420b8f->enter($__internal_2c5420cc605d03af5b77dc2cafb4d42470fac48e49eca384cb6d388e5e420b8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_2c5420cc605d03af5b77dc2cafb4d42470fac48e49eca384cb6d388e5e420b8f->leave($__internal_2c5420cc605d03af5b77dc2cafb4d42470fac48e49eca384cb6d388e5e420b8f_prof);

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
