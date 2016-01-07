<?php

/* SonataAdminBundle:CRUD:edit_integer.html.twig */
class __TwigTemplate_d78a35992f08a55f4f331db273d7109fc0a626d3349026455012fe16a8ca92e7 extends Twig_Template
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
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "SonataAdminBundle:CRUD:edit_integer.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5de824374c130f5ac44a16e79416f6889bdbe9e718f48e8bb898ab2fac368654 = $this->env->getExtension("native_profiler");
        $__internal_5de824374c130f5ac44a16e79416f6889bdbe9e718f48e8bb898ab2fac368654->enter($__internal_5de824374c130f5ac44a16e79416f6889bdbe9e718f48e8bb898ab2fac368654_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_integer.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5de824374c130f5ac44a16e79416f6889bdbe9e718f48e8bb898ab2fac368654->leave($__internal_5de824374c130f5ac44a16e79416f6889bdbe9e718f48e8bb898ab2fac368654_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_dda6dfc56ac40fac7e2964fd5bc22b1e8aad1f93c0d609336f961b4abb638d62 = $this->env->getExtension("native_profiler");
        $__internal_dda6dfc56ac40fac7e2964fd5bc22b1e8aad1f93c0d609336f961b4abb638d62->enter($__internal_dda6dfc56ac40fac7e2964fd5bc22b1e8aad1f93c0d609336f961b4abb638d62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget', array("attr" => array("class" => "title")));
        
        $__internal_dda6dfc56ac40fac7e2964fd5bc22b1e8aad1f93c0d609336f961b4abb638d62->leave($__internal_dda6dfc56ac40fac7e2964fd5bc22b1e8aad1f93c0d609336f961b4abb638d62_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:edit_integer.html.twig";
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
