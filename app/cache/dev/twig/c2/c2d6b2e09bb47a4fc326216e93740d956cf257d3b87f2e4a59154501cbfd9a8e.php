<?php

/* FOSUserBundle:Group:list.html.twig */
class __TwigTemplate_ac082ba303062061260b99122128b3278d867d73db532cd101a0bf27d76897f8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:list.html.twig", 1);
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
        $__internal_3fb0000814d564cec650f1cf9d8bf163f69010602f6a6431b70f9d316a2874bd = $this->env->getExtension("native_profiler");
        $__internal_3fb0000814d564cec650f1cf9d8bf163f69010602f6a6431b70f9d316a2874bd->enter($__internal_3fb0000814d564cec650f1cf9d8bf163f69010602f6a6431b70f9d316a2874bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3fb0000814d564cec650f1cf9d8bf163f69010602f6a6431b70f9d316a2874bd->leave($__internal_3fb0000814d564cec650f1cf9d8bf163f69010602f6a6431b70f9d316a2874bd_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_5fe941e8d72218d8d7bb110c46461bed429d31a2b96dd008bb1d2d273b3f5120 = $this->env->getExtension("native_profiler");
        $__internal_5fe941e8d72218d8d7bb110c46461bed429d31a2b96dd008bb1d2d273b3f5120->enter($__internal_5fe941e8d72218d8d7bb110c46461bed429d31a2b96dd008bb1d2d273b3f5120_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_5fe941e8d72218d8d7bb110c46461bed429d31a2b96dd008bb1d2d273b3f5120->leave($__internal_5fe941e8d72218d8d7bb110c46461bed429d31a2b96dd008bb1d2d273b3f5120_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list.html.twig";
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
/* {% include "FOSUserBundle:Group:list_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
