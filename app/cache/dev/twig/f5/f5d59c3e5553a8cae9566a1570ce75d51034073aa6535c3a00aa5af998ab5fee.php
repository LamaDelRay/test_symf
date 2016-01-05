<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_a95433de23c96a2ea55ea0d2fdeb1c3fa1bf359fa67b85dc15e3d71c3525d474 extends Twig_Template
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
        $__internal_f1f25795147908a00341486aebbf8d1aff8320a062a0fbf96f2197cbc336f9d0 = $this->env->getExtension("native_profiler");
        $__internal_f1f25795147908a00341486aebbf8d1aff8320a062a0fbf96f2197cbc336f9d0->enter($__internal_f1f25795147908a00341486aebbf8d1aff8320a062a0fbf96f2197cbc336f9d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f1f25795147908a00341486aebbf8d1aff8320a062a0fbf96f2197cbc336f9d0->leave($__internal_f1f25795147908a00341486aebbf8d1aff8320a062a0fbf96f2197cbc336f9d0_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_43e35f0630ea5f68e40bd419d84c8ad898d7d72746608ed718528b72fc235950 = $this->env->getExtension("native_profiler");
        $__internal_43e35f0630ea5f68e40bd419d84c8ad898d7d72746608ed718528b72fc235950->enter($__internal_43e35f0630ea5f68e40bd419d84c8ad898d7d72746608ed718528b72fc235950_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_43e35f0630ea5f68e40bd419d84c8ad898d7d72746608ed718528b72fc235950->leave($__internal_43e35f0630ea5f68e40bd419d84c8ad898d7d72746608ed718528b72fc235950_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_02b9e805d9d05ae5332eb9d8ca6fb7dda65ee2768b451e5c71fdb012a4e1d6df = $this->env->getExtension("native_profiler");
        $__internal_02b9e805d9d05ae5332eb9d8ca6fb7dda65ee2768b451e5c71fdb012a4e1d6df->enter($__internal_02b9e805d9d05ae5332eb9d8ca6fb7dda65ee2768b451e5c71fdb012a4e1d6df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_02b9e805d9d05ae5332eb9d8ca6fb7dda65ee2768b451e5c71fdb012a4e1d6df->leave($__internal_02b9e805d9d05ae5332eb9d8ca6fb7dda65ee2768b451e5c71fdb012a4e1d6df_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_7272b65e1b981665d461b49f7697e2f8fa962306a5a48898017e6f38ed769cda = $this->env->getExtension("native_profiler");
        $__internal_7272b65e1b981665d461b49f7697e2f8fa962306a5a48898017e6f38ed769cda->enter($__internal_7272b65e1b981665d461b49f7697e2f8fa962306a5a48898017e6f38ed769cda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_7272b65e1b981665d461b49f7697e2f8fa962306a5a48898017e6f38ed769cda->leave($__internal_7272b65e1b981665d461b49f7697e2f8fa962306a5a48898017e6f38ed769cda_prof);

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
