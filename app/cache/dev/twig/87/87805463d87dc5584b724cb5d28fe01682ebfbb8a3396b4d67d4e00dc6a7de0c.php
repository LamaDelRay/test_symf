<?php

/* FOSUserBundle:Group:edit.html.twig */
class __TwigTemplate_dd3095b73001ebafda9c5b9c81b053fc45c8311faf06381969cd464974d99093 extends Twig_Template
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
        $__internal_0a10846266d47a9cde891a1006a8199800b984f7d08d6bfbd4bd91dcbe126096 = $this->env->getExtension("native_profiler");
        $__internal_0a10846266d47a9cde891a1006a8199800b984f7d08d6bfbd4bd91dcbe126096->enter($__internal_0a10846266d47a9cde891a1006a8199800b984f7d08d6bfbd4bd91dcbe126096_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0a10846266d47a9cde891a1006a8199800b984f7d08d6bfbd4bd91dcbe126096->leave($__internal_0a10846266d47a9cde891a1006a8199800b984f7d08d6bfbd4bd91dcbe126096_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_bf2ed03c3b20b4312d98184d83445ce11d5c8bc27973f31c31cb2c8b29c2e132 = $this->env->getExtension("native_profiler");
        $__internal_bf2ed03c3b20b4312d98184d83445ce11d5c8bc27973f31c31cb2c8b29c2e132->enter($__internal_bf2ed03c3b20b4312d98184d83445ce11d5c8bc27973f31c31cb2c8b29c2e132_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_bf2ed03c3b20b4312d98184d83445ce11d5c8bc27973f31c31cb2c8b29c2e132->leave($__internal_bf2ed03c3b20b4312d98184d83445ce11d5c8bc27973f31c31cb2c8b29c2e132_prof);

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
