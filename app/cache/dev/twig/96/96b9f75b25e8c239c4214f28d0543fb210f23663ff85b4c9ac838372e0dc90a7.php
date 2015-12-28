<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_3ed3459cb63e27de3fd50483f7477d98b394274f63772098884f0d7bf36db678 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_53d9f32addd72e4169a3b5e19f04ab0bafd53393af67ba32f4cb8996e01f6bfc = $this->env->getExtension("native_profiler");
        $__internal_53d9f32addd72e4169a3b5e19f04ab0bafd53393af67ba32f4cb8996e01f6bfc->enter($__internal_53d9f32addd72e4169a3b5e19f04ab0bafd53393af67ba32f4cb8996e01f6bfc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_53d9f32addd72e4169a3b5e19f04ab0bafd53393af67ba32f4cb8996e01f6bfc->leave($__internal_53d9f32addd72e4169a3b5e19f04ab0bafd53393af67ba32f4cb8996e01f6bfc_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_ded2eb47b9b2327c9b35d20cb1f7651b336b97e1ad81651f9d57e6340e5a8d21 = $this->env->getExtension("native_profiler");
        $__internal_ded2eb47b9b2327c9b35d20cb1f7651b336b97e1ad81651f9d57e6340e5a8d21->enter($__internal_ded2eb47b9b2327c9b35d20cb1f7651b336b97e1ad81651f9d57e6340e5a8d21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_ded2eb47b9b2327c9b35d20cb1f7651b336b97e1ad81651f9d57e6340e5a8d21->leave($__internal_ded2eb47b9b2327c9b35d20cb1f7651b336b97e1ad81651f9d57e6340e5a8d21_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_0958b2236b76346746aa6055f48c852e4b60bb7ee4f342df6cd5c48d874597e4 = $this->env->getExtension("native_profiler");
        $__internal_0958b2236b76346746aa6055f48c852e4b60bb7ee4f342df6cd5c48d874597e4->enter($__internal_0958b2236b76346746aa6055f48c852e4b60bb7ee4f342df6cd5c48d874597e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_0958b2236b76346746aa6055f48c852e4b60bb7ee4f342df6cd5c48d874597e4->leave($__internal_0958b2236b76346746aa6055f48c852e4b60bb7ee4f342df6cd5c48d874597e4_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_09a9a3dab9463ed5f027479c886000f94fb5765f8b85f4c8de9e533f351c7017 = $this->env->getExtension("native_profiler");
        $__internal_09a9a3dab9463ed5f027479c886000f94fb5765f8b85f4c8de9e533f351c7017->enter($__internal_09a9a3dab9463ed5f027479c886000f94fb5765f8b85f4c8de9e533f351c7017_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_09a9a3dab9463ed5f027479c886000f94fb5765f8b85f4c8de9e533f351c7017->leave($__internal_09a9a3dab9463ed5f027479c886000f94fb5765f8b85f4c8de9e533f351c7017_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
