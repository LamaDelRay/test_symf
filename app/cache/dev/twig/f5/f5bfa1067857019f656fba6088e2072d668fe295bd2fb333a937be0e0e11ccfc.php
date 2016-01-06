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
        $__internal_cef4499a76916a6a1a70c87ed83e8435d7d38a615c92d662659b8d07e00c5362 = $this->env->getExtension("native_profiler");
        $__internal_cef4499a76916a6a1a70c87ed83e8435d7d38a615c92d662659b8d07e00c5362->enter($__internal_cef4499a76916a6a1a70c87ed83e8435d7d38a615c92d662659b8d07e00c5362_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_boolean.html.twig"));

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
        
        $__internal_cef4499a76916a6a1a70c87ed83e8435d7d38a615c92d662659b8d07e00c5362->leave($__internal_cef4499a76916a6a1a70c87ed83e8435d7d38a615c92d662659b8d07e00c5362_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_bb8877c363e1cec9333a6e1c2a32ea8098c97c83469b718d251cd32e4f5bde71 = $this->env->getExtension("native_profiler");
        $__internal_bb8877c363e1cec9333a6e1c2a32ea8098c97c83469b718d251cd32e4f5bde71->enter($__internal_bb8877c363e1cec9333a6e1c2a32ea8098c97c83469b718d251cd32e4f5bde71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget');
        
        $__internal_bb8877c363e1cec9333a6e1c2a32ea8098c97c83469b718d251cd32e4f5bde71->leave($__internal_bb8877c363e1cec9333a6e1c2a32ea8098c97c83469b718d251cd32e4f5bde71_prof);

    }

    // line 15
    public function block_label($context, array $blocks = array())
    {
        $__internal_9b64399f812dabcd9384a02601791fb53c5a3d8a4c96c2e8e4e44dbd3d3c5f94 = $this->env->getExtension("native_profiler");
        $__internal_9b64399f812dabcd9384a02601791fb53c5a3d8a4c96c2e8e4e44dbd3d3c5f94->enter($__internal_9b64399f812dabcd9384a02601791fb53c5a3d8a4c96c2e8e4e44dbd3d3c5f94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

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
        
        $__internal_9b64399f812dabcd9384a02601791fb53c5a3d8a4c96c2e8e4e44dbd3d3c5f94->leave($__internal_9b64399f812dabcd9384a02601791fb53c5a3d8a4c96c2e8e4e44dbd3d3c5f94_prof);

    }

    // line 25
    public function block_errors($context, array $blocks = array())
    {
        $__internal_14d085757e27b5564798ab4d3535acb552ca2aa983d59aa4117afceaaad26a40 = $this->env->getExtension("native_profiler");
        $__internal_14d085757e27b5564798ab4d3535acb552ca2aa983d59aa4117afceaaad26a40->enter($__internal_14d085757e27b5564798ab4d3535acb552ca2aa983d59aa4117afceaaad26a40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "errors"));

        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'errors');
        
        $__internal_14d085757e27b5564798ab4d3535acb552ca2aa983d59aa4117afceaaad26a40->leave($__internal_14d085757e27b5564798ab4d3535acb552ca2aa983d59aa4117afceaaad26a40_prof);

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
