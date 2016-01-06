<?php

/* SonataAdminBundle:CRUD:list_string.html.twig */
class __TwigTemplate_d8e4b6bb897b77866999c72d99fa28acbbb1be65ae92bf4f7469e5b90d459674 extends Twig_Template
{
    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list_string.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3bd72844b0556d4084761935dfafd5a1910f9f6a41366bb7416e3feac6d6bdde = $this->env->getExtension("native_profiler");
        $__internal_3bd72844b0556d4084761935dfafd5a1910f9f6a41366bb7416e3feac6d6bdde->enter($__internal_3bd72844b0556d4084761935dfafd5a1910f9f6a41366bb7416e3feac6d6bdde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_string.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3bd72844b0556d4084761935dfafd5a1910f9f6a41366bb7416e3feac6d6bdde->leave($__internal_3bd72844b0556d4084761935dfafd5a1910f9f6a41366bb7416e3feac6d6bdde_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list_string.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  9 => 12,);
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
/* {% extends admin.getTemplate('base_list_field') %}*/
/* */
