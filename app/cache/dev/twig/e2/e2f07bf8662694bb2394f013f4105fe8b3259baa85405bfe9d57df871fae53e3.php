<?php

/* FOSUserBundle:Group:new.html.twig */
class __TwigTemplate_899fe5bd78ac67149158a70672a813677e6829d53fa2f7ea7daed84f5f5272fd extends Twig_Template
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
        $__internal_209f09af38f50ebdedc98596ac89fbd4704e7483aa697c5046bb53bb87f7aa57 = $this->env->getExtension("native_profiler");
        $__internal_209f09af38f50ebdedc98596ac89fbd4704e7483aa697c5046bb53bb87f7aa57->enter($__internal_209f09af38f50ebdedc98596ac89fbd4704e7483aa697c5046bb53bb87f7aa57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_209f09af38f50ebdedc98596ac89fbd4704e7483aa697c5046bb53bb87f7aa57->leave($__internal_209f09af38f50ebdedc98596ac89fbd4704e7483aa697c5046bb53bb87f7aa57_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ae24aff84aeaec6cac53a3850652c47d78cdc0f178edf414660b8748810fde01 = $this->env->getExtension("native_profiler");
        $__internal_ae24aff84aeaec6cac53a3850652c47d78cdc0f178edf414660b8748810fde01->enter($__internal_ae24aff84aeaec6cac53a3850652c47d78cdc0f178edf414660b8748810fde01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_ae24aff84aeaec6cac53a3850652c47d78cdc0f178edf414660b8748810fde01->leave($__internal_ae24aff84aeaec6cac53a3850652c47d78cdc0f178edf414660b8748810fde01_prof);

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
