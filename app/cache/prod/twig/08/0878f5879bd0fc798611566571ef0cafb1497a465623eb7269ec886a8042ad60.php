<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_bf2baa48b5d35d78d39dc807fe96efc4d209087b0b99cd2984f3140d97d4bddf extends Twig_Template
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
        $__internal_47035d7a6bd64728469a46e08f88691375e47d0d6ab63293c32119201377078b = $this->env->getExtension("native_profiler");
        $__internal_47035d7a6bd64728469a46e08f88691375e47d0d6ab63293c32119201377078b->enter($__internal_47035d7a6bd64728469a46e08f88691375e47d0d6ab63293c32119201377078b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_47035d7a6bd64728469a46e08f88691375e47d0d6ab63293c32119201377078b->leave($__internal_47035d7a6bd64728469a46e08f88691375e47d0d6ab63293c32119201377078b_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e341f32931ee319ff4230293194b0af776a7ad34668367b3a5f7d5d61976ce6a = $this->env->getExtension("native_profiler");
        $__internal_e341f32931ee319ff4230293194b0af776a7ad34668367b3a5f7d5d61976ce6a->enter($__internal_e341f32931ee319ff4230293194b0af776a7ad34668367b3a5f7d5d61976ce6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_e341f32931ee319ff4230293194b0af776a7ad34668367b3a5f7d5d61976ce6a->leave($__internal_e341f32931ee319ff4230293194b0af776a7ad34668367b3a5f7d5d61976ce6a_prof);

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
