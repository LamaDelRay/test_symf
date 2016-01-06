<?php

/* LamaDelRayPlatformBundle:Advert:email.txt.twig */
class __TwigTemplate_bc7fcd74d4c01cc0b2e8c3fabea984059259b1ae40e0828941ae092f6b49b34b extends Twig_Template
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
        $__internal_b7c0767428d3b1762e47c508c6ece775b238e4cd1596fbfde1a8087bc68feb4e = $this->env->getExtension("native_profiler");
        $__internal_b7c0767428d3b1762e47c508c6ece775b238e4cd1596fbfde1a8087bc68feb4e->enter($__internal_b7c0767428d3b1762e47c508c6ece775b238e4cd1596fbfde1a8087bc68feb4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LamaDelRayPlatformBundle:Advert:email.txt.twig"));

        // line 1
        echo "Bonjour ";
        echo (isset($context["pseudo"]) ? $context["pseudo"] : $this->getContext($context, "pseudo"));
        echo ",

Toute l'équipe du site se joint à moi pour vous souhaiter
la bienvenue sur notre site !

Revenez nous voir souvent !";
        
        $__internal_b7c0767428d3b1762e47c508c6ece775b238e4cd1596fbfde1a8087bc68feb4e->leave($__internal_b7c0767428d3b1762e47c508c6ece775b238e4cd1596fbfde1a8087bc68feb4e_prof);

    }

    public function getTemplateName()
    {
        return "LamaDelRayPlatformBundle:Advert:email.txt.twig";
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
/* Bonjour {{ pseudo }},*/
/* */
/* Toute l'équipe du site se joint à moi pour vous souhaiter*/
/* la bienvenue sur notre site !*/
/* */
/* Revenez nous voir souvent !*/
