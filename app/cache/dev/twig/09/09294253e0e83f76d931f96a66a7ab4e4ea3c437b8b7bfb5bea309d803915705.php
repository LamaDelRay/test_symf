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
        $__internal_e8396df3b7a74170e0d33ce9edcaa3f0e96b37638306a6e2cd6f867fdef69a9a = $this->env->getExtension("native_profiler");
        $__internal_e8396df3b7a74170e0d33ce9edcaa3f0e96b37638306a6e2cd6f867fdef69a9a->enter($__internal_e8396df3b7a74170e0d33ce9edcaa3f0e96b37638306a6e2cd6f867fdef69a9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LamaDelRayPlatformBundle:Advert:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e8396df3b7a74170e0d33ce9edcaa3f0e96b37638306a6e2cd6f867fdef69a9a->leave($__internal_e8396df3b7a74170e0d33ce9edcaa3f0e96b37638306a6e2cd6f867fdef69a9a_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_f2362c95cd85a9a782d7bf85aa2761f79e834653ae0db720b37f0d526689c8e0 = $this->env->getExtension("native_profiler");
        $__internal_f2362c95cd85a9a782d7bf85aa2761f79e834653ae0db720b37f0d526689c8e0->enter($__internal_f2362c95cd85a9a782d7bf85aa2761f79e834653ae0db720b37f0d526689c8e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "\tAjouter une annonce - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_f2362c95cd85a9a782d7bf85aa2761f79e834653ae0db720b37f0d526689c8e0->leave($__internal_f2362c95cd85a9a782d7bf85aa2761f79e834653ae0db720b37f0d526689c8e0_prof);

    }

    // line 7
    public function block_platform_body($context, array $blocks = array())
    {
        $__internal_dc7012ec819d1c1c3c4fe851d0c4820a3b59f58b5996e1eac64c2cb5158d00aa = $this->env->getExtension("native_profiler");
        $__internal_dc7012ec819d1c1c3c4fe851d0c4820a3b59f58b5996e1eac64c2cb5158d00aa->enter($__internal_dc7012ec819d1c1c3c4fe851d0c4820a3b59f58b5996e1eac64c2cb5158d00aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "platform_body"));

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
        
        $__internal_dc7012ec819d1c1c3c4fe851d0c4820a3b59f58b5996e1eac64c2cb5158d00aa->leave($__internal_dc7012ec819d1c1c3c4fe851d0c4820a3b59f58b5996e1eac64c2cb5158d00aa_prof);

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
