<?php

/* SonataAdminBundle:CRUD:list.html.twig */
class __TwigTemplate_e5883d2e909efc60c342b68231b4a0399a1043051d2b040b9ea18a3fabf5d8f2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_list.html.twig", "SonataAdminBundle:CRUD:list.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_list.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f26bdb086ee05415eb758fa3c8bb7a049fd33f20a485442b0ab52bbc222eb79f = $this->env->getExtension("native_profiler");
        $__internal_f26bdb086ee05415eb758fa3c8bb7a049fd33f20a485442b0ab52bbc222eb79f->enter($__internal_f26bdb086ee05415eb758fa3c8bb7a049fd33f20a485442b0ab52bbc222eb79f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f26bdb086ee05415eb758fa3c8bb7a049fd33f20a485442b0ab52bbc222eb79f->leave($__internal_f26bdb086ee05415eb758fa3c8bb7a049fd33f20a485442b0ab52bbc222eb79f_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list.html.twig";
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
/* {% extends 'SonataAdminBundle:CRUD:base_list.html.twig' %}*/
/* */
