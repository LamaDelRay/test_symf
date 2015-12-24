<?php

/* LamaDelRayPlatformBundle:Advert:index.html.twig */
class __TwigTemplate_7172a500ccf3bd8443a39c8d77dd2be43ae035dd62475fe18004b9c6287f6f15 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b5b5e86ff4cf05ee616c432b5aa72523486e632e33ab2acda2d041865ba271bf = $this->env->getExtension("native_profiler");
        $__internal_b5b5e86ff4cf05ee616c432b5aa72523486e632e33ab2acda2d041865ba271bf->enter($__internal_b5b5e86ff4cf05ee616c432b5aa72523486e632e33ab2acda2d041865ba271bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LamaDelRayPlatformBundle:Advert:index.html.twig"));

        // line 2
        echo "
<!DOCTYPE html>
<html>
\t<h1>Hello ";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["nom"]) ? $context["nom"] : $this->getContext($context, "nom")), "html", null, true);
        echo " !</h1>
    <head>
        <title>Bienvenue sur ma première page avec OpenClassrooms !</title>
    </head>
    <body>
        <h1>Hello World !</h1>
        
        <p>
            Le Hello World est un grand classique en programmation.
            Il signifie énormément, car cela veut dire que vous avez
            réussi à exécuter le programme pour accomplir une tâche simple :
            afficher ce hello world !
        </p>
    </body>
</html>";
        
        $__internal_b5b5e86ff4cf05ee616c432b5aa72523486e632e33ab2acda2d041865ba271bf->leave($__internal_b5b5e86ff4cf05ee616c432b5aa72523486e632e33ab2acda2d041865ba271bf_prof);

    }

    public function getTemplateName()
    {
        return "LamaDelRayPlatformBundle:Advert:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 5,  22 => 2,);
    }
}
/* {# src/OC/PlatformBundle/Resources/views/Advert/index.html.twig #}*/
/* */
/* <!DOCTYPE html>*/
/* <html>*/
/* 	<h1>Hello {{ nom }} !</h1>*/
/*     <head>*/
/*         <title>Bienvenue sur ma première page avec OpenClassrooms !</title>*/
/*     </head>*/
/*     <body>*/
/*         <h1>Hello World !</h1>*/
/*         */
/*         <p>*/
/*             Le Hello World est un grand classique en programmation.*/
/*             Il signifie énormément, car cela veut dire que vous avez*/
/*             réussi à exécuter le programme pour accomplir une tâche simple :*/
/*             afficher ce hello world !*/
/*         </p>*/
/*     </body>*/
/* </html>*/
