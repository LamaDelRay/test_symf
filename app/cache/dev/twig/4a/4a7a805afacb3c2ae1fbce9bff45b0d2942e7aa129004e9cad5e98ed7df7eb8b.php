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
        $__internal_ecd70d42db00e335b8fa3616302a1828242717ff181fc57e0f0a6cde40d4982a = $this->env->getExtension("native_profiler");
        $__internal_ecd70d42db00e335b8fa3616302a1828242717ff181fc57e0f0a6cde40d4982a->enter($__internal_ecd70d42db00e335b8fa3616302a1828242717ff181fc57e0f0a6cde40d4982a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Pager:results.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ecd70d42db00e335b8fa3616302a1828242717ff181fc57e0f0a6cde40d4982a->leave($__internal_ecd70d42db00e335b8fa3616302a1828242717ff181fc57e0f0a6cde40d4982a_prof);

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
