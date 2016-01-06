<?php

/* SonataAdminBundle:CRUD:list_datetime.html.twig */
class __TwigTemplate_c82ab1f99a21e69905d91afbb9693d92279bbf7d260bbd5690bb44ee3779b23d extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list_datetime.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1115d415ded8d38ba9560f7e8fc9dd99f6a1000d43f455702e07e02ddad81ce1 = $this->env->getExtension("native_profiler");
        $__internal_1115d415ded8d38ba9560f7e8fc9dd99f6a1000d43f455702e07e02ddad81ce1->enter($__internal_1115d415ded8d38ba9560f7e8fc9dd99f6a1000d43f455702e07e02ddad81ce1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_datetime.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1115d415ded8d38ba9560f7e8fc9dd99f6a1000d43f455702e07e02ddad81ce1->leave($__internal_1115d415ded8d38ba9560f7e8fc9dd99f6a1000d43f455702e07e02ddad81ce1_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_a98ff5d8f46854608a31bc8e5dc5e64200423f82e7152f20b3dea3f7f45f3345 = $this->env->getExtension("native_profiler");
        $__internal_a98ff5d8f46854608a31bc8e5dc5e64200423f82e7152f20b3dea3f7f45f3345->enter($__internal_a98ff5d8f46854608a31bc8e5dc5e64200423f82e7152f20b3dea3f7f45f3345_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

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
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))), "html", null, true);
        }
        
        $__internal_a98ff5d8f46854608a31bc8e5dc5e64200423f82e7152f20b3dea3f7f45f3345->leave($__internal_a98ff5d8f46854608a31bc8e5dc5e64200423f82e7152f20b3dea3f7f45f3345_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list_datetime.html.twig";
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
/* {% block field %}*/
/*     {%- if value is empty -%}*/
/*         &nbsp;*/
/*     {%- elseif field_description.options.format is defined -%}*/
/*         {{ value|date(field_description.options.format) }}*/
/*     {%- else -%}*/
/*         {{ value|date }}*/
/*     {%- endif -%}*/
/* {% endblock %}*/
/* */
