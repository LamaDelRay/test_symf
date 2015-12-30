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
        $__internal_2dcdf7ce6b670f9e59a4a17cc8c7f41f17406b95ed91e5a181c93706e00b28d2 = $this->env->getExtension("native_profiler");
        $__internal_2dcdf7ce6b670f9e59a4a17cc8c7f41f17406b95ed91e5a181c93706e00b28d2->enter($__internal_2dcdf7ce6b670f9e59a4a17cc8c7f41f17406b95ed91e5a181c93706e00b28d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LamaDelRayPlatformBundle:Advert:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2dcdf7ce6b670f9e59a4a17cc8c7f41f17406b95ed91e5a181c93706e00b28d2->leave($__internal_2dcdf7ce6b670f9e59a4a17cc8c7f41f17406b95ed91e5a181c93706e00b28d2_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_667374073c96540b33d44005f58aa5016dcbb2bd5bb666a33ed83902217e5795 = $this->env->getExtension("native_profiler");
        $__internal_667374073c96540b33d44005f58aa5016dcbb2bd5bb666a33ed83902217e5795->enter($__internal_667374073c96540b33d44005f58aa5016dcbb2bd5bb666a33ed83902217e5795_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "\tAjouter une annonce - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_667374073c96540b33d44005f58aa5016dcbb2bd5bb666a33ed83902217e5795->leave($__internal_667374073c96540b33d44005f58aa5016dcbb2bd5bb666a33ed83902217e5795_prof);

    }

    // line 7
    public function block_platform_body($context, array $blocks = array())
    {
        $__internal_eb097af569cf6421e4da975998b05c6368070bd6c2d0148645c877b3d77df82a = $this->env->getExtension("native_profiler");
        $__internal_eb097af569cf6421e4da975998b05c6368070bd6c2d0148645c877b3d77df82a->enter($__internal_eb097af569cf6421e4da975998b05c6368070bd6c2d0148645c877b3d77df82a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "platform_body"));

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
        
        $__internal_eb097af569cf6421e4da975998b05c6368070bd6c2d0148645c877b3d77df82a->leave($__internal_eb097af569cf6421e4da975998b05c6368070bd6c2d0148645c877b3d77df82a_prof);

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
