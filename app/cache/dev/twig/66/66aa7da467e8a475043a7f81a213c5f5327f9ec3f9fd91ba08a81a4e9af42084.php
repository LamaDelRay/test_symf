<?php

/* SonataAdminBundle:CRUD:edit_file.html.twig */
class __TwigTemplate_5b0344e661a2881417ffe6c3fd350a96130ac237ff0163a2adc0056d81a7d928 extends Twig_Template
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
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "SonataAdminBundle:CRUD:edit_file.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0be27690ce20d594ac8d0097d07acc8d71a547b19cca2c92de85d2255cb62cfc = $this->env->getExtension("native_profiler");
        $__internal_0be27690ce20d594ac8d0097d07acc8d71a547b19cca2c92de85d2255cb62cfc->enter($__internal_0be27690ce20d594ac8d0097d07acc8d71a547b19cca2c92de85d2255cb62cfc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_file.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0be27690ce20d594ac8d0097d07acc8d71a547b19cca2c92de85d2255cb62cfc->leave($__internal_0be27690ce20d594ac8d0097d07acc8d71a547b19cca2c92de85d2255cb62cfc_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_29c4e532909a153165f89f520026090c99a74de05dcfcca33c97b92da07eef29 = $this->env->getExtension("native_profiler");
        $__internal_29c4e532909a153165f89f520026090c99a74de05dcfcca33c97b92da07eef29->enter($__internal_29c4e532909a153165f89f520026090c99a74de05dcfcca33c97b92da07eef29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget', array("attr" => array("class" => "title")));
        
        $__internal_29c4e532909a153165f89f520026090c99a74de05dcfcca33c97b92da07eef29->leave($__internal_29c4e532909a153165f89f520026090c99a74de05dcfcca33c97b92da07eef29_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:edit_file.html.twig";
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
