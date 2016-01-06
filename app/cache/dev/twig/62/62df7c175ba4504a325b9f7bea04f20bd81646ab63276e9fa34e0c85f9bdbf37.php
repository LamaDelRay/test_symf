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
        $__internal_68255973c345001d217eda42a04f6efec96b175535896696dba86de5d498770b = $this->env->getExtension("native_profiler");
        $__internal_68255973c345001d217eda42a04f6efec96b175535896696dba86de5d498770b->enter($__internal_68255973c345001d217eda42a04f6efec96b175535896696dba86de5d498770b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_string.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_68255973c345001d217eda42a04f6efec96b175535896696dba86de5d498770b->leave($__internal_68255973c345001d217eda42a04f6efec96b175535896696dba86de5d498770b_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_3f3ef41f8863d1612d4e4a562ce2b7caa16d2fd842ce3ec8435d66e15cf70d64 = $this->env->getExtension("native_profiler");
        $__internal_3f3ef41f8863d1612d4e4a562ce2b7caa16d2fd842ce3ec8435d66e15cf70d64->enter($__internal_3f3ef41f8863d1612d4e4a562ce2b7caa16d2fd842ce3ec8435d66e15cf70d64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget', array("attr" => array("class" => "title")));
        
        $__internal_3f3ef41f8863d1612d4e4a562ce2b7caa16d2fd842ce3ec8435d66e15cf70d64->leave($__internal_3f3ef41f8863d1612d4e4a562ce2b7caa16d2fd842ce3ec8435d66e15cf70d64_prof);

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
