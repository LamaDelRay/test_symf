<?php

/* SonataAdminBundle:CRUD:edit_string.html.twig */
class __TwigTemplate_0c6b848f3c9176ff3e2345d2d5aa6fdd80a905db2e5282d5737a89952fa1b7b4 extends Twig_Template
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
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "SonataAdminBundle:CRUD:edit_string.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_00442131f8b7be1c81f9db16e9f1f42c34c01e988ccca7dbf4dab37e0c6b0cc2 = $this->env->getExtension("native_profiler");
        $__internal_00442131f8b7be1c81f9db16e9f1f42c34c01e988ccca7dbf4dab37e0c6b0cc2->enter($__internal_00442131f8b7be1c81f9db16e9f1f42c34c01e988ccca7dbf4dab37e0c6b0cc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_string.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_00442131f8b7be1c81f9db16e9f1f42c34c01e988ccca7dbf4dab37e0c6b0cc2->leave($__internal_00442131f8b7be1c81f9db16e9f1f42c34c01e988ccca7dbf4dab37e0c6b0cc2_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_89c3aca30f4a48f69a72e5a840fbd697ea7af9f6bd9aad362f9418b750f16f28 = $this->env->getExtension("native_profiler");
        $__internal_89c3aca30f4a48f69a72e5a840fbd697ea7af9f6bd9aad362f9418b750f16f28->enter($__internal_89c3aca30f4a48f69a72e5a840fbd697ea7af9f6bd9aad362f9418b750f16f28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget', array("attr" => array("class" => "title")));
        
        $__internal_89c3aca30f4a48f69a72e5a840fbd697ea7af9f6bd9aad362f9418b750f16f28->leave($__internal_89c3aca30f4a48f69a72e5a840fbd697ea7af9f6bd9aad362f9418b750f16f28_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:edit_string.html.twig";
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
