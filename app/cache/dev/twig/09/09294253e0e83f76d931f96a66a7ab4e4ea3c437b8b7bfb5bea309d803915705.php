<?php

/* LamaDelRayPlatformBundle:Advert:add.html.twig */
class __TwigTemplate_f18633bfe71bc8b02b9a46dd5bd6d943472a8bc69643ca91ff8bd7873d77bd64 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LamaDelRayPlatformBundle::layout2.html.twig", "LamaDelRayPlatformBundle:Advert:add.html.twig", 1);
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
        $__internal_e0f48d378396e9c109bc79b992d6126d14e58b5b336d69d49593c1d2e9e5a161 = $this->env->getExtension("native_profiler");
        $__internal_e0f48d378396e9c109bc79b992d6126d14e58b5b336d69d49593c1d2e9e5a161->enter($__internal_e0f48d378396e9c109bc79b992d6126d14e58b5b336d69d49593c1d2e9e5a161_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LamaDelRayPlatformBundle:Advert:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e0f48d378396e9c109bc79b992d6126d14e58b5b336d69d49593c1d2e9e5a161->leave($__internal_e0f48d378396e9c109bc79b992d6126d14e58b5b336d69d49593c1d2e9e5a161_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_f6dcb82f4aeabab02872ada4254e274f573abe38588aebea806914b1dbf05c00 = $this->env->getExtension("native_profiler");
        $__internal_f6dcb82f4aeabab02872ada4254e274f573abe38588aebea806914b1dbf05c00->enter($__internal_f6dcb82f4aeabab02872ada4254e274f573abe38588aebea806914b1dbf05c00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "\tAjouter une annonce - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_f6dcb82f4aeabab02872ada4254e274f573abe38588aebea806914b1dbf05c00->leave($__internal_f6dcb82f4aeabab02872ada4254e274f573abe38588aebea806914b1dbf05c00_prof);

    }

    // line 7
    public function block_platform_body($context, array $blocks = array())
    {
        $__internal_64f11828b014479eed480804fc26cbd4470a28c20eda1929f618b95f451a1ade = $this->env->getExtension("native_profiler");
        $__internal_64f11828b014479eed480804fc26cbd4470a28c20eda1929f618b95f451a1ade->enter($__internal_64f11828b014479eed480804fc26cbd4470a28c20eda1929f618b95f451a1ade_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "platform_body"));

        // line 8
        echo "
\t<h2> Modifier une annonce </h2>

\t";
        // line 11
        echo twig_include($this->env, $context, "LamaDelRayPlatformBundle:Advert:form.html.twig");
        echo "


\t<p>
\t\tVous ajoutez une annonce merci de la rendre la plus complète possible.
\t</p>

\t<p>
\t\tAttention : cette annonce sera ajoutée directement
\t\tsur la page d'accueil après validation du formulaire.
\t</p>

\t<p>
\t\t<a href=\"";
        // line 24
        echo $this->env->getExtension('routing')->getPath("platform_home");
        echo "\" class=\"btn btn-default\">
\t\t\t<i class=\"glyphicon glyphicon-chevron-left\"></i>
\t\t\tRetour aux annonces
\t\t</a>
\t</p>

";
        
        $__internal_64f11828b014479eed480804fc26cbd4470a28c20eda1929f618b95f451a1ade->leave($__internal_64f11828b014479eed480804fc26cbd4470a28c20eda1929f618b95f451a1ade_prof);

    }

    public function getTemplateName()
    {
        return "LamaDelRayPlatformBundle:Advert:add.html.twig";
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
/* 	Ajouter une annonce - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block platform_body %}*/
/* */
/* 	<h2> Modifier une annonce </h2>*/
/* */
/* 	{{ include("LamaDelRayPlatformBundle:Advert:form.html.twig") }}*/
/* */
/* */
/* 	<p>*/
/* 		Vous ajoutez une annonce merci de la rendre la plus complète possible.*/
/* 	</p>*/
/* */
/* 	<p>*/
/* 		Attention : cette annonce sera ajoutée directement*/
/* 		sur la page d'accueil après validation du formulaire.*/
/* 	</p>*/
/* */
/* 	<p>*/
/* 		<a href="{{ path('platform_home') }}" class="btn btn-default">*/
/* 			<i class="glyphicon glyphicon-chevron-left"></i>*/
/* 			Retour aux annonces*/
/* 		</a>*/
/* 	</p>*/
/* */
/* {% endblock %}*/
