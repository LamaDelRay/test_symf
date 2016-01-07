<?php

/* LamaDelRayPlatformBundle::layout2.html.twig */
class __TwigTemplate_6a032fecc1f5f9f741dfc4c37409aa16d3336fe0f8c677af65e22643c1ab0d5e extends Twig_Template
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
        $__internal_5f248c1f8e9da802430dfd8df8832778daa9240e489b4962190b30b0bcf8e611 = $this->env->getExtension("native_profiler");
        $__internal_5f248c1f8e9da802430dfd8df8832778daa9240e489b4962190b30b0bcf8e611->enter($__internal_5f248c1f8e9da802430dfd8df8832778daa9240e489b4962190b30b0bcf8e611_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LamaDelRayPlatformBundle::layout2.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5f248c1f8e9da802430dfd8df8832778daa9240e489b4962190b30b0bcf8e611->leave($__internal_5f248c1f8e9da802430dfd8df8832778daa9240e489b4962190b30b0bcf8e611_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_f7aa208e977bd4377d3b7fbbeb223cb78a8f4a5fe96ecb1e85ea60485bf4ebda = $this->env->getExtension("native_profiler");
        $__internal_f7aa208e977bd4377d3b7fbbeb223cb78a8f4a5fe96ecb1e85ea60485bf4ebda->enter($__internal_f7aa208e977bd4377d3b7fbbeb223cb78a8f4a5fe96ecb1e85ea60485bf4ebda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "\tAnnonces - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_f7aa208e977bd4377d3b7fbbeb223cb78a8f4a5fe96ecb1e85ea60485bf4ebda->leave($__internal_f7aa208e977bd4377d3b7fbbeb223cb78a8f4a5fe96ecb1e85ea60485bf4ebda_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_9e1236b684013c6ce1322c3a72de5cf8629f6e84d202ce2d9c0845e7765c07fb = $this->env->getExtension("native_profiler");
        $__internal_9e1236b684013c6ce1322c3a72de5cf8629f6e84d202ce2d9c0845e7765c07fb->enter($__internal_9e1236b684013c6ce1322c3a72de5cf8629f6e84d202ce2d9c0845e7765c07fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_9e1236b684013c6ce1322c3a72de5cf8629f6e84d202ce2d9c0845e7765c07fb->leave($__internal_9e1236b684013c6ce1322c3a72de5cf8629f6e84d202ce2d9c0845e7765c07fb_prof);

    }

    // line 13
    public function block_platform_body($context, array $blocks = array())
    {
        $__internal_ae182eb6d15b78753ea3d5248d82de75fa6afb2caabead763e5fa98e88f421bf = $this->env->getExtension("native_profiler");
        $__internal_ae182eb6d15b78753ea3d5248d82de75fa6afb2caabead763e5fa98e88f421bf->enter($__internal_ae182eb6d15b78753ea3d5248d82de75fa6afb2caabead763e5fa98e88f421bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "platform_body"));

        // line 14
        echo "\t";
        
        $__internal_ae182eb6d15b78753ea3d5248d82de75fa6afb2caabead763e5fa98e88f421bf->leave($__internal_ae182eb6d15b78753ea3d5248d82de75fa6afb2caabead763e5fa98e88f421bf_prof);

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
