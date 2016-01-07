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
        $__internal_2d4a798de3186d3350e19b363ba65900048b719527afc6363f086db0a3550811 = $this->env->getExtension("native_profiler");
        $__internal_2d4a798de3186d3350e19b363ba65900048b719527afc6363f086db0a3550811->enter($__internal_2d4a798de3186d3350e19b363ba65900048b719527afc6363f086db0a3550811_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_show_field.html.twig"));

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
        
        $__internal_2d4a798de3186d3350e19b363ba65900048b719527afc6363f086db0a3550811->leave($__internal_2d4a798de3186d3350e19b363ba65900048b719527afc6363f086db0a3550811_prof);

    }

    // line 12
    public function block_name($context, array $blocks = array())
    {
        $__internal_0673116c51d317c0934db474e0ef9fbbbe45dfb59d57c77b18ea45f1c5656247 = $this->env->getExtension("native_profiler");
        $__internal_0673116c51d317c0934db474e0ef9fbbbe45dfb59d57c77b18ea45f1c5656247->enter($__internal_0673116c51d317c0934db474e0ef9fbbbe45dfb59d57c77b18ea45f1c5656247_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "name"));

        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "trans", array(0 => $this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "label", array()), 1 => array(), 2 => $this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "translationDomain", array())), "method"), "html", null, true);
        
        $__internal_0673116c51d317c0934db474e0ef9fbbbe45dfb59d57c77b18ea45f1c5656247->leave($__internal_0673116c51d317c0934db474e0ef9fbbbe45dfb59d57c77b18ea45f1c5656247_prof);

    }

    // line 13
    public function block_field($context, array $blocks = array())
    {
        $__internal_93f7d590c2f1dbac1ce27ca14d1f460a3b6195637091c3068aa3149d630606d1 = $this->env->getExtension("native_profiler");
        $__internal_93f7d590c2f1dbac1ce27ca14d1f460a3b6195637091c3068aa3149d630606d1->enter($__internal_93f7d590c2f1dbac1ce27ca14d1f460a3b6195637091c3068aa3149d630606d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        if ($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options", array()), "safe", array())) {
            echo (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"));
        } else {
            echo nl2br(twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true));
        }
        
        $__internal_93f7d590c2f1dbac1ce27ca14d1f460a3b6195637091c3068aa3149d630606d1->leave($__internal_93f7d590c2f1dbac1ce27ca14d1f460a3b6195637091c3068aa3149d630606d1_prof);

    }

    // line 15
    public function block_field_compare($context, array $blocks = array())
    {
        $__internal_df15dd6465cd6ef4111c3f3e945a032074c8cb2d710d4c4a7c96ba1648fe5926 = $this->env->getExtension("native_profiler");
        $__internal_df15dd6465cd6ef4111c3f3e945a032074c8cb2d710d4c4a7c96ba1648fe5926->enter($__internal_df15dd6465cd6ef4111c3f3e945a032074c8cb2d710d4c4a7c96ba1648fe5926_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field_compare"));

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
        
        $__internal_df15dd6465cd6ef4111c3f3e945a032074c8cb2d710d4c4a7c96ba1648fe5926->leave($__internal_df15dd6465cd6ef4111c3f3e945a032074c8cb2d710d4c4a7c96ba1648fe5926_prof);

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
