<?php

/* SonataAdminBundle:CRUD:show_time.html.twig */
class __TwigTemplate_3cfbda3c515e3c4d1b87552f43cee0349fb79c73913e3b2e78c807cae9d0b9b3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show_field.html.twig", "SonataAdminBundle:CRUD:show_time.html.twig", 12);
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
        $__internal_d812053545b9cb2acde7fd1382bd102e47f2863596a2f305e12d7b03ac083800 = $this->env->getExtension("native_profiler");
        $__internal_d812053545b9cb2acde7fd1382bd102e47f2863596a2f305e12d7b03ac083800->enter($__internal_d812053545b9cb2acde7fd1382bd102e47f2863596a2f305e12d7b03ac083800_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_time.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d812053545b9cb2acde7fd1382bd102e47f2863596a2f305e12d7b03ac083800->leave($__internal_d812053545b9cb2acde7fd1382bd102e47f2863596a2f305e12d7b03ac083800_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_e40058c61f4a6542271bfebc081213e7836a743fc0cb96514e7b811db0a94369 = $this->env->getExtension("native_profiler");
        $__internal_e40058c61f4a6542271bfebc081213e7836a743fc0cb96514e7b811db0a94369->enter($__internal_e40058c61f4a6542271bfebc081213e7836a743fc0cb96514e7b811db0a94369_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        if (twig_test_empty((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")))) {
            // line 16
            echo "&nbsp;";
        } else {
            // line 18
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "H:i:s"), "html", null, true);
        }
        
        $__internal_e40058c61f4a6542271bfebc081213e7836a743fc0cb96514e7b811db0a94369->leave($__internal_e40058c61f4a6542271bfebc081213e7836a743fc0cb96514e7b811db0a94369_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:show_time.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 18,  42 => 16,  40 => 15,  34 => 14,  11 => 12,);
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
/*     {%- if value is empty -%}*/
/*         &nbsp;*/
/*     {%- else -%}*/
/*         {{ value|date('H:i:s') }}*/
/*     {%- endif -%}*/
/* {% endblock %}*/
/* */
