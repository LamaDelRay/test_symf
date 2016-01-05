<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_1b067a252873b14a3e8ec8cf1ea0d0db8d0bec1daebd1805587d6811d75dd164 extends Twig_Template
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
        $__internal_6e9c4e214721431ee6124dbcea0829181e9252cb6f86b6dce007dbfdb87c31a4 = $this->env->getExtension("native_profiler");
        $__internal_6e9c4e214721431ee6124dbcea0829181e9252cb6f86b6dce007dbfdb87c31a4->enter($__internal_6e9c4e214721431ee6124dbcea0829181e9252cb6f86b6dce007dbfdb87c31a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6e9c4e214721431ee6124dbcea0829181e9252cb6f86b6dce007dbfdb87c31a4->leave($__internal_6e9c4e214721431ee6124dbcea0829181e9252cb6f86b6dce007dbfdb87c31a4_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_7915f23b85a8ab2f34964c5ca08042aab6da895a82f6a77e02e7ad3603536932 = $this->env->getExtension("native_profiler");
        $__internal_7915f23b85a8ab2f34964c5ca08042aab6da895a82f6a77e02e7ad3603536932->enter($__internal_7915f23b85a8ab2f34964c5ca08042aab6da895a82f6a77e02e7ad3603536932_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_7915f23b85a8ab2f34964c5ca08042aab6da895a82f6a77e02e7ad3603536932->leave($__internal_7915f23b85a8ab2f34964c5ca08042aab6da895a82f6a77e02e7ad3603536932_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_611bc60c0ef65d95e13bf020786c88770730b6f96dc9b78e1e38195376bccf8e = $this->env->getExtension("native_profiler");
        $__internal_611bc60c0ef65d95e13bf020786c88770730b6f96dc9b78e1e38195376bccf8e->enter($__internal_611bc60c0ef65d95e13bf020786c88770730b6f96dc9b78e1e38195376bccf8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_611bc60c0ef65d95e13bf020786c88770730b6f96dc9b78e1e38195376bccf8e->leave($__internal_611bc60c0ef65d95e13bf020786c88770730b6f96dc9b78e1e38195376bccf8e_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_f2c71f18e28748be637ce624e229b6319bd49d57c799b0a86214ecf33ce2334c = $this->env->getExtension("native_profiler");
        $__internal_f2c71f18e28748be637ce624e229b6319bd49d57c799b0a86214ecf33ce2334c->enter($__internal_f2c71f18e28748be637ce624e229b6319bd49d57c799b0a86214ecf33ce2334c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_f2c71f18e28748be637ce624e229b6319bd49d57c799b0a86214ecf33ce2334c->leave($__internal_f2c71f18e28748be637ce624e229b6319bd49d57c799b0a86214ecf33ce2334c_prof);

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
