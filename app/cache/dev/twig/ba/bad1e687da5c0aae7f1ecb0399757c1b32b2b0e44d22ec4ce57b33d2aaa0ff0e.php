<?php

/* LamaDelRayPlatformBundle:Advert:edit.html.twig */
class __TwigTemplate_eace634f0fc4a19903115793a1b5914f7475530de084bd9ed3fac6a435f5ea99 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LamaDelRayPlatformBundle::layout.html.twig", "LamaDelRayPlatformBundle:Advert:edit.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'platform_body' => array($this, 'block_platform_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "LamaDelRayPlatformBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1edaf20bb98a23700e4a215ba7ffe6c7175202b44e0580057a252f1a737f7ff4 = $this->env->getExtension("native_profiler");
        $__internal_1edaf20bb98a23700e4a215ba7ffe6c7175202b44e0580057a252f1a737f7ff4->enter($__internal_1edaf20bb98a23700e4a215ba7ffe6c7175202b44e0580057a252f1a737f7ff4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LamaDelRayPlatformBundle:Advert:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1edaf20bb98a23700e4a215ba7ffe6c7175202b44e0580057a252f1a737f7ff4->leave($__internal_1edaf20bb98a23700e4a215ba7ffe6c7175202b44e0580057a252f1a737f7ff4_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_869de798bdd54703fd88e9fef354180a3e5b3dd2268270ec4e52f9ef0e6e94c0 = $this->env->getExtension("native_profiler");
        $__internal_869de798bdd54703fd88e9fef354180a3e5b3dd2268270ec4e52f9ef0e6e94c0->enter($__internal_869de798bdd54703fd88e9fef354180a3e5b3dd2268270ec4e52f9ef0e6e94c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "\tModifier une annonce - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_869de798bdd54703fd88e9fef354180a3e5b3dd2268270ec4e52f9ef0e6e94c0->leave($__internal_869de798bdd54703fd88e9fef354180a3e5b3dd2268270ec4e52f9ef0e6e94c0_prof);

    }

    // line 7
    public function block_platform_body($context, array $blocks = array())
    {
        $__internal_47ef75c94f1e556f5b9e9a43ff2bf27752e9316fc22709ac29e2e519f67166d7 = $this->env->getExtension("native_profiler");
        $__internal_47ef75c94f1e556f5b9e9a43ff2bf27752e9316fc22709ac29e2e519f67166d7->enter($__internal_47ef75c94f1e556f5b9e9a43ff2bf27752e9316fc22709ac29e2e519f67166d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "platform_body"));

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
        
        $__internal_47ef75c94f1e556f5b9e9a43ff2bf27752e9316fc22709ac29e2e519f67166d7->leave($__internal_47ef75c94f1e556f5b9e9a43ff2bf27752e9316fc22709ac29e2e519f67166d7_prof);

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
/* {% extends "LamaDelRayPlatformBundle::layout.html.twig" %}*/
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
