<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_4c557b17b3b3ec98520325778749c090c75d80c6a1f53b9b97d0bfe67056f83c extends Twig_Template
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
        $__internal_0be713a1cf12447b857968ba7ccad5a833308922e24743cedecf16466b5d952f = $this->env->getExtension("native_profiler");
        $__internal_0be713a1cf12447b857968ba7ccad5a833308922e24743cedecf16466b5d952f->enter($__internal_0be713a1cf12447b857968ba7ccad5a833308922e24743cedecf16466b5d952f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0be713a1cf12447b857968ba7ccad5a833308922e24743cedecf16466b5d952f->leave($__internal_0be713a1cf12447b857968ba7ccad5a833308922e24743cedecf16466b5d952f_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_577284e5b0053a1890dd6bc8ef51a2a07c08b6342af0d1f0f6f2df452ef9491c = $this->env->getExtension("native_profiler");
        $__internal_577284e5b0053a1890dd6bc8ef51a2a07c08b6342af0d1f0f6f2df452ef9491c->enter($__internal_577284e5b0053a1890dd6bc8ef51a2a07c08b6342af0d1f0f6f2df452ef9491c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_577284e5b0053a1890dd6bc8ef51a2a07c08b6342af0d1f0f6f2df452ef9491c->leave($__internal_577284e5b0053a1890dd6bc8ef51a2a07c08b6342af0d1f0f6f2df452ef9491c_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_0a50ed1bc093050a9ce0090eb4d4ad2eaf0cb2c115607c1460fc2da715751e64 = $this->env->getExtension("native_profiler");
        $__internal_0a50ed1bc093050a9ce0090eb4d4ad2eaf0cb2c115607c1460fc2da715751e64->enter($__internal_0a50ed1bc093050a9ce0090eb4d4ad2eaf0cb2c115607c1460fc2da715751e64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_0a50ed1bc093050a9ce0090eb4d4ad2eaf0cb2c115607c1460fc2da715751e64->leave($__internal_0a50ed1bc093050a9ce0090eb4d4ad2eaf0cb2c115607c1460fc2da715751e64_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_adec89b02074b67560e1e753272c25dd46de30909f7870954350407ff716a17f = $this->env->getExtension("native_profiler");
        $__internal_adec89b02074b67560e1e753272c25dd46de30909f7870954350407ff716a17f->enter($__internal_adec89b02074b67560e1e753272c25dd46de30909f7870954350407ff716a17f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_adec89b02074b67560e1e753272c25dd46de30909f7870954350407ff716a17f->leave($__internal_adec89b02074b67560e1e753272c25dd46de30909f7870954350407ff716a17f_prof);

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
