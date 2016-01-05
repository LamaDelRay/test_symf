<?php

/* FOSUserBundle:Registration:confirmed.html.twig */
class __TwigTemplate_1b9e66b334ebe3a91c7a0e24e8e00b0fc8e60afae1a1398f9de2acc8ac1b7354 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:confirmed.html.twig", 1);
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
        $__internal_5de64c699aab517c34a6260133f780042a862e139f024a47ca1024ceb8e9eead = $this->env->getExtension("native_profiler");
        $__internal_5de64c699aab517c34a6260133f780042a862e139f024a47ca1024ceb8e9eead->enter($__internal_5de64c699aab517c34a6260133f780042a862e139f024a47ca1024ceb8e9eead_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5de64c699aab517c34a6260133f780042a862e139f024a47ca1024ceb8e9eead->leave($__internal_5de64c699aab517c34a6260133f780042a862e139f024a47ca1024ceb8e9eead_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b3f1b9a9d77390e4432eeab0f062a94b2d2d159e5ae1865b612a0d26263371d8 = $this->env->getExtension("native_profiler");
        $__internal_b3f1b9a9d77390e4432eeab0f062a94b2d2d159e5ae1865b612a0d26263371d8->enter($__internal_b3f1b9a9d77390e4432eeab0f062a94b2d2d159e5ae1865b612a0d26263371d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.confirmed", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
    ";
        // line 7
        if ((isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl"))) {
            // line 8
            echo "    <p><a href=\"";
            echo twig_escape_filter($this->env, (isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.back", array(), "FOSUserBundle"), "html", null, true);
            echo "</a></p>
    ";
        }
        
        $__internal_b3f1b9a9d77390e4432eeab0f062a94b2d2d159e5ae1865b612a0d26263371d8->leave($__internal_b3f1b9a9d77390e4432eeab0f062a94b2d2d159e5ae1865b612a0d26263371d8_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:confirmed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 8,  45 => 7,  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/*     <p>{{ 'registration.confirmed'|trans({'%username%': user.username}) }}</p>*/
/*     {% if targetUrl %}*/
/*     <p><a href="{{ targetUrl }}">{{ 'registration.back'|trans }}</a></p>*/
/*     {% endif %}*/
/* {% endblock fos_user_content %}*/
/* */
