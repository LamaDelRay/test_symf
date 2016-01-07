<?php

/* SonataAdminBundle:CRUD:list_time.html.twig */
class __TwigTemplate_e844c9d604dce028edb69630c01da25639ee958d97804384516bb43f95b7b23b extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list_time.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_90a2d76c215660db6c7e874942d4e55feb60d3ade350ac5d63d315b6b4619354 = $this->env->getExtension("native_profiler");
        $__internal_90a2d76c215660db6c7e874942d4e55feb60d3ade350ac5d63d315b6b4619354->enter($__internal_90a2d76c215660db6c7e874942d4e55feb60d3ade350ac5d63d315b6b4619354_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_time.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_90a2d76c215660db6c7e874942d4e55feb60d3ade350ac5d63d315b6b4619354->leave($__internal_90a2d76c215660db6c7e874942d4e55feb60d3ade350ac5d63d315b6b4619354_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_4459a8b413119b60035053ad6b2d4d5bf129a8d330a795c08aa09e9dc1c1370e = $this->env->getExtension("native_profiler");
        $__internal_4459a8b413119b60035053ad6b2d4d5bf129a8d330a795c08aa09e9dc1c1370e->enter($__internal_4459a8b413119b60035053ad6b2d4d5bf129a8d330a795c08aa09e9dc1c1370e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        if (twig_test_empty((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")))) {
            // line 16
            echo "&nbsp;";
        } else {
            // line 18
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "H:i:s"), "html", null, true);
        }
        
        $__internal_4459a8b413119b60035053ad6b2d4d5bf129a8d330a795c08aa09e9dc1c1370e->leave($__internal_4459a8b413119b60035053ad6b2d4d5bf129a8d330a795c08aa09e9dc1c1370e_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list_time.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 18,  41 => 16,  39 => 15,  33 => 14,  18 => 12,);
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
/* {% block field %}*/
/*     {%- if value is empty -%}*/
/*         &nbsp;*/
/*     {%- else -%}*/
/*         {{ value|date('H:i:s') }}*/
/*     {%- endif -%}*/
/* {% endblock %}*/
/* */
