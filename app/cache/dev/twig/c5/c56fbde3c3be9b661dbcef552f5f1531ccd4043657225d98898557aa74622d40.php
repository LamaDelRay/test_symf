<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_8b17e957fa39d82b6368917eb09b0542094d87d5137cf64e84481eb8b33cdf03 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:edit.html.twig", 1);
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
        $__internal_b4d858030c5519f8dc8a2732457cfc36cf8795b3b4533e7e9dfe8f83b4d89411 = $this->env->getExtension("native_profiler");
        $__internal_b4d858030c5519f8dc8a2732457cfc36cf8795b3b4533e7e9dfe8f83b4d89411->enter($__internal_b4d858030c5519f8dc8a2732457cfc36cf8795b3b4533e7e9dfe8f83b4d89411_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b4d858030c5519f8dc8a2732457cfc36cf8795b3b4533e7e9dfe8f83b4d89411->leave($__internal_b4d858030c5519f8dc8a2732457cfc36cf8795b3b4533e7e9dfe8f83b4d89411_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_6c34e36ce07326811fba8f5ab120eecfedef8bb8d71daacf2f37522ae521ce12 = $this->env->getExtension("native_profiler");
        $__internal_6c34e36ce07326811fba8f5ab120eecfedef8bb8d71daacf2f37522ae521ce12->enter($__internal_6c34e36ce07326811fba8f5ab120eecfedef8bb8d71daacf2f37522ae521ce12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_6c34e36ce07326811fba8f5ab120eecfedef8bb8d71daacf2f37522ae521ce12->leave($__internal_6c34e36ce07326811fba8f5ab120eecfedef8bb8d71daacf2f37522ae521ce12_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit.html.twig";
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
/* {% include "FOSUserBundle:Profile:edit_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
