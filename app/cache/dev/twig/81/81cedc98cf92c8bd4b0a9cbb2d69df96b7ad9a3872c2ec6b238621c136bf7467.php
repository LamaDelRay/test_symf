<?php

/* FOSUserBundle:Group:edit.html.twig */
class __TwigTemplate_8b51cc8855876c10c5f36acd3662b044d44e7d810fef6e6ac93d52503a7cb3b4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:edit.html.twig", 1);
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
        $__internal_cee38edf18f138b830a3ee7cd55824bf26ad23dc50974ec4c17ddb4d69ada65d = $this->env->getExtension("native_profiler");
        $__internal_cee38edf18f138b830a3ee7cd55824bf26ad23dc50974ec4c17ddb4d69ada65d->enter($__internal_cee38edf18f138b830a3ee7cd55824bf26ad23dc50974ec4c17ddb4d69ada65d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cee38edf18f138b830a3ee7cd55824bf26ad23dc50974ec4c17ddb4d69ada65d->leave($__internal_cee38edf18f138b830a3ee7cd55824bf26ad23dc50974ec4c17ddb4d69ada65d_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_71496770b7982a1bed152817ff43d56559bd11a0ea5747c56e77e7a6f46ad43f = $this->env->getExtension("native_profiler");
        $__internal_71496770b7982a1bed152817ff43d56559bd11a0ea5747c56e77e7a6f46ad43f->enter($__internal_71496770b7982a1bed152817ff43d56559bd11a0ea5747c56e77e7a6f46ad43f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_71496770b7982a1bed152817ff43d56559bd11a0ea5747c56e77e7a6f46ad43f->leave($__internal_71496770b7982a1bed152817ff43d56559bd11a0ea5747c56e77e7a6f46ad43f_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:edit.html.twig";
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
/* {% include "FOSUserBundle:Group:edit_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
