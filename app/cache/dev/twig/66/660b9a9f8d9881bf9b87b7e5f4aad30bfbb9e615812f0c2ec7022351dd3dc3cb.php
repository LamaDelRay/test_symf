<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_6462e719e61d8534ade9c3268a16e427aef4aac135169a4f8db2970a006473fc extends Twig_Template
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
        $__internal_f587fe2848945d3b03f8ee992fe7cb3ed8a26b286743b572d62363c3f32e455e = $this->env->getExtension("native_profiler");
        $__internal_f587fe2848945d3b03f8ee992fe7cb3ed8a26b286743b572d62363c3f32e455e->enter($__internal_f587fe2848945d3b03f8ee992fe7cb3ed8a26b286743b572d62363c3f32e455e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_f587fe2848945d3b03f8ee992fe7cb3ed8a26b286743b572d62363c3f32e455e->leave($__internal_f587fe2848945d3b03f8ee992fe7cb3ed8a26b286743b572d62363c3f32e455e_prof);

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
