<?php

/* SonataAdminBundle:CRUD:edit_boolean.html.twig */
class __TwigTemplate_fe09027018d11e4468943465fd3debf5a783b66d91a083cf962c8749c438f785 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'field' => array($this, 'block_field'),
            'label' => array($this, 'block_label'),
            'errors' => array($this, 'block_errors'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c638c4953fd99f318b6699b2d9680a8c076f1920ec1b36dfec47589f813bd648 = $this->env->getExtension("native_profiler");
        $__internal_c638c4953fd99f318b6699b2d9680a8c076f1920ec1b36dfec47589f813bd648->enter($__internal_c638c4953fd99f318b6699b2d9680a8c076f1920ec1b36dfec47589f813bd648_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_boolean.html.twig"));

        // line 11
        echo "
<div>
    <div class=\"sonata-ba-field ";
        // line 13
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), "vars", array()), "errors", array())) > 0)) {
            echo "sonata-ba-field-error";
        }
        echo "\">
        ";
        // line 14
        $this->displayBlock('field', $context, $blocks);
        // line 15
        echo "        ";
        $this->displayBlock('label', $context, $blocks);
        // line 23
        echo "
        <div class=\"sonata-ba-field-error-messages\">
            ";
        // line 25
        $this->displayBlock('errors', $context, $blocks);
        // line 26
        echo "        </div>

    </div>
</div>
";
        
        $__internal_c638c4953fd99f318b6699b2d9680a8c076f1920ec1b36dfec47589f813bd648->leave($__internal_c638c4953fd99f318b6699b2d9680a8c076f1920ec1b36dfec47589f813bd648_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_defbe392765767bee65e55753f43911e270e439fa8493a121ad12b48b66f1f56 = $this->env->getExtension("native_profiler");
        $__internal_defbe392765767bee65e55753f43911e270e439fa8493a121ad12b48b66f1f56->enter($__internal_defbe392765767bee65e55753f43911e270e439fa8493a121ad12b48b66f1f56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget');
        
        $__internal_defbe392765767bee65e55753f43911e270e439fa8493a121ad12b48b66f1f56->leave($__internal_defbe392765767bee65e55753f43911e270e439fa8493a121ad12b48b66f1f56_prof);

    }

    // line 15
    public function block_label($context, array $blocks = array())
    {
        $__internal_93d866ec51580e6e425c2edd23aeacfe0c38f990c5718b6961df37c8eb2618a3 = $this->env->getExtension("native_profiler");
        $__internal_93d866ec51580e6e425c2edd23aeacfe0c38f990c5718b6961df37c8eb2618a3->enter($__internal_93d866ec51580e6e425c2edd23aeacfe0c38f990c5718b6961df37c8eb2618a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        // line 16
        echo "            ";
        if ($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "name", array(), "any", true, true)) {
            // line 17
            echo "                ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'label', (twig_test_empty($_label_ = $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options", array()), "name", array())) ? array() : array("label" => $_label_)));
            echo "
            ";
        } else {
            // line 19
            echo "                ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'label');
            echo "
            ";
        }
        // line 21
        echo "            <br>
        ";
        
        $__internal_93d866ec51580e6e425c2edd23aeacfe0c38f990c5718b6961df37c8eb2618a3->leave($__internal_93d866ec51580e6e425c2edd23aeacfe0c38f990c5718b6961df37c8eb2618a3_prof);

    }

    // line 25
    public function block_errors($context, array $blocks = array())
    {
        $__internal_9028d46ddf1528a411b6d3505c8b9ebd90ca661901c9d3d92c25793404554057 = $this->env->getExtension("native_profiler");
        $__internal_9028d46ddf1528a411b6d3505c8b9ebd90ca661901c9d3d92c25793404554057->enter($__internal_9028d46ddf1528a411b6d3505c8b9ebd90ca661901c9d3d92c25793404554057_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "errors"));

        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'errors');
        
        $__internal_9028d46ddf1528a411b6d3505c8b9ebd90ca661901c9d3d92c25793404554057->leave($__internal_9028d46ddf1528a411b6d3505c8b9ebd90ca661901c9d3d92c25793404554057_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:edit_boolean.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 25,  90 => 21,  84 => 19,  78 => 17,  75 => 16,  69 => 15,  57 => 14,  46 => 26,  44 => 25,  40 => 23,  37 => 15,  35 => 14,  29 => 13,  25 => 11,);
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
/* <div>*/
/*     <div class="sonata-ba-field {% if field_element.vars.errors|length > 0 %}sonata-ba-field-error{% endif %}">*/
/*         {% block field %}{{ form_widget(field_element) }}{% endblock %}*/
/*         {% block label %}*/
/*             {% if field_description.options.name is defined %}*/
/*                 {{ form_label(field_element, field_description.options.name) }}*/
/*             {% else %}*/
/*                 {{ form_label(field_element) }}*/
/*             {% endif %}*/
/*             <br>*/
/*         {% endblock %}*/
/* */
/*         <div class="sonata-ba-field-error-messages">*/
/*             {% block errors %}{{ form_errors(field_element) }}{% endblock %}*/
/*         </div>*/
/* */
/*     </div>*/
/* </div>*/
/* */
