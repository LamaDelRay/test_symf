<?php

/* SonataAdminBundle:CRUD:show_compare.html.twig */
class __TwigTemplate_0f76c2280c5daa3fb5d0cf62b31b21fb5712ac60e1b37bd95f22d91d3c8508fa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show_compare.html.twig", "SonataAdminBundle:CRUD:show_compare.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_show_compare.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8c06ec8bb1bfa6dfb3f8ffb6a126986c69745c32ecc58a9f6d554a94c9af3e6b = $this->env->getExtension("native_profiler");
        $__internal_8c06ec8bb1bfa6dfb3f8ffb6a126986c69745c32ecc58a9f6d554a94c9af3e6b->enter($__internal_8c06ec8bb1bfa6dfb3f8ffb6a126986c69745c32ecc58a9f6d554a94c9af3e6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_compare.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8c06ec8bb1bfa6dfb3f8ffb6a126986c69745c32ecc58a9f6d554a94c9af3e6b->leave($__internal_8c06ec8bb1bfa6dfb3f8ffb6a126986c69745c32ecc58a9f6d554a94c9af3e6b_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:show_compare.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  11 => 12,);
    }
}
/* {#*/
/* */
/* This file is part of the Sonata package.*/
/* */
/* (c) Thomas Rabaix <thomas.rabaix@sonata-project.org>*/
/* */
/* For the full copyright and license information, please view the LICENSE*/
/* file that was distributed with this source code.*/
/* */
/* #}*/
/* */
/* {% extends 'SonataAdminBundle:CRUD:base_show_compare.html.twig' %}*/
/* */
