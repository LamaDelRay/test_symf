<?php

/* FOSUserBundle:Group:show.html.twig */
class __TwigTemplate_2c1e50672e16ebdbdd87af2a36562d2f8a60318abd1098f6427b44d632d8d3f7 extends Twig_Template
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
        $__internal_8983c2d3659e464132ebffd83f82275ea6cfc4b524f03995baee98c953f7a08b = $this->env->getExtension("native_profiler");
        $__internal_8983c2d3659e464132ebffd83f82275ea6cfc4b524f03995baee98c953f7a08b->enter($__internal_8983c2d3659e464132ebffd83f82275ea6cfc4b524f03995baee98c953f7a08b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8983c2d3659e464132ebffd83f82275ea6cfc4b524f03995baee98c953f7a08b->leave($__internal_8983c2d3659e464132ebffd83f82275ea6cfc4b524f03995baee98c953f7a08b_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_7aaf409bfe4f7b0c2ec86a4bcf3a7f9a0287ba2295aeced19eb2e4527ad68d24 = $this->env->getExtension("native_profiler");
        $__internal_7aaf409bfe4f7b0c2ec86a4bcf3a7f9a0287ba2295aeced19eb2e4527ad68d24->enter($__internal_7aaf409bfe4f7b0c2ec86a4bcf3a7f9a0287ba2295aeced19eb2e4527ad68d24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_7aaf409bfe4f7b0c2ec86a4bcf3a7f9a0287ba2295aeced19eb2e4527ad68d24->leave($__internal_7aaf409bfe4f7b0c2ec86a4bcf3a7f9a0287ba2295aeced19eb2e4527ad68d24_prof);

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
