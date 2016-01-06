<?php

/* LamaDelRayPlatformBundle:Advert:email.txt.twig */
class __TwigTemplate_2200172705def1d22d17547bff5a38139c3163b914083c6f474354c3e9b3ce12 extends Twig_Template
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
        echo "Bonjour ";
        echo (isset($context["pseudo"]) ? $context["pseudo"] : null);
        echo ",

Toute l'équipe du site se joint à moi pour vous souhaiter
la bienvenue sur notre site !

Revenez nous voir souvent !";
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
        return array (  19 => 1,);
    }
}
/* Bonjour {{ pseudo }},*/
/* */
/* Toute l'équipe du site se joint à moi pour vous souhaiter*/
/* la bienvenue sur notre site !*/
/* */
/* Revenez nous voir souvent !*/
