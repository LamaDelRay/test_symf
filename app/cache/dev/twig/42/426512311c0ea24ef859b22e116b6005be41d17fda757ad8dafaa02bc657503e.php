<?php

/* LamaDelRayPlatformBundle:Advert:email.txt.twig */
class __TwigTemplate_134c906480953e559f5bc2400c67441486d7c74d5bf2ff3ba94a4584967c7ef4 extends Twig_Template
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
        $__internal_0683eb20026be7eab729acd3235c6ad78ab17a6a010a6d75e1b2cb76106bc4c4 = $this->env->getExtension("native_profiler");
        $__internal_0683eb20026be7eab729acd3235c6ad78ab17a6a010a6d75e1b2cb76106bc4c4->enter($__internal_0683eb20026be7eab729acd3235c6ad78ab17a6a010a6d75e1b2cb76106bc4c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LamaDelRayPlatformBundle:Advert:email.txt.twig"));

        // line 1
        echo "Bonjour ";
        echo (isset($context["pseudo"]) ? $context["pseudo"] : $this->getContext($context, "pseudo"));
        echo ",

Toute l'équipe du site se joint à moi pour vous souhaiter
la bienvenue sur notre site !

Revenez nous voir souvent !";
        
        $__internal_0683eb20026be7eab729acd3235c6ad78ab17a6a010a6d75e1b2cb76106bc4c4->leave($__internal_0683eb20026be7eab729acd3235c6ad78ab17a6a010a6d75e1b2cb76106bc4c4_prof);

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
