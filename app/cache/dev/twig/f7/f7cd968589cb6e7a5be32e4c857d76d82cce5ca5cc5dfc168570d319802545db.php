<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_44a8a5bbecc9fa96436fbd315ac422d30d4991b49fefd78b818bbf8b21d25928 extends Twig_Template
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
        $__internal_99b4086d44726bd1f715e049cecdaabcaa660c9ef34dae4d69e16a3012965c51 = $this->env->getExtension("native_profiler");
        $__internal_99b4086d44726bd1f715e049cecdaabcaa660c9ef34dae4d69e16a3012965c51->enter($__internal_99b4086d44726bd1f715e049cecdaabcaa660c9ef34dae4d69e16a3012965c51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_99b4086d44726bd1f715e049cecdaabcaa660c9ef34dae4d69e16a3012965c51->leave($__internal_99b4086d44726bd1f715e049cecdaabcaa660c9ef34dae4d69e16a3012965c51_prof);

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
