<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_8168d4a1dc19892e6cd4a518df8f567ccf83c9cb80bd5dfd5f3492bad2f41bea extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1b9f2ad1de17ab79e91240d616cf4bff2923636ad9801018d9971df3665a6e2a = $this->env->getExtension("native_profiler");
        $__internal_1b9f2ad1de17ab79e91240d616cf4bff2923636ad9801018d9971df3665a6e2a->enter($__internal_1b9f2ad1de17ab79e91240d616cf4bff2923636ad9801018d9971df3665a6e2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1b9f2ad1de17ab79e91240d616cf4bff2923636ad9801018d9971df3665a6e2a->leave($__internal_1b9f2ad1de17ab79e91240d616cf4bff2923636ad9801018d9971df3665a6e2a_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f17264f1dfcc4c55501c7d9eaeb6f86ae22f54f84e02ce37f7879fc6fb4f6d8d = $this->env->getExtension("native_profiler");
        $__internal_f17264f1dfcc4c55501c7d9eaeb6f86ae22f54f84e02ce37f7879fc6fb4f6d8d->enter($__internal_f17264f1dfcc4c55501c7d9eaeb6f86ae22f54f84e02ce37f7879fc6fb4f6d8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_f17264f1dfcc4c55501c7d9eaeb6f86ae22f54f84e02ce37f7879fc6fb4f6d8d->leave($__internal_f17264f1dfcc4c55501c7d9eaeb6f86ae22f54f84e02ce37f7879fc6fb4f6d8d_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/* {% include "FOSUserBundle:Registration:register_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
