<?php

/* SonataUserBundle:ChangePassword:changePassword.html.twig */
class __TwigTemplate_ef754862b6991eefde538a260944eef5992c2965e376abed8ca5efe8115e160b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "SonataUserBundle:ChangePassword:changePassword.html.twig", 1);
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
        $__internal_e6976e44596e51c0532935d253bb2039d110e0ed9dbb79e46446bd7d8f24afb2 = $this->env->getExtension("native_profiler");
        $__internal_e6976e44596e51c0532935d253bb2039d110e0ed9dbb79e46446bd7d8f24afb2->enter($__internal_e6976e44596e51c0532935d253bb2039d110e0ed9dbb79e46446bd7d8f24afb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataUserBundle:ChangePassword:changePassword.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e6976e44596e51c0532935d253bb2039d110e0ed9dbb79e46446bd7d8f24afb2->leave($__internal_e6976e44596e51c0532935d253bb2039d110e0ed9dbb79e46446bd7d8f24afb2_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_2827e5b20b396c3baed0a5cf181cf1ff7b81841b74dbbd7b4f2b36e00dcd7e9e = $this->env->getExtension("native_profiler");
        $__internal_2827e5b20b396c3baed0a5cf181cf1ff7b81841b74dbbd7b4f2b36e00dcd7e9e->enter($__internal_2827e5b20b396c3baed0a5cf181cf1ff7b81841b74dbbd7b4f2b36e00dcd7e9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("SonataUserBundle:ChangePassword:changePassword_content.html.twig", "SonataUserBundle:ChangePassword:changePassword.html.twig", 4)->display($context);
        
        $__internal_2827e5b20b396c3baed0a5cf181cf1ff7b81841b74dbbd7b4f2b36e00dcd7e9e->leave($__internal_2827e5b20b396c3baed0a5cf181cf1ff7b81841b74dbbd7b4f2b36e00dcd7e9e_prof);

    }

    public function getTemplateName()
    {
        return "SonataUserBundle:ChangePassword:changePassword.html.twig";
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
/* {% include "SonataUserBundle:ChangePassword:changePassword_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
