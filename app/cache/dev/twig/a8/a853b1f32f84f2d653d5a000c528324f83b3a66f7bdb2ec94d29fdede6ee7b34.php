<?php

/* FOSUserBundle:Resetting:request.html.twig */
class __TwigTemplate_1c1ade81ab75a3927efc099a144c14e0d920c390552e7469863cb94b1fbb826b extends Twig_Template
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
        $__internal_f5a27eb6ce43c3650746c36d48a36892b91a1ee6ce9137b1de4b63fa06ccc2c8 = $this->env->getExtension("native_profiler");
        $__internal_f5a27eb6ce43c3650746c36d48a36892b91a1ee6ce9137b1de4b63fa06ccc2c8->enter($__internal_f5a27eb6ce43c3650746c36d48a36892b91a1ee6ce9137b1de4b63fa06ccc2c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f5a27eb6ce43c3650746c36d48a36892b91a1ee6ce9137b1de4b63fa06ccc2c8->leave($__internal_f5a27eb6ce43c3650746c36d48a36892b91a1ee6ce9137b1de4b63fa06ccc2c8_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_9ce4dd955e83454263b47e16341858c78c25b341d348b30b9a9b81f0ab6825d3 = $this->env->getExtension("native_profiler");
        $__internal_9ce4dd955e83454263b47e16341858c78c25b341d348b30b9a9b81f0ab6825d3->enter($__internal_9ce4dd955e83454263b47e16341858c78c25b341d348b30b9a9b81f0ab6825d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_9ce4dd955e83454263b47e16341858c78c25b341d348b30b9a9b81f0ab6825d3->leave($__internal_9ce4dd955e83454263b47e16341858c78c25b341d348b30b9a9b81f0ab6825d3_prof);

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
