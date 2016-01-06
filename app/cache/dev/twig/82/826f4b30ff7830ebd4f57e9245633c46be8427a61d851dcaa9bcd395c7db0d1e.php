<?php

/* SonataAdminBundle:CRUD:list_percent.html.twig */
class __TwigTemplate_3a745185ddb9551c80c9828dca698f9a5a2db9c9c92e9a8f9f443590883b5dd5 extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list_percent.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2b74d9aeb770061e9417f37de5eb3bcab7db5e86a4bccb30db763f90572816c7 = $this->env->getExtension("native_profiler");
        $__internal_2b74d9aeb770061e9417f37de5eb3bcab7db5e86a4bccb30db763f90572816c7->enter($__internal_2b74d9aeb770061e9417f37de5eb3bcab7db5e86a4bccb30db763f90572816c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_percent.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2b74d9aeb770061e9417f37de5eb3bcab7db5e86a4bccb30db763f90572816c7->leave($__internal_2b74d9aeb770061e9417f37de5eb3bcab7db5e86a4bccb30db763f90572816c7_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_63c70a78e47baf479ca52359ccb2c09263e087934ddacc5bd7fb3a8c4030256e = $this->env->getExtension("native_profiler");
        $__internal_63c70a78e47baf479ca52359ccb2c09263e087934ddacc5bd7fb3a8c4030256e->enter($__internal_63c70a78e47baf479ca52359ccb2c09263e087934ddacc5bd7fb3a8c4030256e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    ";
        $context["value"] = ((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")) * 100);
        // line 16
        echo "    ";
        echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
        echo " %
";
        
        $__internal_63c70a78e47baf479ca52359ccb2c09263e087934ddacc5bd7fb3a8c4030256e->leave($__internal_63c70a78e47baf479ca52359ccb2c09263e087934ddacc5bd7fb3a8c4030256e_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list_percent.html.twig";
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
/*     {% set value = value * 100 %}*/
/*     {{ value }} %*/
/* {% endblock %}*/
/* */
