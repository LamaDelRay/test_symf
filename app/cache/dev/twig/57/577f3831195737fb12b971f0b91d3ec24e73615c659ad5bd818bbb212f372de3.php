<?php

/* SonataAdminBundle:CRUD:base_show_field.html.twig */
class __TwigTemplate_d2b33f16ff1337f1f74207c8eb76da84a5680757fc09b34b5b910c3534b20ccf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'name' => array($this, 'block_name'),
            'field' => array($this, 'block_field'),
            'field_compare' => array($this, 'block_field_compare'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_32ca284172cc8fb88d929f05d67f9221e91980cc5b17aaa40c36d4a8e6938ca1 = $this->env->getExtension("native_profiler");
        $__internal_32ca284172cc8fb88d929f05d67f9221e91980cc5b17aaa40c36d4a8e6938ca1->enter($__internal_32ca284172cc8fb88d929f05d67f9221e91980cc5b17aaa40c36d4a8e6938ca1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_show_field.html.twig"));

        // line 11
        echo "
<th";
        // line 12
        if (((array_key_exists("is_diff", $context)) ? (_twig_default_filter((isset($context["is_diff"]) ? $context["is_diff"] : $this->getContext($context, "is_diff")), false)) : (false))) {
            echo " class=\"diff\"";
        }
        echo ">";
        $this->displayBlock('name', $context, $blocks);
        echo "</th>
<td>";
        // line 13
        $this->displayBlock('field', $context, $blocks);
        echo "</td>

";
        // line 15
        $this->displayBlock('field_compare', $context, $blocks);
        
        $__internal_32ca284172cc8fb88d929f05d67f9221e91980cc5b17aaa40c36d4a8e6938ca1->leave($__internal_32ca284172cc8fb88d929f05d67f9221e91980cc5b17aaa40c36d4a8e6938ca1_prof);

    }

    // line 12
    public function block_name($context, array $blocks = array())
    {
        $__internal_9e7358d48642ef2b94f6279971dd34ac404a78ae423da0594ac0858dff4bf3b2 = $this->env->getExtension("native_profiler");
        $__internal_9e7358d48642ef2b94f6279971dd34ac404a78ae423da0594ac0858dff4bf3b2->enter($__internal_9e7358d48642ef2b94f6279971dd34ac404a78ae423da0594ac0858dff4bf3b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "name"));

        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "trans", array(0 => $this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "label", array()), 1 => array(), 2 => $this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "translationDomain", array())), "method"), "html", null, true);
        
        $__internal_9e7358d48642ef2b94f6279971dd34ac404a78ae423da0594ac0858dff4bf3b2->leave($__internal_9e7358d48642ef2b94f6279971dd34ac404a78ae423da0594ac0858dff4bf3b2_prof);

    }

    // line 13
    public function block_field($context, array $blocks = array())
    {
        $__internal_f15aeca1a85dfc1387dcefa472ec29885e70307a9a764df4ff5cf75f4299bc39 = $this->env->getExtension("native_profiler");
        $__internal_f15aeca1a85dfc1387dcefa472ec29885e70307a9a764df4ff5cf75f4299bc39->enter($__internal_f15aeca1a85dfc1387dcefa472ec29885e70307a9a764df4ff5cf75f4299bc39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        if ($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options", array()), "safe", array())) {
            echo (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"));
        } else {
            echo nl2br(twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true));
        }
        
        $__internal_f15aeca1a85dfc1387dcefa472ec29885e70307a9a764df4ff5cf75f4299bc39->leave($__internal_f15aeca1a85dfc1387dcefa472ec29885e70307a9a764df4ff5cf75f4299bc39_prof);

    }

    // line 15
    public function block_field_compare($context, array $blocks = array())
    {
        $__internal_541d8d02ec5f21b423546ef72bdba8b41b487b5d958e46ea719c253f2bdc6b3d = $this->env->getExtension("native_profiler");
        $__internal_541d8d02ec5f21b423546ef72bdba8b41b487b5d958e46ea719c253f2bdc6b3d->enter($__internal_541d8d02ec5f21b423546ef72bdba8b41b487b5d958e46ea719c253f2bdc6b3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field_compare"));

        // line 16
        echo "    ";
        if (array_key_exists("value_compare", $context)) {
            // line 17
            echo "        <td>
            ";
            // line 18
            $context["value"] = (isset($context["value_compare"]) ? $context["value_compare"] : $this->getContext($context, "value_compare"));
            // line 19
            echo "            ";
            $this->displayBlock("field", $context, $blocks);
            echo "
        </td>
    ";
        }
        
        $__internal_541d8d02ec5f21b423546ef72bdba8b41b487b5d958e46ea719c253f2bdc6b3d->leave($__internal_541d8d02ec5f21b423546ef72bdba8b41b487b5d958e46ea719c253f2bdc6b3d_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_show_field.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 19,  88 => 18,  85 => 17,  82 => 16,  76 => 15,  60 => 13,  48 => 12,  41 => 15,  36 => 13,  28 => 12,  25 => 11,);
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
/* <th{% if(is_diff|default(false)) %} class="diff"{% endif %}>{% block name %}{{ admin.trans(field_description.label, {}, field_description.translationDomain) }}{% endblock %}</th>*/
/* <td>{% block field %}{% if field_description.options.safe %}{{ value|raw }}{% else %}{{ value|nl2br }}{% endif %}{% endblock %}</td>*/
/* */
/* {% block field_compare %}*/
/*     {% if(value_compare is defined) %}*/
/*         <td>*/
/*             {% set value = value_compare %}*/
/*             {{ block('field') }}*/
/*         </td>*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
