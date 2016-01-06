<?php

/* FOSUserBundle:Group:new.html.twig */
class __TwigTemplate_350fd07834b19031fab1b9dd3ba443b5d09c6a4443083195b1da89424c7cd125 extends Twig_Template
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
        $__internal_515b6ca1092fee427023f7d10155e9f7a9e1bf080a9e79d4296a5fd820ed2d09 = $this->env->getExtension("native_profiler");
        $__internal_515b6ca1092fee427023f7d10155e9f7a9e1bf080a9e79d4296a5fd820ed2d09->enter($__internal_515b6ca1092fee427023f7d10155e9f7a9e1bf080a9e79d4296a5fd820ed2d09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_515b6ca1092fee427023f7d10155e9f7a9e1bf080a9e79d4296a5fd820ed2d09->leave($__internal_515b6ca1092fee427023f7d10155e9f7a9e1bf080a9e79d4296a5fd820ed2d09_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d88581adc9901d4ce6455fd66e4067115db21f64d15aeeee2874d61503c956f2 = $this->env->getExtension("native_profiler");
        $__internal_d88581adc9901d4ce6455fd66e4067115db21f64d15aeeee2874d61503c956f2->enter($__internal_d88581adc9901d4ce6455fd66e4067115db21f64d15aeeee2874d61503c956f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_d88581adc9901d4ce6455fd66e4067115db21f64d15aeeee2874d61503c956f2->leave($__internal_d88581adc9901d4ce6455fd66e4067115db21f64d15aeeee2874d61503c956f2_prof);

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
