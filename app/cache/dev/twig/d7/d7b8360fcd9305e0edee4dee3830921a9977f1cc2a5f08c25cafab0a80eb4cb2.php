<?php

/* SonataAdminBundle:CRUD:history.html.twig */
class __TwigTemplate_938d03a1a5154167d29e6720fd34628f54e5ee0b8a24d3c6896790140d8bae1d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_history.html.twig", "SonataAdminBundle:CRUD:history.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_history.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6a87da1565532da1c2309788a6431c9a8d33e5f838c80bba21f2ca09125ef1ed = $this->env->getExtension("native_profiler");
        $__internal_6a87da1565532da1c2309788a6431c9a8d33e5f838c80bba21f2ca09125ef1ed->enter($__internal_6a87da1565532da1c2309788a6431c9a8d33e5f838c80bba21f2ca09125ef1ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:history.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6a87da1565532da1c2309788a6431c9a8d33e5f838c80bba21f2ca09125ef1ed->leave($__internal_6a87da1565532da1c2309788a6431c9a8d33e5f838c80bba21f2ca09125ef1ed_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:history.html.twig";
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
/* {% extends 'SonataAdminBundle:CRUD:base_history.html.twig' %}*/
/* */
