<?php

/* LamaDelRayPlatformBundle:Advert:add.html.twig */
class __TwigTemplate_dcfe356a1ea339aa02f2a970959342759f9536ff049c0ad282bc1c029e59e840 extends Twig_Template
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
        $__internal_6f1c2097a4260199c4b912955ab36766006d729dd6a14593508c507e9b459e57 = $this->env->getExtension("native_profiler");
        $__internal_6f1c2097a4260199c4b912955ab36766006d729dd6a14593508c507e9b459e57->enter($__internal_6f1c2097a4260199c4b912955ab36766006d729dd6a14593508c507e9b459e57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LamaDelRayPlatformBundle:Advert:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f1c2097a4260199c4b912955ab36766006d729dd6a14593508c507e9b459e57->leave($__internal_6f1c2097a4260199c4b912955ab36766006d729dd6a14593508c507e9b459e57_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_24d2511ee2dc56abb0cc502661659f722a8e62ae62d201f6f03bf0e6e9415cb8 = $this->env->getExtension("native_profiler");
        $__internal_24d2511ee2dc56abb0cc502661659f722a8e62ae62d201f6f03bf0e6e9415cb8->enter($__internal_24d2511ee2dc56abb0cc502661659f722a8e62ae62d201f6f03bf0e6e9415cb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "\tAjouter une annonce - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_24d2511ee2dc56abb0cc502661659f722a8e62ae62d201f6f03bf0e6e9415cb8->leave($__internal_24d2511ee2dc56abb0cc502661659f722a8e62ae62d201f6f03bf0e6e9415cb8_prof);

    }

    // line 7
    public function block_platform_body($context, array $blocks = array())
    {
        $__internal_5f5ca319ba810d70023f03af55df79107702989d5748f860a4bc9af10ceff737 = $this->env->getExtension("native_profiler");
        $__internal_5f5ca319ba810d70023f03af55df79107702989d5748f860a4bc9af10ceff737->enter($__internal_5f5ca319ba810d70023f03af55df79107702989d5748f860a4bc9af10ceff737_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "platform_body"));

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
        
        $__internal_5f5ca319ba810d70023f03af55df79107702989d5748f860a4bc9af10ceff737->leave($__internal_5f5ca319ba810d70023f03af55df79107702989d5748f860a4bc9af10ceff737_prof);

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
