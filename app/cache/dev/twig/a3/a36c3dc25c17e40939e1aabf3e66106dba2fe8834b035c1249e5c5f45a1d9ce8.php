<?php

/* SonataAdminBundle:CRUD:show.html.twig */
class __TwigTemplate_93226b88190865d762ff4e7b3741c9c213a1cdde8fe37d1d4fbe13483bc7c9a9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show.html.twig", "SonataAdminBundle:CRUD:show.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_show.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_27918c5734f91ddb63d624c005bc31cec7301b3993698ae3c2655095e3241626 = $this->env->getExtension("native_profiler");
        $__internal_27918c5734f91ddb63d624c005bc31cec7301b3993698ae3c2655095e3241626->enter($__internal_27918c5734f91ddb63d624c005bc31cec7301b3993698ae3c2655095e3241626_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_27918c5734f91ddb63d624c005bc31cec7301b3993698ae3c2655095e3241626->leave($__internal_27918c5734f91ddb63d624c005bc31cec7301b3993698ae3c2655095e3241626_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:show.html.twig";
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
/* {% extends 'SonataAdminBundle:CRUD:base_show.html.twig' %}*/
/* */
