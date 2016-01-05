<?php

/* FOSUserBundle:Group:edit.html.twig */
class __TwigTemplate_5a14779e998efffb945c112eb09fa9076ebbba196c2bbebd0a7f47d1c4ae2b33 extends Twig_Template
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
        $__internal_88169b839296422783c9bf22b1211d5f56c9dab44230c44aa2b19613a3b12f6d = $this->env->getExtension("native_profiler");
        $__internal_88169b839296422783c9bf22b1211d5f56c9dab44230c44aa2b19613a3b12f6d->enter($__internal_88169b839296422783c9bf22b1211d5f56c9dab44230c44aa2b19613a3b12f6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_88169b839296422783c9bf22b1211d5f56c9dab44230c44aa2b19613a3b12f6d->leave($__internal_88169b839296422783c9bf22b1211d5f56c9dab44230c44aa2b19613a3b12f6d_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_1912372cff9f788ab4904bb745e4885255b8dde817ed070d575f74bfe28d5c42 = $this->env->getExtension("native_profiler");
        $__internal_1912372cff9f788ab4904bb745e4885255b8dde817ed070d575f74bfe28d5c42->enter($__internal_1912372cff9f788ab4904bb745e4885255b8dde817ed070d575f74bfe28d5c42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_1912372cff9f788ab4904bb745e4885255b8dde817ed070d575f74bfe28d5c42->leave($__internal_1912372cff9f788ab4904bb745e4885255b8dde817ed070d575f74bfe28d5c42_prof);

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
