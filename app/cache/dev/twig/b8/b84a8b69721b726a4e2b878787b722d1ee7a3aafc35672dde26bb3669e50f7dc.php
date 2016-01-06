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
        $__internal_1ea6c60f9a75da8b84d792d99619416a3ff445209ca3d5170b7c80905b226bc4 = $this->env->getExtension("native_profiler");
        $__internal_1ea6c60f9a75da8b84d792d99619416a3ff445209ca3d5170b7c80905b226bc4->enter($__internal_1ea6c60f9a75da8b84d792d99619416a3ff445209ca3d5170b7c80905b226bc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_boolean.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1ea6c60f9a75da8b84d792d99619416a3ff445209ca3d5170b7c80905b226bc4->leave($__internal_1ea6c60f9a75da8b84d792d99619416a3ff445209ca3d5170b7c80905b226bc4_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_9ecbc85b906cdf01cd07a6725b6d84c81752b0d64230cedc87b03fe347bb28e1 = $this->env->getExtension("native_profiler");
        $__internal_9ecbc85b906cdf01cd07a6725b6d84c81752b0d64230cedc87b03fe347bb28e1->enter($__internal_9ecbc85b906cdf01cd07a6725b6d84c81752b0d64230cedc87b03fe347bb28e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

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
        
        $__internal_9ecbc85b906cdf01cd07a6725b6d84c81752b0d64230cedc87b03fe347bb28e1->leave($__internal_9ecbc85b906cdf01cd07a6725b6d84c81752b0d64230cedc87b03fe347bb28e1_prof);

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
