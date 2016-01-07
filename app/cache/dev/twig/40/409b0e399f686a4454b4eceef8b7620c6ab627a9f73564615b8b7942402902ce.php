<?php

/* SonataAdminBundle:CRUD:edit.html.twig */
class __TwigTemplate_291f69ac9b792500db4b0eb9f84b1effb8d8838a4c8fa21afec6d48a47e88e9f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_edit.html.twig", "SonataAdminBundle:CRUD:edit.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_edit.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e6b93a755d97f05f228ff8ad769bfae568db0d71095e960dbe5a9bcd94383eda = $this->env->getExtension("native_profiler");
        $__internal_e6b93a755d97f05f228ff8ad769bfae568db0d71095e960dbe5a9bcd94383eda->enter($__internal_e6b93a755d97f05f228ff8ad769bfae568db0d71095e960dbe5a9bcd94383eda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e6b93a755d97f05f228ff8ad769bfae568db0d71095e960dbe5a9bcd94383eda->leave($__internal_e6b93a755d97f05f228ff8ad769bfae568db0d71095e960dbe5a9bcd94383eda_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:edit.html.twig";
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
/* {% extends 'SonataAdminBundle:CRUD:base_edit.html.twig' %}*/
/* */
