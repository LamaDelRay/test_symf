<?php

/* SonataAdminBundle:Pager:links.html.twig */
class __TwigTemplate_ae961e930ea5c44bc1f93f839c2f6a93e7f7a55e7a49c087d5e7f0f46d35414c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:Pager:base_links.html.twig", "SonataAdminBundle:Pager:links.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:Pager:base_links.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_47340388895a3705834febd603620e1a818ad0bbb7ea56641ff0898ace34228a = $this->env->getExtension("native_profiler");
        $__internal_47340388895a3705834febd603620e1a818ad0bbb7ea56641ff0898ace34228a->enter($__internal_47340388895a3705834febd603620e1a818ad0bbb7ea56641ff0898ace34228a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Pager:links.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_47340388895a3705834febd603620e1a818ad0bbb7ea56641ff0898ace34228a->leave($__internal_47340388895a3705834febd603620e1a818ad0bbb7ea56641ff0898ace34228a_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Pager:links.html.twig";
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
/* {% extends 'SonataAdminBundle:Pager:base_links.html.twig' %}*/
/* */
