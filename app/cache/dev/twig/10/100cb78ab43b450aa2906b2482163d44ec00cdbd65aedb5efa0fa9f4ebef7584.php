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
        $__internal_ba6886f450833fda80b27853f636ae78cd1ddc8457c85dfdd068182f3ede9dff = $this->env->getExtension("native_profiler");
        $__internal_ba6886f450833fda80b27853f636ae78cd1ddc8457c85dfdd068182f3ede9dff->enter($__internal_ba6886f450833fda80b27853f636ae78cd1ddc8457c85dfdd068182f3ede9dff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_array.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ba6886f450833fda80b27853f636ae78cd1ddc8457c85dfdd068182f3ede9dff->leave($__internal_ba6886f450833fda80b27853f636ae78cd1ddc8457c85dfdd068182f3ede9dff_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_2b31bc1a3538e621ad4f84e35eadc6346092205f9f54ceee6c0fbcd7ea4d4a53 = $this->env->getExtension("native_profiler");
        $__internal_2b31bc1a3538e621ad4f84e35eadc6346092205f9f54ceee6c0fbcd7ea4d4a53->enter($__internal_2b31bc1a3538e621ad4f84e35eadc6346092205f9f54ceee6c0fbcd7ea4d4a53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

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
        
        $__internal_2b31bc1a3538e621ad4f84e35eadc6346092205f9f54ceee6c0fbcd7ea4d4a53->leave($__internal_2b31bc1a3538e621ad4f84e35eadc6346092205f9f54ceee6c0fbcd7ea4d4a53_prof);

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
