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
        $__internal_b80efcc7e9e4ac1c26a84aef392fd7f9aba26119fc9b24ba343d306a5173558b = $this->env->getExtension("native_profiler");
        $__internal_b80efcc7e9e4ac1c26a84aef392fd7f9aba26119fc9b24ba343d306a5173558b->enter($__internal_b80efcc7e9e4ac1c26a84aef392fd7f9aba26119fc9b24ba343d306a5173558b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_percent.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b80efcc7e9e4ac1c26a84aef392fd7f9aba26119fc9b24ba343d306a5173558b->leave($__internal_b80efcc7e9e4ac1c26a84aef392fd7f9aba26119fc9b24ba343d306a5173558b_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_3739dd2e974b8acebc1e03b70a7bfdc597b691bcb2ac6a1122c616b68755c3fe = $this->env->getExtension("native_profiler");
        $__internal_3739dd2e974b8acebc1e03b70a7bfdc597b691bcb2ac6a1122c616b68755c3fe->enter($__internal_3739dd2e974b8acebc1e03b70a7bfdc597b691bcb2ac6a1122c616b68755c3fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    ";
        $context["value"] = ((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")) * 100);
        // line 16
        echo "    ";
        echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
        echo " %
";
        
        $__internal_3739dd2e974b8acebc1e03b70a7bfdc597b691bcb2ac6a1122c616b68755c3fe->leave($__internal_3739dd2e974b8acebc1e03b70a7bfdc597b691bcb2ac6a1122c616b68755c3fe_prof);

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
