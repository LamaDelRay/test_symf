<?php

/* FOSUserBundle:Group:show.html.twig */
class __TwigTemplate_f25af5ac9f2e08138f12522f3f95f2612d43326af1da63b598012d995a7ebe27 extends Twig_Template
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
        $__internal_b7b92a555d0a4f630daef687057a4aed2ec38f38aff18063ff861e8b1a079164 = $this->env->getExtension("native_profiler");
        $__internal_b7b92a555d0a4f630daef687057a4aed2ec38f38aff18063ff861e8b1a079164->enter($__internal_b7b92a555d0a4f630daef687057a4aed2ec38f38aff18063ff861e8b1a079164_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b7b92a555d0a4f630daef687057a4aed2ec38f38aff18063ff861e8b1a079164->leave($__internal_b7b92a555d0a4f630daef687057a4aed2ec38f38aff18063ff861e8b1a079164_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_4ada9b9f325c144deff18f5342d9d7c3da127c79938e84ee6dea88643a174afb = $this->env->getExtension("native_profiler");
        $__internal_4ada9b9f325c144deff18f5342d9d7c3da127c79938e84ee6dea88643a174afb->enter($__internal_4ada9b9f325c144deff18f5342d9d7c3da127c79938e84ee6dea88643a174afb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_4ada9b9f325c144deff18f5342d9d7c3da127c79938e84ee6dea88643a174afb->leave($__internal_4ada9b9f325c144deff18f5342d9d7c3da127c79938e84ee6dea88643a174afb_prof);

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
