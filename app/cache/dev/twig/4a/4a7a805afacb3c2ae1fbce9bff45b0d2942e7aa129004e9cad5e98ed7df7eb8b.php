<?php

/* SonataAdminBundle:Pager:results.html.twig */
class __TwigTemplate_8f70db405bd11e4021953d4ff10f45ba643154475a31b0638f7feba9b299ab49 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:Pager:base_results.html.twig", "SonataAdminBundle:Pager:results.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:Pager:base_results.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_21cdcf58745ac8da974a7df476f2d6fc1d302cb840023807714e701695cf9832 = $this->env->getExtension("native_profiler");
        $__internal_21cdcf58745ac8da974a7df476f2d6fc1d302cb840023807714e701695cf9832->enter($__internal_21cdcf58745ac8da974a7df476f2d6fc1d302cb840023807714e701695cf9832_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Pager:results.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_21cdcf58745ac8da974a7df476f2d6fc1d302cb840023807714e701695cf9832->leave($__internal_21cdcf58745ac8da974a7df476f2d6fc1d302cb840023807714e701695cf9832_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Pager:results.html.twig";
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
/* {% extends 'SonataAdminBundle:Pager:base_results.html.twig' %}*/
/* */
