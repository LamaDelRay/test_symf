<?php

/* FOSUserBundle:ChangePassword:changePassword.html.twig */
class __TwigTemplate_896f93ab7433630ce8512872386542bf3dee780bb2e449ec74f152a0a646c574 extends Twig_Template
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
        $__internal_feb93843abaee18869365ddc92c52a58e7faee2ac00f300534e71513f56e9dcd = $this->env->getExtension("native_profiler");
        $__internal_feb93843abaee18869365ddc92c52a58e7faee2ac00f300534e71513f56e9dcd->enter($__internal_feb93843abaee18869365ddc92c52a58e7faee2ac00f300534e71513f56e9dcd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:changePassword.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_feb93843abaee18869365ddc92c52a58e7faee2ac00f300534e71513f56e9dcd->leave($__internal_feb93843abaee18869365ddc92c52a58e7faee2ac00f300534e71513f56e9dcd_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_614a2314e3f57a1f7056b06d41bed4019c33161343da25a9a6f60b75738a5c24 = $this->env->getExtension("native_profiler");
        $__internal_614a2314e3f57a1f7056b06d41bed4019c33161343da25a9a6f60b75738a5c24->enter($__internal_614a2314e3f57a1f7056b06d41bed4019c33161343da25a9a6f60b75738a5c24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:changePassword_content.html.twig", "FOSUserBundle:ChangePassword:changePassword.html.twig", 4)->display($context);
        
        $__internal_614a2314e3f57a1f7056b06d41bed4019c33161343da25a9a6f60b75738a5c24->leave($__internal_614a2314e3f57a1f7056b06d41bed4019c33161343da25a9a6f60b75738a5c24_prof);

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
