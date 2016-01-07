<?php

/* SonataAdminBundle:CRUD:show_percent.html.twig */
class __TwigTemplate_313677107d61b5c3e6695e39cfd0e999ba1a7d8619f772f5cbdd90727a018b37 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show_field.html.twig", "SonataAdminBundle:CRUD:show_percent.html.twig", 12);
        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_show_field.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a250886d88331e298592fc9c47208dcf48b4e09c375472e978290c4316f87fd5 = $this->env->getExtension("native_profiler");
        $__internal_a250886d88331e298592fc9c47208dcf48b4e09c375472e978290c4316f87fd5->enter($__internal_a250886d88331e298592fc9c47208dcf48b4e09c375472e978290c4316f87fd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_percent.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a250886d88331e298592fc9c47208dcf48b4e09c375472e978290c4316f87fd5->leave($__internal_a250886d88331e298592fc9c47208dcf48b4e09c375472e978290c4316f87fd5_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_52c7126d888ab9c19d273c8bc2baedc1b99b2d44f8728dc01eb226ab429b35ea = $this->env->getExtension("native_profiler");
        $__internal_52c7126d888ab9c19d273c8bc2baedc1b99b2d44f8728dc01eb226ab429b35ea->enter($__internal_52c7126d888ab9c19d273c8bc2baedc1b99b2d44f8728dc01eb226ab429b35ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    ";
        $context["value"] = ((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")) * 100);
        // line 16
        echo "    ";
        echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
        echo " %
";
        
        $__internal_52c7126d888ab9c19d273c8bc2baedc1b99b2d44f8728dc01eb226ab429b35ea->leave($__internal_52c7126d888ab9c19d273c8bc2baedc1b99b2d44f8728dc01eb226ab429b35ea_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:show_percent.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 16,  40 => 15,  34 => 14,  11 => 12,);
    }
}
/* {#*/
/* */
/* This file is part of the Sonata package.*/
/* */
/* (c) Thomas Rabaix <thomas.rabaix@sonata-project.org>*/
/* */
/* For the full copyright and license information, please view the LICENSE*/
/* file that was distributed with this source code.*/
/* */
/* #}*/
/* */
/* {% extends 'SonataAdminBundle:CRUD:base_show_field.html.twig' %}*/
/* */
/* {% block field %}*/
/*     {% set value = value * 100 %}*/
/*     {{ value }} %*/
/* {% endblock %}*/
/* */
