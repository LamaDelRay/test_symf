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
        $__internal_c0e1dc9421f85dfcff0ef3a0a1eba50b7eee3a1038d43fb3d7a545feb9e2955f = $this->env->getExtension("native_profiler");
        $__internal_c0e1dc9421f85dfcff0ef3a0a1eba50b7eee3a1038d43fb3d7a545feb9e2955f->enter($__internal_c0e1dc9421f85dfcff0ef3a0a1eba50b7eee3a1038d43fb3d7a545feb9e2955f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c0e1dc9421f85dfcff0ef3a0a1eba50b7eee3a1038d43fb3d7a545feb9e2955f->leave($__internal_c0e1dc9421f85dfcff0ef3a0a1eba50b7eee3a1038d43fb3d7a545feb9e2955f_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_a568911a33a36c0df888acc87c145e1f50f419d89536a8d19c08903a62d64059 = $this->env->getExtension("native_profiler");
        $__internal_a568911a33a36c0df888acc87c145e1f50f419d89536a8d19c08903a62d64059->enter($__internal_a568911a33a36c0df888acc87c145e1f50f419d89536a8d19c08903a62d64059_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_a568911a33a36c0df888acc87c145e1f50f419d89536a8d19c08903a62d64059->leave($__internal_a568911a33a36c0df888acc87c145e1f50f419d89536a8d19c08903a62d64059_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_649b6f6797e61fc6788e3988240bb8fd695ee142f832997652f3206da7bfcad4 = $this->env->getExtension("native_profiler");
        $__internal_649b6f6797e61fc6788e3988240bb8fd695ee142f832997652f3206da7bfcad4->enter($__internal_649b6f6797e61fc6788e3988240bb8fd695ee142f832997652f3206da7bfcad4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_649b6f6797e61fc6788e3988240bb8fd695ee142f832997652f3206da7bfcad4->leave($__internal_649b6f6797e61fc6788e3988240bb8fd695ee142f832997652f3206da7bfcad4_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_0662d98b78ea85563a76756fb6fe3c629f4f6282fc65c7c5a5bfc8301c66fe23 = $this->env->getExtension("native_profiler");
        $__internal_0662d98b78ea85563a76756fb6fe3c629f4f6282fc65c7c5a5bfc8301c66fe23->enter($__internal_0662d98b78ea85563a76756fb6fe3c629f4f6282fc65c7c5a5bfc8301c66fe23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_0662d98b78ea85563a76756fb6fe3c629f4f6282fc65c7c5a5bfc8301c66fe23->leave($__internal_0662d98b78ea85563a76756fb6fe3c629f4f6282fc65c7c5a5bfc8301c66fe23_prof);

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
