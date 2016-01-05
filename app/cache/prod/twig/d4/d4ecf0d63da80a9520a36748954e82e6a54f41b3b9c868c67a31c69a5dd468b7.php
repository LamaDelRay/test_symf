<?php

/* LamaDelRayPlatformBundle::layout2.html.twig */
class __TwigTemplate_57bbfaa6f866b35e6c6c103a40256f78bb5f84c1c72a4a89935722cb336f4baf extends Twig_Template
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
        $__internal_da81f2c23962b772f85bebc459b83bbd095bd46391b31881fc514c031a9e4672 = $this->env->getExtension("native_profiler");
        $__internal_da81f2c23962b772f85bebc459b83bbd095bd46391b31881fc514c031a9e4672->enter($__internal_da81f2c23962b772f85bebc459b83bbd095bd46391b31881fc514c031a9e4672_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LamaDelRayPlatformBundle::layout2.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_da81f2c23962b772f85bebc459b83bbd095bd46391b31881fc514c031a9e4672->leave($__internal_da81f2c23962b772f85bebc459b83bbd095bd46391b31881fc514c031a9e4672_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_02f36cb55e683d2d8f910ccf69dcf686e0af971a1f3593837b43a3a100083294 = $this->env->getExtension("native_profiler");
        $__internal_02f36cb55e683d2d8f910ccf69dcf686e0af971a1f3593837b43a3a100083294->enter($__internal_02f36cb55e683d2d8f910ccf69dcf686e0af971a1f3593837b43a3a100083294_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "\tAnnonces - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_02f36cb55e683d2d8f910ccf69dcf686e0af971a1f3593837b43a3a100083294->leave($__internal_02f36cb55e683d2d8f910ccf69dcf686e0af971a1f3593837b43a3a100083294_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_e8395310f9f03ad7dc95498b86d49c6f16822a280a764687030ae44995645c5c = $this->env->getExtension("native_profiler");
        $__internal_e8395310f9f03ad7dc95498b86d49c6f16822a280a764687030ae44995645c5c->enter($__internal_e8395310f9f03ad7dc95498b86d49c6f16822a280a764687030ae44995645c5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_e8395310f9f03ad7dc95498b86d49c6f16822a280a764687030ae44995645c5c->leave($__internal_e8395310f9f03ad7dc95498b86d49c6f16822a280a764687030ae44995645c5c_prof);

    }

    // line 13
    public function block_platform_body($context, array $blocks = array())
    {
        $__internal_63e33efd9e7ca00b7c370b2ae43e957e351bc17f851dbc9e9cd3085a583c98e2 = $this->env->getExtension("native_profiler");
        $__internal_63e33efd9e7ca00b7c370b2ae43e957e351bc17f851dbc9e9cd3085a583c98e2->enter($__internal_63e33efd9e7ca00b7c370b2ae43e957e351bc17f851dbc9e9cd3085a583c98e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "platform_body"));

        // line 14
        echo "\t";
        
        $__internal_63e33efd9e7ca00b7c370b2ae43e957e351bc17f851dbc9e9cd3085a583c98e2->leave($__internal_63e33efd9e7ca00b7c370b2ae43e957e351bc17f851dbc9e9cd3085a583c98e2_prof);

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
