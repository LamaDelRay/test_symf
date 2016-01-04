<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_4c366f3ee1695c36c7df9f685bfaf15d526d6f3ea20da9a2405a68c0f0f2eb73 extends Twig_Template
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
        $__internal_09705dbec66640fd9244667b16dde7cbd2b15873fa4bc8c61bae94f5d3acabd3 = $this->env->getExtension("native_profiler");
        $__internal_09705dbec66640fd9244667b16dde7cbd2b15873fa4bc8c61bae94f5d3acabd3->enter($__internal_09705dbec66640fd9244667b16dde7cbd2b15873fa4bc8c61bae94f5d3acabd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_09705dbec66640fd9244667b16dde7cbd2b15873fa4bc8c61bae94f5d3acabd3->leave($__internal_09705dbec66640fd9244667b16dde7cbd2b15873fa4bc8c61bae94f5d3acabd3_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}*/
/* *//* */
/* */
