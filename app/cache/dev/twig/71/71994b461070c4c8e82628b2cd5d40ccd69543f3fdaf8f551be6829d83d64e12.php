<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_934a5054e057ae6bbda29e0672a531c77121e35813f3134b6a1afb2fb119366f extends Twig_Template
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
        $__internal_31cd66737b641ddf1e568e4c90b15e542102e7c536e83536ed137d1b53947fb5 = $this->env->getExtension("native_profiler");
        $__internal_31cd66737b641ddf1e568e4c90b15e542102e7c536e83536ed137d1b53947fb5->enter($__internal_31cd66737b641ddf1e568e4c90b15e542102e7c536e83536ed137d1b53947fb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_31cd66737b641ddf1e568e4c90b15e542102e7c536e83536ed137d1b53947fb5->leave($__internal_31cd66737b641ddf1e568e4c90b15e542102e7c536e83536ed137d1b53947fb5_prof);

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
