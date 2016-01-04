<?php

/* FOSUserBundle:Group:new.html.twig */
class __TwigTemplate_56fead092034551bced8539d569246ade707d4171043bba517e5b12974284044 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:new.html.twig", 1);
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
        $__internal_c5ecaa83fe0e13d57144a1fd4f3cd51bf9c8c872f039c0f8b765ce6789fbe4e3 = $this->env->getExtension("native_profiler");
        $__internal_c5ecaa83fe0e13d57144a1fd4f3cd51bf9c8c872f039c0f8b765ce6789fbe4e3->enter($__internal_c5ecaa83fe0e13d57144a1fd4f3cd51bf9c8c872f039c0f8b765ce6789fbe4e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c5ecaa83fe0e13d57144a1fd4f3cd51bf9c8c872f039c0f8b765ce6789fbe4e3->leave($__internal_c5ecaa83fe0e13d57144a1fd4f3cd51bf9c8c872f039c0f8b765ce6789fbe4e3_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b84568474cadc4e9ec01057f9e7996824416baa713522ba077c43836931f087a = $this->env->getExtension("native_profiler");
        $__internal_b84568474cadc4e9ec01057f9e7996824416baa713522ba077c43836931f087a->enter($__internal_b84568474cadc4e9ec01057f9e7996824416baa713522ba077c43836931f087a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_b84568474cadc4e9ec01057f9e7996824416baa713522ba077c43836931f087a->leave($__internal_b84568474cadc4e9ec01057f9e7996824416baa713522ba077c43836931f087a_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:new.html.twig";
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
/* {% include "FOSUserBundle:Group:new_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
