<?php

/* SonataAdminBundle:CRUD:show_currency.html.twig */
class __TwigTemplate_68bf60f615945c9570988adccc68166cd8dfd0915e619e709200d46be4392765 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show_field.html.twig", "SonataAdminBundle:CRUD:show_currency.html.twig", 12);
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
        $__internal_d30d688aa63fbacdc9a31384a558e94f5f561e7f408bd288b5e3b25e8fad505e = $this->env->getExtension("native_profiler");
        $__internal_d30d688aa63fbacdc9a31384a558e94f5f561e7f408bd288b5e3b25e8fad505e->enter($__internal_d30d688aa63fbacdc9a31384a558e94f5f561e7f408bd288b5e3b25e8fad505e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_currency.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d30d688aa63fbacdc9a31384a558e94f5f561e7f408bd288b5e3b25e8fad505e->leave($__internal_d30d688aa63fbacdc9a31384a558e94f5f561e7f408bd288b5e3b25e8fad505e_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_8d5c390c2d06a80e37ba0eef2d424bc97957bf72d413d5d7535229c8cd0bb456 = $this->env->getExtension("native_profiler");
        $__internal_8d5c390c2d06a80e37ba0eef2d424bc97957bf72d413d5d7535229c8cd0bb456->enter($__internal_8d5c390c2d06a80e37ba0eef2d424bc97957bf72d413d5d7535229c8cd0bb456_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    ";
        if ( !(null === (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")))) {
            // line 16
            echo "        ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options", array()), "currency", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
            echo "
    ";
        }
        
        $__internal_8d5c390c2d06a80e37ba0eef2d424bc97957bf72d413d5d7535229c8cd0bb456->leave($__internal_8d5c390c2d06a80e37ba0eef2d424bc97957bf72d413d5d7535229c8cd0bb456_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:show_currency.html.twig";
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
/*     {% if value is not null %}*/
/*         {{ field_description.options.currency }} {{ value }}*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
