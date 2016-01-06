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
        $__internal_48b48d0d80d96a91e3f5ac340ec0053a6b04b6a08347c3807967751f515e8fa5 = $this->env->getExtension("native_profiler");
        $__internal_48b48d0d80d96a91e3f5ac340ec0053a6b04b6a08347c3807967751f515e8fa5->enter($__internal_48b48d0d80d96a91e3f5ac340ec0053a6b04b6a08347c3807967751f515e8fa5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_48b48d0d80d96a91e3f5ac340ec0053a6b04b6a08347c3807967751f515e8fa5->leave($__internal_48b48d0d80d96a91e3f5ac340ec0053a6b04b6a08347c3807967751f515e8fa5_prof);

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
