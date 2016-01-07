<?php

/* SonataAdminBundle:CRUD:show_boolean.html.twig */
class __TwigTemplate_3f7a0fe16c64163e57a9d7bdfc709f0663b37238769e9ce7523b240373d09ecb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show_field.html.twig", "SonataAdminBundle:CRUD:show_boolean.html.twig", 12);
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
        $__internal_6cd040a557b11312c258e46c25fd05e38d4443fe97dd6e066eba072679933adc = $this->env->getExtension("native_profiler");
        $__internal_6cd040a557b11312c258e46c25fd05e38d4443fe97dd6e066eba072679933adc->enter($__internal_6cd040a557b11312c258e46c25fd05e38d4443fe97dd6e066eba072679933adc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_boolean.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6cd040a557b11312c258e46c25fd05e38d4443fe97dd6e066eba072679933adc->leave($__internal_6cd040a557b11312c258e46c25fd05e38d4443fe97dd6e066eba072679933adc_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_18ec10c71dfde2c1517fc565ace801b4a70ccf679fb7358b3f88c9d75179bbcf = $this->env->getExtension("native_profiler");
        $__internal_18ec10c71dfde2c1517fc565ace801b4a70ccf679fb7358b3f88c9d75179bbcf->enter($__internal_18ec10c71dfde2c1517fc565ace801b4a70ccf679fb7358b3f88c9d75179bbcf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        ob_start();
        // line 16
        echo "    ";
        if ((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))) {
            // line 17
            echo "        <i class=\"icon-ok-circle\"></i>";
            // line 18
            echo $this->env->getExtension('translator')->getTranslator()->trans("label_type_yes", array(), "SonataAdminBundle");
        } else {
            // line 20
            echo "        <i class=\"icon-ban-circle\"></i>";
            // line 21
            echo $this->env->getExtension('translator')->getTranslator()->trans("label_type_no", array(), "SonataAdminBundle");
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_18ec10c71dfde2c1517fc565ace801b4a70ccf679fb7358b3f88c9d75179bbcf->leave($__internal_18ec10c71dfde2c1517fc565ace801b4a70ccf679fb7358b3f88c9d75179bbcf_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:show_boolean.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 21,  50 => 20,  47 => 18,  45 => 17,  42 => 16,  40 => 15,  34 => 14,  11 => 12,);
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
/* {% block field %}*/
/* {% spaceless %}*/
/*     {% if value %}*/
/*         <i class="icon-ok-circle"></i>*/
/*         {%- trans from 'SonataAdminBundle' %}label_type_yes{% endtrans -%}*/
/*     {% else %}*/
/*         <i class="icon-ban-circle"></i>*/
/*         {%- trans from 'SonataAdminBundle' %}label_type_no{% endtrans -%}*/
/*     {% endif %}*/
/* {% endspaceless %}*/
/* {% endblock %}*/
/* */
