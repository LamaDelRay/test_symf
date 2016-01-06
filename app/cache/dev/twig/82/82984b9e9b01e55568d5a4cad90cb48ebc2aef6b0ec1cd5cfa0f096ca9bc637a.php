<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_99ef154903ad7dd7decfae3009bebb60e446fa9cfe4652d1c06c654d8d1f28d2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:show.html.twig", 1);
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
        $__internal_638f8ea6dda80c8f445a6617496819e67b9f523307f895342df801730de2bce3 = $this->env->getExtension("native_profiler");
        $__internal_638f8ea6dda80c8f445a6617496819e67b9f523307f895342df801730de2bce3->enter($__internal_638f8ea6dda80c8f445a6617496819e67b9f523307f895342df801730de2bce3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_638f8ea6dda80c8f445a6617496819e67b9f523307f895342df801730de2bce3->leave($__internal_638f8ea6dda80c8f445a6617496819e67b9f523307f895342df801730de2bce3_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_cb5d7d4f9a3ee44ff9dfbbaf53e78b8bb7dbc8d80d0b7a4775e739690a0418d1 = $this->env->getExtension("native_profiler");
        $__internal_cb5d7d4f9a3ee44ff9dfbbaf53e78b8bb7dbc8d80d0b7a4775e739690a0418d1->enter($__internal_cb5d7d4f9a3ee44ff9dfbbaf53e78b8bb7dbc8d80d0b7a4775e739690a0418d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_cb5d7d4f9a3ee44ff9dfbbaf53e78b8bb7dbc8d80d0b7a4775e739690a0418d1->leave($__internal_cb5d7d4f9a3ee44ff9dfbbaf53e78b8bb7dbc8d80d0b7a4775e739690a0418d1_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
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
/* {% include "FOSUserBundle:Profile:show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
