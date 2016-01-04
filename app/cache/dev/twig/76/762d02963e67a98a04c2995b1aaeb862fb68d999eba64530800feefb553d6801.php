<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_d2c741fbced001b4d0d5fd26a398a5abdfb92cfb535579863e1d8b9fb8da0b40 extends Twig_Template
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
        $__internal_f7994ceeedad2c24ca34e22c58678b7348852e72242544260305d01afc32853b = $this->env->getExtension("native_profiler");
        $__internal_f7994ceeedad2c24ca34e22c58678b7348852e72242544260305d01afc32853b->enter($__internal_f7994ceeedad2c24ca34e22c58678b7348852e72242544260305d01afc32853b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_f7994ceeedad2c24ca34e22c58678b7348852e72242544260305d01afc32853b->leave($__internal_f7994ceeedad2c24ca34e22c58678b7348852e72242544260305d01afc32853b_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
