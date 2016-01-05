<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_22314db27930ae7fad0146d0e6fdf6786c8ba964d194f0ffcd389e3ad8f9ba91 extends Twig_Template
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
        $__internal_1fc78b3644efe45b8d1d8cc27711cc92e3015003e93218fc676d292762715901 = $this->env->getExtension("native_profiler");
        $__internal_1fc78b3644efe45b8d1d8cc27711cc92e3015003e93218fc676d292762715901->enter($__internal_1fc78b3644efe45b8d1d8cc27711cc92e3015003e93218fc676d292762715901_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_1fc78b3644efe45b8d1d8cc27711cc92e3015003e93218fc676d292762715901->leave($__internal_1fc78b3644efe45b8d1d8cc27711cc92e3015003e93218fc676d292762715901_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
/* {% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}*/
/* */
