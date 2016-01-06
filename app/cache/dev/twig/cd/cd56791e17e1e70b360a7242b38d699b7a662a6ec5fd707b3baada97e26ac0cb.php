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
        $__internal_04c210464a9f8ce1f33f207617d0526ede31a822739b53633bea96f56d5001a4 = $this->env->getExtension("native_profiler");
        $__internal_04c210464a9f8ce1f33f207617d0526ede31a822739b53633bea96f56d5001a4->enter($__internal_04c210464a9f8ce1f33f207617d0526ede31a822739b53633bea96f56d5001a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_currency.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_04c210464a9f8ce1f33f207617d0526ede31a822739b53633bea96f56d5001a4->leave($__internal_04c210464a9f8ce1f33f207617d0526ede31a822739b53633bea96f56d5001a4_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_09adc75e55320485772a27752fd7ef95c802c7b45f65044106ad374f76ac058e = $this->env->getExtension("native_profiler");
        $__internal_09adc75e55320485772a27752fd7ef95c802c7b45f65044106ad374f76ac058e->enter($__internal_09adc75e55320485772a27752fd7ef95c802c7b45f65044106ad374f76ac058e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

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
        
        $__internal_09adc75e55320485772a27752fd7ef95c802c7b45f65044106ad374f76ac058e->leave($__internal_09adc75e55320485772a27752fd7ef95c802c7b45f65044106ad374f76ac058e_prof);

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
