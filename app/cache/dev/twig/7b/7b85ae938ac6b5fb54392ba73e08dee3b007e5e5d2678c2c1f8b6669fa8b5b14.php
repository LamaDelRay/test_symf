<?php

/* ::layout.html.twig */
class __TwigTemplate_a969aedd49a94f070452a9ee70780ab90e01e84457b582ea577d4be47830b9ff extends Twig_Template
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
        $__internal_ea46e50c9876bc75bd1e816b70b6f7855de9bf4675d2e31fbc5fdd93d00d7e74 = $this->env->getExtension("native_profiler");
        $__internal_ea46e50c9876bc75bd1e816b70b6f7855de9bf4675d2e31fbc5fdd93d00d7e74->enter($__internal_ea46e50c9876bc75bd1e816b70b6f7855de9bf4675d2e31fbc5fdd93d00d7e74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout.html.twig"));

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
        
        $__internal_ea46e50c9876bc75bd1e816b70b6f7855de9bf4675d2e31fbc5fdd93d00d7e74->leave($__internal_ea46e50c9876bc75bd1e816b70b6f7855de9bf4675d2e31fbc5fdd93d00d7e74_prof);

    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
        $__internal_4080a0ff5c650eb0a412c893fe29b53320debafc218e8cc33c4793944f01ed9f = $this->env->getExtension("native_profiler");
        $__internal_4080a0ff5c650eb0a412c893fe29b53320debafc218e8cc33c4793944f01ed9f->enter($__internal_4080a0ff5c650eb0a412c893fe29b53320debafc218e8cc33c4793944f01ed9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "OC Plateforme";
        
        $__internal_4080a0ff5c650eb0a412c893fe29b53320debafc218e8cc33c4793944f01ed9f->leave($__internal_4080a0ff5c650eb0a412c893fe29b53320debafc218e8cc33c4793944f01ed9f_prof);

    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_d6f7fa17d19464798b787a451ea6597a774419791d74277cbd47306291e1af85 = $this->env->getExtension("native_profiler");
        $__internal_d6f7fa17d19464798b787a451ea6597a774419791d74277cbd47306291e1af85->enter($__internal_d6f7fa17d19464798b787a451ea6597a774419791d74277cbd47306291e1af85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 11
        echo "\t\t<link rel=\"stylesheet\"
\t\thref=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css\">
\t";
        
        $__internal_d6f7fa17d19464798b787a451ea6597a774419791d74277cbd47306291e1af85->leave($__internal_d6f7fa17d19464798b787a451ea6597a774419791d74277cbd47306291e1af85_prof);

    }

    // line 42
    public function block_body($context, array $blocks = array())
    {
        $__internal_faff18593e1853824d6041c12e09d78f8467e1b3b760f37606b39dafd233b73d = $this->env->getExtension("native_profiler");
        $__internal_faff18593e1853824d6041c12e09d78f8467e1b3b760f37606b39dafd233b73d->enter($__internal_faff18593e1853824d6041c12e09d78f8467e1b3b760f37606b39dafd233b73d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 43
        echo "\t\t\t\t";
        
        $__internal_faff18593e1853824d6041c12e09d78f8467e1b3b760f37606b39dafd233b73d->leave($__internal_faff18593e1853824d6041c12e09d78f8467e1b3b760f37606b39dafd233b73d_prof);

    }

    // line 61
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_d7b731d559a89b696207de66c37ea304588a75012dcf31f5713f49c7e7069418 = $this->env->getExtension("native_profiler");
        $__internal_d7b731d559a89b696207de66c37ea304588a75012dcf31f5713f49c7e7069418->enter($__internal_d7b731d559a89b696207de66c37ea304588a75012dcf31f5713f49c7e7069418_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 62
        echo "
\t\t<script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>
\t\t<script src=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js\"></script>

\t";
        
        $__internal_d7b731d559a89b696207de66c37ea304588a75012dcf31f5713f49c7e7069418->leave($__internal_d7b731d559a89b696207de66c37ea304588a75012dcf31f5713f49c7e7069418_prof);

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
