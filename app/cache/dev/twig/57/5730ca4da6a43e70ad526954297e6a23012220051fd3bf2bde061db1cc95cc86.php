<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_5966086777b694cb6a69ab35146086be6c6d780fe3a6f4fd1ffe4350ee13c812 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
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
        $__internal_f38cfc643dc6b412411150c8d1b853285f16ffc79da3129107ae8e1d152448e5 = $this->env->getExtension("native_profiler");
        $__internal_f38cfc643dc6b412411150c8d1b853285f16ffc79da3129107ae8e1d152448e5->enter($__internal_f38cfc643dc6b412411150c8d1b853285f16ffc79da3129107ae8e1d152448e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f38cfc643dc6b412411150c8d1b853285f16ffc79da3129107ae8e1d152448e5->leave($__internal_f38cfc643dc6b412411150c8d1b853285f16ffc79da3129107ae8e1d152448e5_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_be573ff0f85880f0772981e34a07e10cd32cf2ffbded53e15d8bc0508ccd953f = $this->env->getExtension("native_profiler");
        $__internal_be573ff0f85880f0772981e34a07e10cd32cf2ffbded53e15d8bc0508ccd953f->enter($__internal_be573ff0f85880f0772981e34a07e10cd32cf2ffbded53e15d8bc0508ccd953f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_be573ff0f85880f0772981e34a07e10cd32cf2ffbded53e15d8bc0508ccd953f->leave($__internal_be573ff0f85880f0772981e34a07e10cd32cf2ffbded53e15d8bc0508ccd953f_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
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
/* {% include "FOSUserBundle:Registration:register_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
