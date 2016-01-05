<?php

/* LamaDelRayPlatformBundle:Advert:edit.html.twig */
class __TwigTemplate_6c3b39b55e50f20396be24b82f650eed738da6517cc64e78cdb03780c0c19c71 extends Twig_Template
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
        $__internal_e175f1a62316f4f26c42009a169c5686a235060ef5d88bcbf4a9c7c31af766e7 = $this->env->getExtension("native_profiler");
        $__internal_e175f1a62316f4f26c42009a169c5686a235060ef5d88bcbf4a9c7c31af766e7->enter($__internal_e175f1a62316f4f26c42009a169c5686a235060ef5d88bcbf4a9c7c31af766e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LamaDelRayPlatformBundle:Advert:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e175f1a62316f4f26c42009a169c5686a235060ef5d88bcbf4a9c7c31af766e7->leave($__internal_e175f1a62316f4f26c42009a169c5686a235060ef5d88bcbf4a9c7c31af766e7_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_3864a1f7eb135e15c26bec9ad3ea038f199b94d99320129340e9f85c2f957cd4 = $this->env->getExtension("native_profiler");
        $__internal_3864a1f7eb135e15c26bec9ad3ea038f199b94d99320129340e9f85c2f957cd4->enter($__internal_3864a1f7eb135e15c26bec9ad3ea038f199b94d99320129340e9f85c2f957cd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "\tModifier une annonce - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_3864a1f7eb135e15c26bec9ad3ea038f199b94d99320129340e9f85c2f957cd4->leave($__internal_3864a1f7eb135e15c26bec9ad3ea038f199b94d99320129340e9f85c2f957cd4_prof);

    }

    // line 7
    public function block_platform_body($context, array $blocks = array())
    {
        $__internal_82be01bb1c32c966faad7065086f818309aa4603bc259b07ae2a8999219841e9 = $this->env->getExtension("native_profiler");
        $__internal_82be01bb1c32c966faad7065086f818309aa4603bc259b07ae2a8999219841e9->enter($__internal_82be01bb1c32c966faad7065086f818309aa4603bc259b07ae2a8999219841e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "platform_body"));

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
        
        $__internal_82be01bb1c32c966faad7065086f818309aa4603bc259b07ae2a8999219841e9->leave($__internal_82be01bb1c32c966faad7065086f818309aa4603bc259b07ae2a8999219841e9_prof);

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
