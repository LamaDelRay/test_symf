<?php

/* FOSUserBundle:Group:show.html.twig */
class __TwigTemplate_f25af5ac9f2e08138f12522f3f95f2612d43326af1da63b598012d995a7ebe27 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:show.html.twig", 1);
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
        $__internal_1ecc325fd8a168b1bf0b4eb4d0d0445917c10d76d7c9993f6b5e91e3b3583f8c = $this->env->getExtension("native_profiler");
        $__internal_1ecc325fd8a168b1bf0b4eb4d0d0445917c10d76d7c9993f6b5e91e3b3583f8c->enter($__internal_1ecc325fd8a168b1bf0b4eb4d0d0445917c10d76d7c9993f6b5e91e3b3583f8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1ecc325fd8a168b1bf0b4eb4d0d0445917c10d76d7c9993f6b5e91e3b3583f8c->leave($__internal_1ecc325fd8a168b1bf0b4eb4d0d0445917c10d76d7c9993f6b5e91e3b3583f8c_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_31e732eab1df8425d0f09ad812b6a93b33715287e276418c1ede8ecab5b0f234 = $this->env->getExtension("native_profiler");
        $__internal_31e732eab1df8425d0f09ad812b6a93b33715287e276418c1ede8ecab5b0f234->enter($__internal_31e732eab1df8425d0f09ad812b6a93b33715287e276418c1ede8ecab5b0f234_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_31e732eab1df8425d0f09ad812b6a93b33715287e276418c1ede8ecab5b0f234->leave($__internal_31e732eab1df8425d0f09ad812b6a93b33715287e276418c1ede8ecab5b0f234_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show.html.twig";
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
/* {% include "FOSUserBundle:Group:show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
