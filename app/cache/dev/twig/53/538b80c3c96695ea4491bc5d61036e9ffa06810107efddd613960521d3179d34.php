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
        $__internal_a71b9273bb829fa7c9db27cf881615f6a6c8026603c17cb87dd9e659067f4848 = $this->env->getExtension("native_profiler");
        $__internal_a71b9273bb829fa7c9db27cf881615f6a6c8026603c17cb87dd9e659067f4848->enter($__internal_a71b9273bb829fa7c9db27cf881615f6a6c8026603c17cb87dd9e659067f4848_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a71b9273bb829fa7c9db27cf881615f6a6c8026603c17cb87dd9e659067f4848->leave($__internal_a71b9273bb829fa7c9db27cf881615f6a6c8026603c17cb87dd9e659067f4848_prof);

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
