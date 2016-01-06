<?php

/* SonataAdminBundle:CRUD:edit_array.html.twig */
class __TwigTemplate_919d42af8889d0707810be219611854170e36389e91751c80b7bf3325a8cced7 extends Twig_Template
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
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "SonataAdminBundle:CRUD:edit_array.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9e389b54e8bbc29d52b18b56e4f8d4cb36c5e24ca7fb1972b6c1ce0b6a74e13a = $this->env->getExtension("native_profiler");
        $__internal_9e389b54e8bbc29d52b18b56e4f8d4cb36c5e24ca7fb1972b6c1ce0b6a74e13a->enter($__internal_9e389b54e8bbc29d52b18b56e4f8d4cb36c5e24ca7fb1972b6c1ce0b6a74e13a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_array.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9e389b54e8bbc29d52b18b56e4f8d4cb36c5e24ca7fb1972b6c1ce0b6a74e13a->leave($__internal_9e389b54e8bbc29d52b18b56e4f8d4cb36c5e24ca7fb1972b6c1ce0b6a74e13a_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_629b37b795c049b7531a1a0480d95e03ab84fe269f1058dc4cde195b12712a30 = $this->env->getExtension("native_profiler");
        $__internal_629b37b795c049b7531a1a0480d95e03ab84fe269f1058dc4cde195b12712a30->enter($__internal_629b37b795c049b7531a1a0480d95e03ab84fe269f1058dc4cde195b12712a30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    <span class=\"edit\">
        ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget', array("attr" => array("class" => "title")));
        echo "
    </span>
";
        
        $__internal_629b37b795c049b7531a1a0480d95e03ab84fe269f1058dc4cde195b12712a30->leave($__internal_629b37b795c049b7531a1a0480d95e03ab84fe269f1058dc4cde195b12712a30_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:edit_array.html.twig";
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
/* {% extends base_template %}*/
/* */
/* {% block field %}*/
/*     <span class="edit">*/
/*         {{ form_widget(field_element, {'attr': {'class' : 'title'}}) }}*/
/*     </span>*/
/* {% endblock %}*/
/* */
