<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_eb9393e9fdafa08f852bb6580ab186c7cd35100c9980a46212ad5bb5a6f1b4bf extends Twig_Template
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
        $__internal_c02af9f0d626a7484df3c864a0d37f919a583f938e216a1cdec843aaa9f9ee08 = $this->env->getExtension("native_profiler");
        $__internal_c02af9f0d626a7484df3c864a0d37f919a583f938e216a1cdec843aaa9f9ee08->enter($__internal_c02af9f0d626a7484df3c864a0d37f919a583f938e216a1cdec843aaa9f9ee08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_c02af9f0d626a7484df3c864a0d37f919a583f938e216a1cdec843aaa9f9ee08->leave($__internal_c02af9f0d626a7484df3c864a0d37f919a583f938e216a1cdec843aaa9f9ee08_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
