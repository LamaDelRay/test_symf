<?php

/* LamaDelRayPlatformBundle:Advert:edit.html.twig */
class __TwigTemplate_44ca1552dcb88a9e24f19966a7b08d74e5dcd17ce19946f34b55914ef7e79ad0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LamaDelRayPlatformBundle::layout2.html.twig", "LamaDelRayPlatformBundle:Advert:edit.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'platform_body' => array($this, 'block_platform_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "LamaDelRayPlatformBundle::layout2.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ac15ecff394222df124f003ac844be34e75f50f9fe056fd55fad56fa4b42219a = $this->env->getExtension("native_profiler");
        $__internal_ac15ecff394222df124f003ac844be34e75f50f9fe056fd55fad56fa4b42219a->enter($__internal_ac15ecff394222df124f003ac844be34e75f50f9fe056fd55fad56fa4b42219a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LamaDelRayPlatformBundle:Advert:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ac15ecff394222df124f003ac844be34e75f50f9fe056fd55fad56fa4b42219a->leave($__internal_ac15ecff394222df124f003ac844be34e75f50f9fe056fd55fad56fa4b42219a_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_6d9201a7b02938b789a93f39884e9a202b4dcc169a08ec496b930870d1d6d7fc = $this->env->getExtension("native_profiler");
        $__internal_6d9201a7b02938b789a93f39884e9a202b4dcc169a08ec496b930870d1d6d7fc->enter($__internal_6d9201a7b02938b789a93f39884e9a202b4dcc169a08ec496b930870d1d6d7fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "\tModifier une annonce - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_6d9201a7b02938b789a93f39884e9a202b4dcc169a08ec496b930870d1d6d7fc->leave($__internal_6d9201a7b02938b789a93f39884e9a202b4dcc169a08ec496b930870d1d6d7fc_prof);

    }

    // line 7
    public function block_platform_body($context, array $blocks = array())
    {
        $__internal_7f2cd478778561f32a3599c26e341c6f5251ea0677c4f8e98ade4ab7ea82bafd = $this->env->getExtension("native_profiler");
        $__internal_7f2cd478778561f32a3599c26e341c6f5251ea0677c4f8e98ade4ab7ea82bafd->enter($__internal_7f2cd478778561f32a3599c26e341c6f5251ea0677c4f8e98ade4ab7ea82bafd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "platform_body"));

        // line 8
        echo "
\t<h2> Modifier une annonce </h2>

\t";
        // line 11
        echo twig_include($this->env, $context, "LamaDelRayPlatformBundle:Advert:form.html.twig");
        echo "

\t<p>
\t\tVous éditez une annonce déjà existante, merci de ne pas changer
\t\tl'esprit générale de l'annonce déjà publiée.
\t</p>

\t<p>
\t\tVous éditez une annonce déjà existante, merci de ne pas changer
\t\tl'esprit générale de l'annonce déjà publiée
\t</p>

\t<p>
\t\t<a href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("platform_view", array("id" => $this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-default\">
\t\t\t<i class=\"glyphicon glyphicon-chevron-left\"></i>
\t\t\tRetour à l'annonce
\t\t</a>
\t</p>

";
        
        $__internal_7f2cd478778561f32a3599c26e341c6f5251ea0677c4f8e98ade4ab7ea82bafd->leave($__internal_7f2cd478778561f32a3599c26e341c6f5251ea0677c4f8e98ade4ab7ea82bafd_prof);

    }

    public function getTemplateName()
    {
        return "LamaDelRayPlatformBundle:Advert:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 24,  62 => 11,  57 => 8,  51 => 7,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends "LamaDelRayPlatformBundle::layout2.html.twig" %}*/
/* */
/* {% block title %}*/
/* 	Modifier une annonce - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block platform_body %}*/
/* */
/* 	<h2> Modifier une annonce </h2>*/
/* */
/* 	{{ include("LamaDelRayPlatformBundle:Advert:form.html.twig") }}*/
/* */
/* 	<p>*/
/* 		Vous éditez une annonce déjà existante, merci de ne pas changer*/
/* 		l'esprit générale de l'annonce déjà publiée.*/
/* 	</p>*/
/* */
/* 	<p>*/
/* 		Vous éditez une annonce déjà existante, merci de ne pas changer*/
/* 		l'esprit générale de l'annonce déjà publiée*/
/* 	</p>*/
/* */
/* 	<p>*/
/* 		<a href="{{ path('platform_view', {'id': advert.id}) }}" class="btn btn-default">*/
/* 			<i class="glyphicon glyphicon-chevron-left"></i>*/
/* 			Retour à l'annonce*/
/* 		</a>*/
/* 	</p>*/
/* */
/* {% endblock %}*/
