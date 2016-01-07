<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_27c37b5aa3fa37ac3c6a119c79f3fa241d159318a6920c4bd6991be43dcd0d3a extends Twig_Template
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
        $__internal_dfeb605bc6c49548465df0e6b01f2f657cd5f4d1978f8c807c4790dd80ce564e = $this->env->getExtension("native_profiler");
        $__internal_dfeb605bc6c49548465df0e6b01f2f657cd5f4d1978f8c807c4790dd80ce564e->enter($__internal_dfeb605bc6c49548465df0e6b01f2f657cd5f4d1978f8c807c4790dd80ce564e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_dfeb605bc6c49548465df0e6b01f2f657cd5f4d1978f8c807c4790dd80ce564e->leave($__internal_dfeb605bc6c49548465df0e6b01f2f657cd5f4d1978f8c807c4790dd80ce564e_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
