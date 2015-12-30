<?php

/* ::layout.html.twig */
class __TwigTemplate_062c635baa99b085dd18e0a0a16bb4d4da14438e841668b45538ce481a31ddf3 extends Twig_Template
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
        $__internal_f5edbb13e5d29eb1c4929acdbb3f9b0f75928fb287b7abb54242bd5f10f8a2af = $this->env->getExtension("native_profiler");
        $__internal_f5edbb13e5d29eb1c4929acdbb3f9b0f75928fb287b7abb54242bd5f10f8a2af->enter($__internal_f5edbb13e5d29eb1c4929acdbb3f9b0f75928fb287b7abb54242bd5f10f8a2af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout.html.twig"));

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
\t\t\t\t\t<li><a href=\"";
        // line 34
        echo $this->env->getExtension('routing')->getPath("platform_add");
        echo "\">Ajouter une annonce</a></li>
\t\t\t\t</ul>
\t\t\t\t<h4>Dernières annonces</h4>
\t\t\t\t";
        // line 37
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("LamaDelRayPlatformBundle:Advert:menu", array("limit" => 3)));
        echo "
\t\t\t</div>
\t\t\t<div id=\"content\" class=\"col-md-9\">
\t\t\t\t";
        // line 40
        $this->displayBlock('body', $context, $blocks);
        // line 42
        echo "\t\t\t</div>
\t\t</div>
\t\t<hr>

\t\t<footer>
\t\t\t<p>The sky's the limit ";
        // line 47
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " and beyond.</p>
\t\t</footer>
\t</div>

\t";
        // line 51
        $this->displayBlock('javascripts', $context, $blocks);
        // line 57
        echo "</body>
</html>";
        
        $__internal_f5edbb13e5d29eb1c4929acdbb3f9b0f75928fb287b7abb54242bd5f10f8a2af->leave($__internal_f5edbb13e5d29eb1c4929acdbb3f9b0f75928fb287b7abb54242bd5f10f8a2af_prof);

    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
        $__internal_e141167854485bce358b863edfca4e3c52118f36790b9d09b6d51aa944e00fca = $this->env->getExtension("native_profiler");
        $__internal_e141167854485bce358b863edfca4e3c52118f36790b9d09b6d51aa944e00fca->enter($__internal_e141167854485bce358b863edfca4e3c52118f36790b9d09b6d51aa944e00fca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "OC Plateforme";
        
        $__internal_e141167854485bce358b863edfca4e3c52118f36790b9d09b6d51aa944e00fca->leave($__internal_e141167854485bce358b863edfca4e3c52118f36790b9d09b6d51aa944e00fca_prof);

    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_e0270580f90a747e5cf62a2b3648ebbd4bd48247e00e87592fc5fad186ef2726 = $this->env->getExtension("native_profiler");
        $__internal_e0270580f90a747e5cf62a2b3648ebbd4bd48247e00e87592fc5fad186ef2726->enter($__internal_e0270580f90a747e5cf62a2b3648ebbd4bd48247e00e87592fc5fad186ef2726_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 11
        echo "\t\t<link rel=\"stylesheet\"
\t\thref=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css\">
\t";
        
        $__internal_e0270580f90a747e5cf62a2b3648ebbd4bd48247e00e87592fc5fad186ef2726->leave($__internal_e0270580f90a747e5cf62a2b3648ebbd4bd48247e00e87592fc5fad186ef2726_prof);

    }

    // line 40
    public function block_body($context, array $blocks = array())
    {
        $__internal_fe408039d5e46086c43cb03ac8ed197d7a9bf977cd115d416c1ca8e289916a73 = $this->env->getExtension("native_profiler");
        $__internal_fe408039d5e46086c43cb03ac8ed197d7a9bf977cd115d416c1ca8e289916a73->enter($__internal_fe408039d5e46086c43cb03ac8ed197d7a9bf977cd115d416c1ca8e289916a73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 41
        echo "\t\t\t\t";
        
        $__internal_fe408039d5e46086c43cb03ac8ed197d7a9bf977cd115d416c1ca8e289916a73->leave($__internal_fe408039d5e46086c43cb03ac8ed197d7a9bf977cd115d416c1ca8e289916a73_prof);

    }

    // line 51
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_0568a0b350cff0f755647b27fa49e2528b328623482bbc86edc6abbf93ec5bfd = $this->env->getExtension("native_profiler");
        $__internal_0568a0b350cff0f755647b27fa49e2528b328623482bbc86edc6abbf93ec5bfd->enter($__internal_0568a0b350cff0f755647b27fa49e2528b328623482bbc86edc6abbf93ec5bfd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 52
        echo "
\t\t<script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>
\t\t<script src=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js\"></script>

\t";
        
        $__internal_0568a0b350cff0f755647b27fa49e2528b328623482bbc86edc6abbf93ec5bfd->leave($__internal_0568a0b350cff0f755647b27fa49e2528b328623482bbc86edc6abbf93ec5bfd_prof);

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
        return array (  151 => 52,  145 => 51,  138 => 41,  132 => 40,  123 => 11,  117 => 10,  105 => 8,  97 => 57,  95 => 51,  88 => 47,  81 => 42,  79 => 40,  73 => 37,  67 => 34,  63 => 33,  42 => 14,  40 => 10,  35 => 8,  26 => 1,);
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
/* 					<li><a href="{{ path('platform_add') }}">Ajouter une annonce</a></li>*/
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
/* 	{% block javascripts %}*/
/* */
/* 		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>*/
/* 		<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>*/
/* */
/* 	{% endblock %}*/
/* </body>*/
/* </html>*/
