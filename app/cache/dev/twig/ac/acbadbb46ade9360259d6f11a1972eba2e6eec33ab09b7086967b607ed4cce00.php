<?php

/* SonataUserBundle:Security:login.html.twig */
class __TwigTemplate_9f626b340ad456dcb540a60fa6a9ab8c9eab1ad46a3e7c6b9a50ce0359c49df7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataUserBundle:Security:base_login.html.twig", "SonataUserBundle:Security:login.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataUserBundle:Security:base_login.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d5368c88cb59a62310c52465b6e916248123ea875bcf93563f4bb29d6492f7c9 = $this->env->getExtension("native_profiler");
        $__internal_d5368c88cb59a62310c52465b6e916248123ea875bcf93563f4bb29d6492f7c9->enter($__internal_d5368c88cb59a62310c52465b6e916248123ea875bcf93563f4bb29d6492f7c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d5368c88cb59a62310c52465b6e916248123ea875bcf93563f4bb29d6492f7c9->leave($__internal_d5368c88cb59a62310c52465b6e916248123ea875bcf93563f4bb29d6492f7c9_prof);

    }

    public function getTemplateName()
    {
        return "SonataUserBundle:Security:login.html.twig";
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
/* {% extends "SonataUserBundle:Security:base_login.html.twig" %}*/
