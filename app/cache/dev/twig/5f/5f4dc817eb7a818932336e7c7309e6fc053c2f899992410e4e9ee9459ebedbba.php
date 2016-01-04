<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_cb178f73ebe7f23c1fb0d494138263be09edaa4e39c34c13c8b6c392af7ecc59 extends Twig_Template
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
        $__internal_ec243048e9a06f896c713d10a617db40766489d47ebacd472445e510ed7f9e54 = $this->env->getExtension("native_profiler");
        $__internal_ec243048e9a06f896c713d10a617db40766489d47ebacd472445e510ed7f9e54->enter($__internal_ec243048e9a06f896c713d10a617db40766489d47ebacd472445e510ed7f9e54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_ec243048e9a06f896c713d10a617db40766489d47ebacd472445e510ed7f9e54->leave($__internal_ec243048e9a06f896c713d10a617db40766489d47ebacd472445e510ed7f9e54_prof);

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
