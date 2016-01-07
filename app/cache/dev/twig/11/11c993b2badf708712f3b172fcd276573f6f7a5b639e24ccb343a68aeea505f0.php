<?php

/* knp_menu_base.html.twig */
class __TwigTemplate_d9f28b42a074a7396718ad35da9a92fe3272eb856f23a81692c6cec3b55ee692 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c90d30c69fb6cf0d8670edc02a11234cb304e033066af3b7058fa6fc87b0675b = $this->env->getExtension("native_profiler");
        $__internal_c90d30c69fb6cf0d8670edc02a11234cb304e033066af3b7058fa6fc87b0675b->enter($__internal_c90d30c69fb6cf0d8670edc02a11234cb304e033066af3b7058fa6fc87b0675b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "knp_menu_base.html.twig"));

        // line 1
        if ($this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "compressed", array())) {
            $this->displayBlock("compressed_root", $context, $blocks);
        } else {
            $this->displayBlock("root", $context, $blocks);
        }
        
        $__internal_c90d30c69fb6cf0d8670edc02a11234cb304e033066af3b7058fa6fc87b0675b->leave($__internal_c90d30c69fb6cf0d8670edc02a11234cb304e033066af3b7058fa6fc87b0675b_prof);

    }

    public function getTemplateName()
    {
        return "knp_menu_base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% if options.compressed %}{{ block('compressed_root') }}{% else %}{{ block('root') }}{% endif %}*/
/* */
