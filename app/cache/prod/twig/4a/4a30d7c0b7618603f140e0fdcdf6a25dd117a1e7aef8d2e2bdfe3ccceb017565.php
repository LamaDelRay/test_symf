<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_51c92503773ba35c4ae5d7271d60f924e06c6a895e7d549e36e4a2a83c9c210b extends Twig_Template
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
        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
