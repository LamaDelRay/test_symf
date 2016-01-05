<?php

/* FOSUserBundle:Resetting:reset.html.twig */
class __TwigTemplate_264fd85c42f9ef953dd1c4e4623090c314e886495a23a0fe9276da3e3ce72c19 extends Twig_Template
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
        $__internal_558e9cadd0cafe6242d7ba855259c92be36a7523e21223e783eaf506614dcaf7 = $this->env->getExtension("native_profiler");
        $__internal_558e9cadd0cafe6242d7ba855259c92be36a7523e21223e783eaf506614dcaf7->enter($__internal_558e9cadd0cafe6242d7ba855259c92be36a7523e21223e783eaf506614dcaf7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_558e9cadd0cafe6242d7ba855259c92be36a7523e21223e783eaf506614dcaf7->leave($__internal_558e9cadd0cafe6242d7ba855259c92be36a7523e21223e783eaf506614dcaf7_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f6f12425c3b0380646dd5d59674cad4fddd21e7246cdb56cfb5f4082a280e515 = $this->env->getExtension("native_profiler");
        $__internal_f6f12425c3b0380646dd5d59674cad4fddd21e7246cdb56cfb5f4082a280e515->enter($__internal_f6f12425c3b0380646dd5d59674cad4fddd21e7246cdb56cfb5f4082a280e515_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_f6f12425c3b0380646dd5d59674cad4fddd21e7246cdb56cfb5f4082a280e515->leave($__internal_f6f12425c3b0380646dd5d59674cad4fddd21e7246cdb56cfb5f4082a280e515_prof);

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
