<?php

/* FOSUserBundle:ChangePassword:changePassword.html.twig */
class __TwigTemplate_ef378722c40bec906443d8e557ddad5e95e904302f0249ebc3603b8af9c86427 extends Twig_Template
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
        $__internal_60e7d0fddd09f64e4bd5e263331f59058ce0ebacf70200e7402fbdd500684238 = $this->env->getExtension("native_profiler");
        $__internal_60e7d0fddd09f64e4bd5e263331f59058ce0ebacf70200e7402fbdd500684238->enter($__internal_60e7d0fddd09f64e4bd5e263331f59058ce0ebacf70200e7402fbdd500684238_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:changePassword.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_60e7d0fddd09f64e4bd5e263331f59058ce0ebacf70200e7402fbdd500684238->leave($__internal_60e7d0fddd09f64e4bd5e263331f59058ce0ebacf70200e7402fbdd500684238_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_2c9f23fa4ee3982da73de3ff00794da52bd7013172038aabcc45daf4b6e60653 = $this->env->getExtension("native_profiler");
        $__internal_2c9f23fa4ee3982da73de3ff00794da52bd7013172038aabcc45daf4b6e60653->enter($__internal_2c9f23fa4ee3982da73de3ff00794da52bd7013172038aabcc45daf4b6e60653_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:changePassword_content.html.twig", "FOSUserBundle:ChangePassword:changePassword.html.twig", 4)->display($context);
        
        $__internal_2c9f23fa4ee3982da73de3ff00794da52bd7013172038aabcc45daf4b6e60653->leave($__internal_2c9f23fa4ee3982da73de3ff00794da52bd7013172038aabcc45daf4b6e60653_prof);

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
