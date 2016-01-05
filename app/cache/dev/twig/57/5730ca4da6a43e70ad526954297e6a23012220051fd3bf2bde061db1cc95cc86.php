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
        $__internal_0531bdd52f0c7d5173d028771890975e0130aa00f8d99c34832e1ea08e0a4f7a = $this->env->getExtension("native_profiler");
        $__internal_0531bdd52f0c7d5173d028771890975e0130aa00f8d99c34832e1ea08e0a4f7a->enter($__internal_0531bdd52f0c7d5173d028771890975e0130aa00f8d99c34832e1ea08e0a4f7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0531bdd52f0c7d5173d028771890975e0130aa00f8d99c34832e1ea08e0a4f7a->leave($__internal_0531bdd52f0c7d5173d028771890975e0130aa00f8d99c34832e1ea08e0a4f7a_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_77257a6f9ae46e2d629fedb9e922940aeecd108c58eca1cfa4ea092eb757b699 = $this->env->getExtension("native_profiler");
        $__internal_77257a6f9ae46e2d629fedb9e922940aeecd108c58eca1cfa4ea092eb757b699->enter($__internal_77257a6f9ae46e2d629fedb9e922940aeecd108c58eca1cfa4ea092eb757b699_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_77257a6f9ae46e2d629fedb9e922940aeecd108c58eca1cfa4ea092eb757b699->leave($__internal_77257a6f9ae46e2d629fedb9e922940aeecd108c58eca1cfa4ea092eb757b699_prof);

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
