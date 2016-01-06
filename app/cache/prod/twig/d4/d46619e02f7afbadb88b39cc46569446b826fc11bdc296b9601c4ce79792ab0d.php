<?php

/* LamaDelRayPlatformBundle::layout2.html.twig */
class __TwigTemplate_de59de28213db43217928d98151027727bca2efa470bd1c61f00bb44b388df36 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "LamaDelRayPlatformBundle::layout2.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'platform_body' => array($this, 'block_platform_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_06e785b5717ccd80042cd77edec49b7b16c3928b70f00794bec0b95909e260de = $this->env->getExtension("native_profiler");
        $__internal_06e785b5717ccd80042cd77edec49b7b16c3928b70f00794bec0b95909e260de->enter($__internal_06e785b5717ccd80042cd77edec49b7b16c3928b70f00794bec0b95909e260de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LamaDelRayPlatformBundle::layout2.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_06e785b5717ccd80042cd77edec49b7b16c3928b70f00794bec0b95909e260de->leave($__internal_06e785b5717ccd80042cd77edec49b7b16c3928b70f00794bec0b95909e260de_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_f1ee46fa34918d46676c6981ef6cc44347bcf136a7a1b359575e5d82489c4f84 = $this->env->getExtension("native_profiler");
        $__internal_f1ee46fa34918d46676c6981ef6cc44347bcf136a7a1b359575e5d82489c4f84->enter($__internal_f1ee46fa34918d46676c6981ef6cc44347bcf136a7a1b359575e5d82489c4f84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "\tAnnonces - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_f1ee46fa34918d46676c6981ef6cc44347bcf136a7a1b359575e5d82489c4f84->leave($__internal_f1ee46fa34918d46676c6981ef6cc44347bcf136a7a1b359575e5d82489c4f84_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_d76d016864cff0981c34020089d3e74ce2c10dbab8de2291a38fc84796e439c3 = $this->env->getExtension("native_profiler");
        $__internal_d76d016864cff0981c34020089d3e74ce2c10dbab8de2291a38fc84796e439c3->enter($__internal_d76d016864cff0981c34020089d3e74ce2c10dbab8de2291a38fc84796e439c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "
\t<h1>Annonces</h1>

\t<hr>

\t";
        // line 13
        $this->displayBlock('platform_body', $context, $blocks);
        // line 15
        echo "\t
";
        
        $__internal_d76d016864cff0981c34020089d3e74ce2c10dbab8de2291a38fc84796e439c3->leave($__internal_d76d016864cff0981c34020089d3e74ce2c10dbab8de2291a38fc84796e439c3_prof);

    }

    // line 13
    public function block_platform_body($context, array $blocks = array())
    {
        $__internal_b6ebc2d189900d307f6d96367b1703600693dc19648d58222e54927ac401ad89 = $this->env->getExtension("native_profiler");
        $__internal_b6ebc2d189900d307f6d96367b1703600693dc19648d58222e54927ac401ad89->enter($__internal_b6ebc2d189900d307f6d96367b1703600693dc19648d58222e54927ac401ad89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "platform_body"));

        // line 14
        echo "\t";
        
        $__internal_b6ebc2d189900d307f6d96367b1703600693dc19648d58222e54927ac401ad89->leave($__internal_b6ebc2d189900d307f6d96367b1703600693dc19648d58222e54927ac401ad89_prof);

    }

    public function getTemplateName()
    {
        return "LamaDelRayPlatformBundle::layout2.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 14,  75 => 13,  67 => 15,  65 => 13,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends "::layout.html.twig" %}*/
/* */
/* {% block title %}*/
/* 	Annonces - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/* */
/* 	<h1>Annonces</h1>*/
/* */
/* 	<hr>*/
/* */
/* 	{% block platform_body %}*/
/* 	{% endblock %}*/
/* 	*/
/* {% endblock %}*/
