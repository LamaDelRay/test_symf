<?php

/* FOSUserBundle:Group:list.html.twig */
class __TwigTemplate_6b6a4307d3b619dd2c594d24b91d40bbeeff6fdaa9904a37fba16f56e6ae5f04 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:list.html.twig", 1);
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
        $__internal_b7785a4a0268b995ade9ab0882a7515cee8655f11f4df760f6a183bbaa41d715 = $this->env->getExtension("native_profiler");
        $__internal_b7785a4a0268b995ade9ab0882a7515cee8655f11f4df760f6a183bbaa41d715->enter($__internal_b7785a4a0268b995ade9ab0882a7515cee8655f11f4df760f6a183bbaa41d715_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b7785a4a0268b995ade9ab0882a7515cee8655f11f4df760f6a183bbaa41d715->leave($__internal_b7785a4a0268b995ade9ab0882a7515cee8655f11f4df760f6a183bbaa41d715_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_bde261abe6a2fd3ca5d213769247a39ba19c1f1f2c3e4f46e3bb8f881e67bc01 = $this->env->getExtension("native_profiler");
        $__internal_bde261abe6a2fd3ca5d213769247a39ba19c1f1f2c3e4f46e3bb8f881e67bc01->enter($__internal_bde261abe6a2fd3ca5d213769247a39ba19c1f1f2c3e4f46e3bb8f881e67bc01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_bde261abe6a2fd3ca5d213769247a39ba19c1f1f2c3e4f46e3bb8f881e67bc01->leave($__internal_bde261abe6a2fd3ca5d213769247a39ba19c1f1f2c3e4f46e3bb8f881e67bc01_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list.html.twig";
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
/* {% include "FOSUserBundle:Group:list_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
