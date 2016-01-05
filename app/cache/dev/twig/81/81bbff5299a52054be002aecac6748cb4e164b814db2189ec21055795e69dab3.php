<?php

/* LamaDelRayPlatformBundle:Advert:email.txt.twig */
class __TwigTemplate_4c6937da4f08b96893b7345150698b2ee8c5363aad7f64d3bdc4f215f574f725 extends Twig_Template
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
        $__internal_f6cfe0b4bb165a24795992f5b054c54cf40c518b1b79c3f1e316296782ff2928 = $this->env->getExtension("native_profiler");
        $__internal_f6cfe0b4bb165a24795992f5b054c54cf40c518b1b79c3f1e316296782ff2928->enter($__internal_f6cfe0b4bb165a24795992f5b054c54cf40c518b1b79c3f1e316296782ff2928_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LamaDelRayPlatformBundle:Advert:email.txt.twig"));

        // line 1
        echo "Bonjour ";
        echo (isset($context["pseudo"]) ? $context["pseudo"] : $this->getContext($context, "pseudo"));
        echo ",

Toute l'équipe du site se joint à moi pour vous souhaiter
la bienvenue sur notre site !

Revenez nous voir souvent !";
        
        $__internal_f6cfe0b4bb165a24795992f5b054c54cf40c518b1b79c3f1e316296782ff2928->leave($__internal_f6cfe0b4bb165a24795992f5b054c54cf40c518b1b79c3f1e316296782ff2928_prof);

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
