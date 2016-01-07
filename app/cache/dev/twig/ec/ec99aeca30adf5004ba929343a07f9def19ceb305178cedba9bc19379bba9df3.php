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
        $__internal_1f6785f3e05d456cc00152adea0c5d3b9a7c0265a225b1ebd266aff5e0ef254b = $this->env->getExtension("native_profiler");
        $__internal_1f6785f3e05d456cc00152adea0c5d3b9a7c0265a225b1ebd266aff5e0ef254b->enter($__internal_1f6785f3e05d456cc00152adea0c5d3b9a7c0265a225b1ebd266aff5e0ef254b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1f6785f3e05d456cc00152adea0c5d3b9a7c0265a225b1ebd266aff5e0ef254b->leave($__internal_1f6785f3e05d456cc00152adea0c5d3b9a7c0265a225b1ebd266aff5e0ef254b_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d87d5564cb4fd7efb58ce982010d0cbf48931e37d71c697985e4de97ddd05fb9 = $this->env->getExtension("native_profiler");
        $__internal_d87d5564cb4fd7efb58ce982010d0cbf48931e37d71c697985e4de97ddd05fb9->enter($__internal_d87d5564cb4fd7efb58ce982010d0cbf48931e37d71c697985e4de97ddd05fb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_d87d5564cb4fd7efb58ce982010d0cbf48931e37d71c697985e4de97ddd05fb9->leave($__internal_d87d5564cb4fd7efb58ce982010d0cbf48931e37d71c697985e4de97ddd05fb9_prof);

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
