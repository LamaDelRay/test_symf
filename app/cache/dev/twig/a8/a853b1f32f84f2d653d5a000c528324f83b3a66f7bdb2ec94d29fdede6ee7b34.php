<?php

/* FOSUserBundle:Resetting:request.html.twig */
class __TwigTemplate_1c1ade81ab75a3927efc099a144c14e0d920c390552e7469863cb94b1fbb826b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:request.html.twig", 1);
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
        $__internal_2cc0941d1be70f3496617fe3da410f845ecdec4b2353ff5879b9968797df8cc7 = $this->env->getExtension("native_profiler");
        $__internal_2cc0941d1be70f3496617fe3da410f845ecdec4b2353ff5879b9968797df8cc7->enter($__internal_2cc0941d1be70f3496617fe3da410f845ecdec4b2353ff5879b9968797df8cc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2cc0941d1be70f3496617fe3da410f845ecdec4b2353ff5879b9968797df8cc7->leave($__internal_2cc0941d1be70f3496617fe3da410f845ecdec4b2353ff5879b9968797df8cc7_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b0a5a20c5469b79c5513cd5847ecb787f2191361e1cbb37d1b3e9fff7bba5ade = $this->env->getExtension("native_profiler");
        $__internal_b0a5a20c5469b79c5513cd5847ecb787f2191361e1cbb37d1b3e9fff7bba5ade->enter($__internal_b0a5a20c5469b79c5513cd5847ecb787f2191361e1cbb37d1b3e9fff7bba5ade_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_b0a5a20c5469b79c5513cd5847ecb787f2191361e1cbb37d1b3e9fff7bba5ade->leave($__internal_b0a5a20c5469b79c5513cd5847ecb787f2191361e1cbb37d1b3e9fff7bba5ade_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request.html.twig";
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
/* {% include "FOSUserBundle:Resetting:request_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
