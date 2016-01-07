<?php

/* SonataAdminBundle:CRUD:list_date.html.twig */
class __TwigTemplate_7ce3bf9df7e581734b2f2ee3ef29fd8f5c216e13862fcfbff278b6478573f6d7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list_date.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0065e13457804be048b36b4af2c0fef7abbc4f38d9e870323207fde8db740eee = $this->env->getExtension("native_profiler");
        $__internal_0065e13457804be048b36b4af2c0fef7abbc4f38d9e870323207fde8db740eee->enter($__internal_0065e13457804be048b36b4af2c0fef7abbc4f38d9e870323207fde8db740eee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_date.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0065e13457804be048b36b4af2c0fef7abbc4f38d9e870323207fde8db740eee->leave($__internal_0065e13457804be048b36b4af2c0fef7abbc4f38d9e870323207fde8db740eee_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_6c45547ff7d98e06fa9a0e43e702edd8c0291ce662d9fbd6a25f54166eb28e1e = $this->env->getExtension("native_profiler");
        $__internal_6c45547ff7d98e06fa9a0e43e702edd8c0291ce662d9fbd6a25f54166eb28e1e->enter($__internal_6c45547ff7d98e06fa9a0e43e702edd8c0291ce662d9fbd6a25f54166eb28e1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        if (twig_test_empty((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")))) {
            // line 16
            echo "&nbsp;";
        } elseif ($this->getAttribute($this->getAttribute(        // line 17
(isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "format", array(), "any", true, true)) {
            // line 18
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options", array()), "format", array())), "html", null, true);
        } else {
            // line 20
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "F j, Y"), "html", null, true);
        }
        
        $__internal_6c45547ff7d98e06fa9a0e43e702edd8c0291ce662d9fbd6a25f54166eb28e1e->leave($__internal_6c45547ff7d98e06fa9a0e43e702edd8c0291ce662d9fbd6a25f54166eb28e1e_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list_date.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 20,  45 => 18,  43 => 17,  41 => 16,  39 => 15,  33 => 14,  18 => 12,);
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
/* {% extends admin.getTemplate('base_list_field') %}*/
/* */
/* {% block field%}*/
/*     {%- if value is empty -%}*/
/*         &nbsp;*/
/*     {%- elseif field_description.options.format is defined -%}*/
/*         {{ value|date(field_description.options.format) }}*/
/*     {%- else -%}*/
/*         {{ value|date('F j, Y') }}*/
/*     {%- endif -%}*/
/* {% endblock %}*/
/* */
