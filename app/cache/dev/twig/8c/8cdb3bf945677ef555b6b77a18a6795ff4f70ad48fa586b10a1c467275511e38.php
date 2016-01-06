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
        $__internal_a93469c657aa6a31873ad762bbd8aeb2d37dc911d4d38bd1a586d053c7ee42e3 = $this->env->getExtension("native_profiler");
        $__internal_a93469c657aa6a31873ad762bbd8aeb2d37dc911d4d38bd1a586d053c7ee42e3->enter($__internal_a93469c657aa6a31873ad762bbd8aeb2d37dc911d4d38bd1a586d053c7ee42e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_integer.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a93469c657aa6a31873ad762bbd8aeb2d37dc911d4d38bd1a586d053c7ee42e3->leave($__internal_a93469c657aa6a31873ad762bbd8aeb2d37dc911d4d38bd1a586d053c7ee42e3_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_7270c35e0080cecb7c16d1575bee37baabaa75179a8d3f97ce93bf5c035c348f = $this->env->getExtension("native_profiler");
        $__internal_7270c35e0080cecb7c16d1575bee37baabaa75179a8d3f97ce93bf5c035c348f->enter($__internal_7270c35e0080cecb7c16d1575bee37baabaa75179a8d3f97ce93bf5c035c348f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget', array("attr" => array("class" => "title")));
        
        $__internal_7270c35e0080cecb7c16d1575bee37baabaa75179a8d3f97ce93bf5c035c348f->leave($__internal_7270c35e0080cecb7c16d1575bee37baabaa75179a8d3f97ce93bf5c035c348f_prof);

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
