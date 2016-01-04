<?php

/* ::layout.html.twig */
class __TwigTemplate_f93a92ef0a09630b30a86e460e21bc813889e3d964cd7201cd25d5876581f3d2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d33fe190abe87ebbb0b4d24dcea1c959a51481470b453d1aac2cf8ff1512d4ab = $this->env->getExtension("native_profiler");
        $__internal_d33fe190abe87ebbb0b4d24dcea1c959a51481470b453d1aac2cf8ff1512d4ab->enter($__internal_d33fe190abe87ebbb0b4d24dcea1c959a51481470b453d1aac2cf8ff1512d4ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>

<html>
<head>
\t<meta charset=\"utf-8\">
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

\t<title>";
        // line 8
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

\t";
        // line 10
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 14
        echo "
</head>

<body>
\t<div class=\"container\">
\t\t<div id=\"header\" class=\"jumbotron\">
\t\t\t<h1>Ma plateforme d'annonces</h1>
\t\t\t<p>
\t\t\t\tCe Projet est propulsé par Symfony2,
\t\t\t\tet construit grâce au MOOC OpenClassrooms et SensioLabs.
\t\t\t</p>
\t\t\t<p>
\t\t\t\t<a class=\"btn btn-primary btn-lg\" href=\"http://fr.openclassrooms.com/informatique/cours/developpez-votre-site-web-avec-le-framework-symfony2\"> Participer au MOOC >> </a>
\t\t\t</p>
\t\t</div>
\t\t<div class=\"row\">
\t\t\t<div id=\"menu\" class=\"col-md-3\">
\t\t\t\t<h3>Les annonces</h3>
\t\t\t\t<ul class=\"nav nav-pills nav-stacked\">
\t\t\t\t\t<li><a href=\"";
        // line 33
        echo $this->env->getExtension('routing')->getPath("platform_home");
        echo "\">Accueil</a></li>
\t\t\t\t\t";
        // line 34
        if ($this->env->getExtension('security')->isGranted("ROLE_AUTEUR")) {
            // line 35
            echo "\t\t\t\t\t<li><a href=\"";
            echo $this->env->getExtension('routing')->getPath("platform_add");
            echo "\">Ajouter une annonce</a></li>
\t\t\t\t\t";
        }
        // line 37
        echo "\t\t\t\t</ul>
\t\t\t\t<h4>Dernières annonces</h4>
\t\t\t\t";
        // line 39
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("LamaDelRayPlatformBundle:Advert:menu", array("limit" => 3)));
        echo "
\t\t\t</div>
\t\t\t<div id=\"content\" class=\"col-md-9\">
\t\t\t\t";
        // line 42
        $this->displayBlock('body', $context, $blocks);
        // line 44
        echo "\t\t\t</div>
\t\t</div>
\t\t<hr>

\t\t<footer>
\t\t\t<p>The sky's the limit ";
        // line 49
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " and beyond.</p>
\t\t</footer>
\t</div>

\t";
        // line 53
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 54
            echo "\t\tConnecté en tant que ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
            echo "
\t\t-
\t\t<a href=\"";
            // line 56
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\">Déconnexion</a>
\t";
        } else {
            // line 58
            echo "\t\t<a href=\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
            echo "\">Connexion</a>
\t";
        }
        // line 60
        echo "
\t";
        // line 61
        $this->displayBlock('javascripts', $context, $blocks);
        // line 67
        echo "</body>
</html>";
        
        $__internal_d33fe190abe87ebbb0b4d24dcea1c959a51481470b453d1aac2cf8ff1512d4ab->leave($__internal_d33fe190abe87ebbb0b4d24dcea1c959a51481470b453d1aac2cf8ff1512d4ab_prof);

    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
        $__internal_60728a263431f7a7a126225a3bc8b5abcd35f7a33de38244a08c6f3a13234469 = $this->env->getExtension("native_profiler");
        $__internal_60728a263431f7a7a126225a3bc8b5abcd35f7a33de38244a08c6f3a13234469->enter($__internal_60728a263431f7a7a126225a3bc8b5abcd35f7a33de38244a08c6f3a13234469_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "OC Plateforme";
        
        $__internal_60728a263431f7a7a126225a3bc8b5abcd35f7a33de38244a08c6f3a13234469->leave($__internal_60728a263431f7a7a126225a3bc8b5abcd35f7a33de38244a08c6f3a13234469_prof);

    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_d4bdc7c3452ab830963fdcdf93096c1cec8a471603577913775b11d1a70fd764 = $this->env->getExtension("native_profiler");
        $__internal_d4bdc7c3452ab830963fdcdf93096c1cec8a471603577913775b11d1a70fd764->enter($__internal_d4bdc7c3452ab830963fdcdf93096c1cec8a471603577913775b11d1a70fd764_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 11
        echo "\t\t<link rel=\"stylesheet\"
\t\thref=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css\">
\t";
        
        $__internal_d4bdc7c3452ab830963fdcdf93096c1cec8a471603577913775b11d1a70fd764->leave($__internal_d4bdc7c3452ab830963fdcdf93096c1cec8a471603577913775b11d1a70fd764_prof);

    }

    // line 42
    public function block_body($context, array $blocks = array())
    {
        $__internal_c913a5e41e54f3811063c00afd95714f0597a89da37bf66fc1a6c1b6b01f25cd = $this->env->getExtension("native_profiler");
        $__internal_c913a5e41e54f3811063c00afd95714f0597a89da37bf66fc1a6c1b6b01f25cd->enter($__internal_c913a5e41e54f3811063c00afd95714f0597a89da37bf66fc1a6c1b6b01f25cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 43
        echo "\t\t\t\t";
        
        $__internal_c913a5e41e54f3811063c00afd95714f0597a89da37bf66fc1a6c1b6b01f25cd->leave($__internal_c913a5e41e54f3811063c00afd95714f0597a89da37bf66fc1a6c1b6b01f25cd_prof);

    }

    // line 61
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_cecaa68f10c4f6a3f5a9bdd712b9ae5ed103e21928f931981fe6dc761ad46816 = $this->env->getExtension("native_profiler");
        $__internal_cecaa68f10c4f6a3f5a9bdd712b9ae5ed103e21928f931981fe6dc761ad46816->enter($__internal_cecaa68f10c4f6a3f5a9bdd712b9ae5ed103e21928f931981fe6dc761ad46816_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 62
        echo "
\t\t<script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>
\t\t<script src=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js\"></script>

\t";
        
        $__internal_cecaa68f10c4f6a3f5a9bdd712b9ae5ed103e21928f931981fe6dc761ad46816->leave($__internal_cecaa68f10c4f6a3f5a9bdd712b9ae5ed103e21928f931981fe6dc761ad46816_prof);

    }

    public function getTemplateName()
    {
        return "::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  179 => 62,  173 => 61,  166 => 43,  160 => 42,  151 => 11,  145 => 10,  133 => 8,  125 => 67,  123 => 61,  120 => 60,  114 => 58,  109 => 56,  103 => 54,  101 => 53,  94 => 49,  87 => 44,  85 => 42,  79 => 39,  75 => 37,  69 => 35,  67 => 34,  63 => 33,  42 => 14,  40 => 10,  35 => 8,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* */
/* <html>*/
/* <head>*/
/* 	<meta charset="utf-8">*/
/* 	<meta name="viewport" content="width=device-width, initial-scale=1">*/
/* */
/* 	<title>{% block title %}OC Plateforme{% endblock %}</title>*/
/* */
/* 	{% block stylesheets %}*/
/* 		<link rel="stylesheet"*/
/* 		href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">*/
/* 	{% endblock %}*/
/* */
/* </head>*/
/* */
/* <body>*/
/* 	<div class="container">*/
/* 		<div id="header" class="jumbotron">*/
/* 			<h1>Ma plateforme d'annonces</h1>*/
/* 			<p>*/
/* 				Ce Projet est propulsé par Symfony2,*/
/* 				et construit grâce au MOOC OpenClassrooms et SensioLabs.*/
/* 			</p>*/
/* 			<p>*/
/* 				<a class="btn btn-primary btn-lg" href="http://fr.openclassrooms.com/informatique/cours/developpez-votre-site-web-avec-le-framework-symfony2"> Participer au MOOC >> </a>*/
/* 			</p>*/
/* 		</div>*/
/* 		<div class="row">*/
/* 			<div id="menu" class="col-md-3">*/
/* 				<h3>Les annonces</h3>*/
/* 				<ul class="nav nav-pills nav-stacked">*/
/* 					<li><a href="{{ path('platform_home') }}">Accueil</a></li>*/
/* 					{% if is_granted('ROLE_AUTEUR') %}*/
/* 					<li><a href="{{ path('platform_add') }}">Ajouter une annonce</a></li>*/
/* 					{% endif %}*/
/* 				</ul>*/
/* 				<h4>Dernières annonces</h4>*/
/* 				{{ render(controller("LamaDelRayPlatformBundle:Advert:menu", {'limit' : 3})) }}*/
/* 			</div>*/
/* 			<div id="content" class="col-md-9">*/
/* 				{% block body %}*/
/* 				{% endblock %}*/
/* 			</div>*/
/* 		</div>*/
/* 		<hr>*/
/* */
/* 		<footer>*/
/* 			<p>The sky's the limit {{ 'now'|date('Y') }} and beyond.</p>*/
/* 		</footer>*/
/* 	</div>*/
/* */
/* 	{% if is_granted("IS_AUTHENTICATED_REMEMBERED") %}*/
/* 		Connecté en tant que {{ app.user.username }}*/
/* 		-*/
/* 		<a href="{{ path('fos_user_security_logout') }}">Déconnexion</a>*/
/* 	{% else %}*/
/* 		<a href="{{ path('fos_user_security_login') }}">Connexion</a>*/
/* 	{% endif %}*/
/* */
/* 	{% block javascripts %}*/
/* */
/* 		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>*/
/* 		<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>*/
/* */
/* 	{% endblock %}*/
/* </body>*/
/* </html>*/
