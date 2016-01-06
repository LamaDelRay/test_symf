<?php

/* SonataAdminBundle:CRUD:edit_text.html.twig */
class __TwigTemplate_2d4464a08c1d7d18f266059d51a506ad4e3a8fa2ac67285722eb71006afa6a23 extends Twig_Template
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
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "SonataAdminBundle:CRUD:edit_text.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f72992b1beddb26835306334226b3c47ce1b92c8041eab14eede5d12aecac270 = $this->env->getExtension("native_profiler");
        $__internal_f72992b1beddb26835306334226b3c47ce1b92c8041eab14eede5d12aecac270->enter($__internal_f72992b1beddb26835306334226b3c47ce1b92c8041eab14eede5d12aecac270_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_text.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f72992b1beddb26835306334226b3c47ce1b92c8041eab14eede5d12aecac270->leave($__internal_f72992b1beddb26835306334226b3c47ce1b92c8041eab14eede5d12aecac270_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_f51cf0fa7fcade7d7eee780c24cb31f3917e56e7b5b5aac4311966944925d3cd = $this->env->getExtension("native_profiler");
        $__internal_f51cf0fa7fcade7d7eee780c24cb31f3917e56e7b5b5aac4311966944925d3cd->enter($__internal_f51cf0fa7fcade7d7eee780c24cb31f3917e56e7b5b5aac4311966944925d3cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget', array("attr" => array("class" => "title")));
        
        $__internal_f51cf0fa7fcade7d7eee780c24cb31f3917e56e7b5b5aac4311966944925d3cd->leave($__internal_f51cf0fa7fcade7d7eee780c24cb31f3917e56e7b5b5aac4311966944925d3cd_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:edit_text.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 14,  18 => 12,);
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
/* {% block field %}{{ form_widget(field_element, {'attr': {'class' : 'title'}}) }}{% endblock %}*/
/* */
