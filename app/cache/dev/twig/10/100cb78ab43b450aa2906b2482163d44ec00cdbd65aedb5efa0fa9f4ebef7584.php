<?php

/* SonataAdminBundle:CRUD:show_array.html.twig */
class __TwigTemplate_02c0f2865a58a5e873b0e75d027fbbb8ca2407a9c90ab58200bfbb25576189ea extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show_field.html.twig", "SonataAdminBundle:CRUD:show_array.html.twig", 12);
        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_show_field.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8bb1f7454f38407d8afa2f16f585c2139aebca8756029a2e14704222e741f64c = $this->env->getExtension("native_profiler");
        $__internal_8bb1f7454f38407d8afa2f16f585c2139aebca8756029a2e14704222e741f64c->enter($__internal_8bb1f7454f38407d8afa2f16f585c2139aebca8756029a2e14704222e741f64c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_array.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8bb1f7454f38407d8afa2f16f585c2139aebca8756029a2e14704222e741f64c->leave($__internal_8bb1f7454f38407d8afa2f16f585c2139aebca8756029a2e14704222e741f64c_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_286860cd559b86038fe8e6dd9b184527a350bd164a6bf64e0c4525d30f364fd8 = $this->env->getExtension("native_profiler");
        $__internal_286860cd559b86038fe8e6dd9b184527a350bd164a6bf64e0c4525d30f364fd8->enter($__internal_286860cd559b86038fe8e6dd9b184527a350bd164a6bf64e0c4525d30f364fd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")));
        foreach ($context['_seq'] as $context["key"] => $context["val"]) {
            // line 16
            echo "        ";
            if ($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options", array()), "safe", array())) {
                // line 17
                echo "            [";
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo " => ";
                echo $context["val"];
                echo "]
        ";
            } else {
                // line 19
                echo "            [";
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo " => ";
                echo twig_escape_filter($this->env, $context["val"], "html", null, true);
                echo "]
        ";
            }
            // line 21
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['val'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_286860cd559b86038fe8e6dd9b184527a350bd164a6bf64e0c4525d30f364fd8->leave($__internal_286860cd559b86038fe8e6dd9b184527a350bd164a6bf64e0c4525d30f364fd8_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:show_array.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 21,  56 => 19,  48 => 17,  45 => 16,  40 => 15,  34 => 14,  11 => 12,);
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
/* {% extends 'SonataAdminBundle:CRUD:base_show_field.html.twig' %}*/
/* */
/* {% block field%}*/
/*     {% for key, val in value %}*/
/*         {% if field_description.options.safe %}*/
/*             [{{ key }} => {{ val|raw }}]*/
/*         {% else %}*/
/*             [{{ key }} => {{ val }}]*/
/*         {% endif %}*/
/*     {% endfor %}*/
/* {% endblock %}*/
/* */
