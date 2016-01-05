<?php

/* FOSUserBundle:ChangePassword:changePassword.html.twig */
class __TwigTemplate_a517de7d5fe6f5736566ae66efef2620f25b42639c08b36c18f36efa467cbad0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:ChangePassword:changePassword.html.twig", 1);
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
        $__internal_825e9764b5daf60df8405dd32269661e9bdac289fecf28dd38415e1cae60e494 = $this->env->getExtension("native_profiler");
        $__internal_825e9764b5daf60df8405dd32269661e9bdac289fecf28dd38415e1cae60e494->enter($__internal_825e9764b5daf60df8405dd32269661e9bdac289fecf28dd38415e1cae60e494_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:changePassword.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_825e9764b5daf60df8405dd32269661e9bdac289fecf28dd38415e1cae60e494->leave($__internal_825e9764b5daf60df8405dd32269661e9bdac289fecf28dd38415e1cae60e494_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_62d52a4430fb22cdd9c79dbcda77c97c522cadf29a1d1d138cc486dc58339d71 = $this->env->getExtension("native_profiler");
        $__internal_62d52a4430fb22cdd9c79dbcda77c97c522cadf29a1d1d138cc486dc58339d71->enter($__internal_62d52a4430fb22cdd9c79dbcda77c97c522cadf29a1d1d138cc486dc58339d71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:changePassword_content.html.twig", "FOSUserBundle:ChangePassword:changePassword.html.twig", 4)->display($context);
        
        $__internal_62d52a4430fb22cdd9c79dbcda77c97c522cadf29a1d1d138cc486dc58339d71->leave($__internal_62d52a4430fb22cdd9c79dbcda77c97c522cadf29a1d1d138cc486dc58339d71_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:ChangePassword:changePassword.html.twig";
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
/* {% include "FOSUserBundle:ChangePassword:changePassword_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
