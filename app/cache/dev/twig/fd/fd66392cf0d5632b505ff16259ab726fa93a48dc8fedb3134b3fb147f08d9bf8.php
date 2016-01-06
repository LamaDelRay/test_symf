<?php

/* FOSUserBundle:Group:list.html.twig */
class __TwigTemplate_218f231b7f5b8f2f2564307479bc70b6486ec2a3e26330eed1b822fa27fe0be5 extends Twig_Template
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
        $__internal_7d32e005bc559971735cb626576cf55d2847e59557c5030edc1d42ba27c06b2e = $this->env->getExtension("native_profiler");
        $__internal_7d32e005bc559971735cb626576cf55d2847e59557c5030edc1d42ba27c06b2e->enter($__internal_7d32e005bc559971735cb626576cf55d2847e59557c5030edc1d42ba27c06b2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7d32e005bc559971735cb626576cf55d2847e59557c5030edc1d42ba27c06b2e->leave($__internal_7d32e005bc559971735cb626576cf55d2847e59557c5030edc1d42ba27c06b2e_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f07b348701e124150780fda88ae9237ec0322682bad1d6937aec3092a6c514fd = $this->env->getExtension("native_profiler");
        $__internal_f07b348701e124150780fda88ae9237ec0322682bad1d6937aec3092a6c514fd->enter($__internal_f07b348701e124150780fda88ae9237ec0322682bad1d6937aec3092a6c514fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_f07b348701e124150780fda88ae9237ec0322682bad1d6937aec3092a6c514fd->leave($__internal_f07b348701e124150780fda88ae9237ec0322682bad1d6937aec3092a6c514fd_prof);

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
