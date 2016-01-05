<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_67060557ac0d13cd781e8c25568669fa7a9548009dc4e19325fef7b858a37d38 extends Twig_Template
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
        $__internal_36c5c911850a178402cc63cfc29b275da4f42da7051f101a915a2dc8b22bcb8c = $this->env->getExtension("native_profiler");
        $__internal_36c5c911850a178402cc63cfc29b275da4f42da7051f101a915a2dc8b22bcb8c->enter($__internal_36c5c911850a178402cc63cfc29b275da4f42da7051f101a915a2dc8b22bcb8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_36c5c911850a178402cc63cfc29b275da4f42da7051f101a915a2dc8b22bcb8c->leave($__internal_36c5c911850a178402cc63cfc29b275da4f42da7051f101a915a2dc8b22bcb8c_prof);

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
