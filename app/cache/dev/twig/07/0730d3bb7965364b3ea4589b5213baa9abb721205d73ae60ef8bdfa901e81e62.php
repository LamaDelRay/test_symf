<?php

/* LamaDelRayPlatformBundle::layout.html.twig */
class __TwigTemplate_44e17148b3c596f71fe5ab14aabbcb8a46bb5326b05c95886fc39247682d510a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "LamaDelRayPlatformBundle::layout.html.twig", 1);
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
        $__internal_d9bd299ab714ef29e4e73d5331ffd3fbc6a23284e5b3134ec554fb6e456d204b = $this->env->getExtension("native_profiler");
        $__internal_d9bd299ab714ef29e4e73d5331ffd3fbc6a23284e5b3134ec554fb6e456d204b->enter($__internal_d9bd299ab714ef29e4e73d5331ffd3fbc6a23284e5b3134ec554fb6e456d204b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LamaDelRayPlatformBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d9bd299ab714ef29e4e73d5331ffd3fbc6a23284e5b3134ec554fb6e456d204b->leave($__internal_d9bd299ab714ef29e4e73d5331ffd3fbc6a23284e5b3134ec554fb6e456d204b_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_f4460c295400f94e99eb729a4506c86da45b7bbd0dc7109bbd81afcfb59c2da6 = $this->env->getExtension("native_profiler");
        $__internal_f4460c295400f94e99eb729a4506c86da45b7bbd0dc7109bbd81afcfb59c2da6->enter($__internal_f4460c295400f94e99eb729a4506c86da45b7bbd0dc7109bbd81afcfb59c2da6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "\tAnnonces - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_f4460c295400f94e99eb729a4506c86da45b7bbd0dc7109bbd81afcfb59c2da6->leave($__internal_f4460c295400f94e99eb729a4506c86da45b7bbd0dc7109bbd81afcfb59c2da6_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_e97f1e4d56431dd3d8541bf82fa56241df6eb85c48f9e38e1adae4a54e422892 = $this->env->getExtension("native_profiler");
        $__internal_e97f1e4d56431dd3d8541bf82fa56241df6eb85c48f9e38e1adae4a54e422892->enter($__internal_e97f1e4d56431dd3d8541bf82fa56241df6eb85c48f9e38e1adae4a54e422892_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_e97f1e4d56431dd3d8541bf82fa56241df6eb85c48f9e38e1adae4a54e422892->leave($__internal_e97f1e4d56431dd3d8541bf82fa56241df6eb85c48f9e38e1adae4a54e422892_prof);

    }

    // line 13
    public function block_platform_body($context, array $blocks = array())
    {
        $__internal_254d0795cc81ac12a3ab38668e1ea748eb34a1b9208177d31be907a531e98a6f = $this->env->getExtension("native_profiler");
        $__internal_254d0795cc81ac12a3ab38668e1ea748eb34a1b9208177d31be907a531e98a6f->enter($__internal_254d0795cc81ac12a3ab38668e1ea748eb34a1b9208177d31be907a531e98a6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "platform_body"));

        // line 14
        echo "\t";
        
        $__internal_254d0795cc81ac12a3ab38668e1ea748eb34a1b9208177d31be907a531e98a6f->leave($__internal_254d0795cc81ac12a3ab38668e1ea748eb34a1b9208177d31be907a531e98a6f_prof);

    }

    public function getTemplateName()
    {
        return "LamaDelRayPlatformBundle::layout.html.twig";
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
