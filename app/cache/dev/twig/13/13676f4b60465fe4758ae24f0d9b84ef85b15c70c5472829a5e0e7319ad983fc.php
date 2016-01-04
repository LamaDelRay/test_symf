<?php

/* FOSUserBundle:Group:show.html.twig */
class __TwigTemplate_4fe492c458117dc7a755460a62024838183cfb548979907b891558870a88d325 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:show.html.twig", 1);
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
        $__internal_9a8185aca672e24bd5ee22cf0734316081a65ded31814c7905730add2d45934d = $this->env->getExtension("native_profiler");
        $__internal_9a8185aca672e24bd5ee22cf0734316081a65ded31814c7905730add2d45934d->enter($__internal_9a8185aca672e24bd5ee22cf0734316081a65ded31814c7905730add2d45934d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9a8185aca672e24bd5ee22cf0734316081a65ded31814c7905730add2d45934d->leave($__internal_9a8185aca672e24bd5ee22cf0734316081a65ded31814c7905730add2d45934d_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_37a8ad413759250d9b51988fcefc2893b6f60c9fb6e57da8a140da2254a57253 = $this->env->getExtension("native_profiler");
        $__internal_37a8ad413759250d9b51988fcefc2893b6f60c9fb6e57da8a140da2254a57253->enter($__internal_37a8ad413759250d9b51988fcefc2893b6f60c9fb6e57da8a140da2254a57253_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_37a8ad413759250d9b51988fcefc2893b6f60c9fb6e57da8a140da2254a57253->leave($__internal_37a8ad413759250d9b51988fcefc2893b6f60c9fb6e57da8a140da2254a57253_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show.html.twig";
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
/* {% include "FOSUserBundle:Group:show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
