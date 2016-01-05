<?php

/* FOSUserBundle:Resetting:request.html.twig */
class __TwigTemplate_16913d500c7879b6e9b166c9134318206158982eed7921ae5797c11b9e7c2cd3 extends Twig_Template
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
        $__internal_40a17e12f69c65a29aba9dbc78dd9ab83694ee18ecc772bcf1326b9e4b5de129 = $this->env->getExtension("native_profiler");
        $__internal_40a17e12f69c65a29aba9dbc78dd9ab83694ee18ecc772bcf1326b9e4b5de129->enter($__internal_40a17e12f69c65a29aba9dbc78dd9ab83694ee18ecc772bcf1326b9e4b5de129_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_40a17e12f69c65a29aba9dbc78dd9ab83694ee18ecc772bcf1326b9e4b5de129->leave($__internal_40a17e12f69c65a29aba9dbc78dd9ab83694ee18ecc772bcf1326b9e4b5de129_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_7b8c54b7385c13ddf7f99cbfc67381fe89ed11e42f4b19cbcd45d689c9f43368 = $this->env->getExtension("native_profiler");
        $__internal_7b8c54b7385c13ddf7f99cbfc67381fe89ed11e42f4b19cbcd45d689c9f43368->enter($__internal_7b8c54b7385c13ddf7f99cbfc67381fe89ed11e42f4b19cbcd45d689c9f43368_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_7b8c54b7385c13ddf7f99cbfc67381fe89ed11e42f4b19cbcd45d689c9f43368->leave($__internal_7b8c54b7385c13ddf7f99cbfc67381fe89ed11e42f4b19cbcd45d689c9f43368_prof);

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
