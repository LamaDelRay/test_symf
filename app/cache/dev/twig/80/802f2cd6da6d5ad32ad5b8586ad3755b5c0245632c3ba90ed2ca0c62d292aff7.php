<?php

/* SonataAdminBundle:CRUD:list_currency.html.twig */
class __TwigTemplate_18fecedcb1c702e37e8dbff6bf4a6ac8a364976c4ef18507a70dbe609861733b extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list_currency.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b5f6bf8c1aba5549289e9907fb60552ffa87ce4838c303f570290f17250f5c1a = $this->env->getExtension("native_profiler");
        $__internal_b5f6bf8c1aba5549289e9907fb60552ffa87ce4838c303f570290f17250f5c1a->enter($__internal_b5f6bf8c1aba5549289e9907fb60552ffa87ce4838c303f570290f17250f5c1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_currency.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b5f6bf8c1aba5549289e9907fb60552ffa87ce4838c303f570290f17250f5c1a->leave($__internal_b5f6bf8c1aba5549289e9907fb60552ffa87ce4838c303f570290f17250f5c1a_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_486c13f13857a7b75ae866a0a270e111e228987db4d7ae0ba1aad85a6d5ba8db = $this->env->getExtension("native_profiler");
        $__internal_486c13f13857a7b75ae866a0a270e111e228987db4d7ae0ba1aad85a6d5ba8db->enter($__internal_486c13f13857a7b75ae866a0a270e111e228987db4d7ae0ba1aad85a6d5ba8db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

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
        
        $__internal_486c13f13857a7b75ae866a0a270e111e228987db4d7ae0ba1aad85a6d5ba8db->leave($__internal_486c13f13857a7b75ae866a0a270e111e228987db4d7ae0ba1aad85a6d5ba8db_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list_currency.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 16,  39 => 15,  33 => 14,  18 => 12,);
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
/*     {% if value is not null %}*/
/*         {{ field_description.options.currency }} {{ value }}*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
