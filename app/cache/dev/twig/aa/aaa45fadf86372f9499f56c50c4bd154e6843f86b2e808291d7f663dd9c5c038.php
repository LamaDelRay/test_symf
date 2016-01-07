<?php

/* SonataAdminBundle:CRUD:acl.html.twig */
class __TwigTemplate_63ea4ec3b535992df91cb6d2cc40b0a6512baab6a73d195f18ee80b6bde0455b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_acl.html.twig", "SonataAdminBundle:CRUD:acl.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_acl.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2a9559047d68bed21f0e6cee4e765465fb49f9a6a1f4c0b20281e2ee8cccddd8 = $this->env->getExtension("native_profiler");
        $__internal_2a9559047d68bed21f0e6cee4e765465fb49f9a6a1f4c0b20281e2ee8cccddd8->enter($__internal_2a9559047d68bed21f0e6cee4e765465fb49f9a6a1f4c0b20281e2ee8cccddd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:acl.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2a9559047d68bed21f0e6cee4e765465fb49f9a6a1f4c0b20281e2ee8cccddd8->leave($__internal_2a9559047d68bed21f0e6cee4e765465fb49f9a6a1f4c0b20281e2ee8cccddd8_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:acl.html.twig";
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
/* {% extends 'SonataAdminBundle:CRUD:base_acl.html.twig' %}*/
/* */
