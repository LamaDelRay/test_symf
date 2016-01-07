<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_68c6ecb7a3329dc86930a3e8fdff38fe1cdce41e952149220cf26b5a66ded3e5 extends Twig_Template
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
        $__internal_9db6efbea7561616d0650cc185aaccee33694834bc6ffb67ac5b49134c820697 = $this->env->getExtension("native_profiler");
        $__internal_9db6efbea7561616d0650cc185aaccee33694834bc6ffb67ac5b49134c820697->enter($__internal_9db6efbea7561616d0650cc185aaccee33694834bc6ffb67ac5b49134c820697_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_9db6efbea7561616d0650cc185aaccee33694834bc6ffb67ac5b49134c820697->leave($__internal_9db6efbea7561616d0650cc185aaccee33694834bc6ffb67ac5b49134c820697_prof);

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
