<?php

/* LamaDelRayPlatformBundle:Advert:add.html.twig */
class __TwigTemplate_6b4078b9d641a70f792090ea1158339fcbffb9719cfece0f5dcd96557b0e27de extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LamaDelRayPlatformBundle::layout.html.twig", "LamaDelRayPlatformBundle:Advert:add.html.twig", 1);
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
        $__internal_52047390cc0ed9970ec6ac73cd0dc663508b36f1c1561c5288069856311b3aa4 = $this->env->getExtension("native_profiler");
        $__internal_52047390cc0ed9970ec6ac73cd0dc663508b36f1c1561c5288069856311b3aa4->enter($__internal_52047390cc0ed9970ec6ac73cd0dc663508b36f1c1561c5288069856311b3aa4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LamaDelRayPlatformBundle:Advert:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_52047390cc0ed9970ec6ac73cd0dc663508b36f1c1561c5288069856311b3aa4->leave($__internal_52047390cc0ed9970ec6ac73cd0dc663508b36f1c1561c5288069856311b3aa4_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_4e69b57d0e8fee23a8663d6ad3e09ae08feedf8efbed13ac903c32f6e9358fc2 = $this->env->getExtension("native_profiler");
        $__internal_4e69b57d0e8fee23a8663d6ad3e09ae08feedf8efbed13ac903c32f6e9358fc2->enter($__internal_4e69b57d0e8fee23a8663d6ad3e09ae08feedf8efbed13ac903c32f6e9358fc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "\tAjouter une annonce - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_4e69b57d0e8fee23a8663d6ad3e09ae08feedf8efbed13ac903c32f6e9358fc2->leave($__internal_4e69b57d0e8fee23a8663d6ad3e09ae08feedf8efbed13ac903c32f6e9358fc2_prof);

    }

    // line 7
    public function block_platform_body($context, array $blocks = array())
    {
        $__internal_fdcbc4ba894f57a4f87a3c2695a7486c62cd6889da3f4300065fec7189ecfa75 = $this->env->getExtension("native_profiler");
        $__internal_fdcbc4ba894f57a4f87a3c2695a7486c62cd6889da3f4300065fec7189ecfa75->enter($__internal_fdcbc4ba894f57a4f87a3c2695a7486c62cd6889da3f4300065fec7189ecfa75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "platform_body"));

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
        
        $__internal_fdcbc4ba894f57a4f87a3c2695a7486c62cd6889da3f4300065fec7189ecfa75->leave($__internal_fdcbc4ba894f57a4f87a3c2695a7486c62cd6889da3f4300065fec7189ecfa75_prof);

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
/* {% extends "LamaDelRayPlatformBundle::layout.html.twig" %}*/
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
