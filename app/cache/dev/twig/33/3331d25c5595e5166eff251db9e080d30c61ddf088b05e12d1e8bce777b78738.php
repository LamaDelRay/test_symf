<?php

/* SonataAdminBundle:CRUD:list__select.html.twig */
class __TwigTemplate_0bcb3f4300afad63ddd82c4e6dae47e72fa1a1ca81c0d3268deea2c8172682c2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list__select.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6a0c22d58b1167abe1b367c612ffc7416af191dd13e0e0cc07f6f2d8acdb38c3 = $this->env->getExtension("native_profiler");
        $__internal_6a0c22d58b1167abe1b367c612ffc7416af191dd13e0e0cc07f6f2d8acdb38c3->enter($__internal_6a0c22d58b1167abe1b367c612ffc7416af191dd13e0e0cc07f6f2d8acdb38c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list__select.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6a0c22d58b1167abe1b367c612ffc7416af191dd13e0e0cc07f6f2d8acdb38c3->leave($__internal_6a0c22d58b1167abe1b367c612ffc7416af191dd13e0e0cc07f6f2d8acdb38c3_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_508a40a8124ad0990579138734af696b1b50f22258f88351e7d4aefd7958515b = $this->env->getExtension("native_profiler");
        $__internal_508a40a8124ad0990579138734af696b1b50f22258f88351e7d4aefd7958515b->enter($__internal_508a40a8124ad0990579138734af696b1b50f22258f88351e7d4aefd7958515b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    <a class=\"btn btn-default\" href=\"#\">
        <i class=\"glyphicon glyphicon-arrow-right\"></i>
        ";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("list_select", array(), "SonataAdminBundle"), "html", null, true);
        echo "
    </a>
";
        
        $__internal_508a40a8124ad0990579138734af696b1b50f22258f88351e7d4aefd7958515b->leave($__internal_508a40a8124ad0990579138734af696b1b50f22258f88351e7d4aefd7958515b_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list__select.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 17,  39 => 15,  33 => 14,  18 => 12,);
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
/* {% block field %}*/
/*     <a class="btn btn-default" href="#">*/
/*         <i class="glyphicon glyphicon-arrow-right"></i>*/
/*         {{ 'list_select'|trans({}, 'SonataAdminBundle') }}*/
/*     </a>*/
/* {% endblock %}*/
/* */