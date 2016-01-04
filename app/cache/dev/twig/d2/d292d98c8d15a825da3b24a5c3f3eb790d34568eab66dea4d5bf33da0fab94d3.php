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
        $__internal_088a3121c872292dab98d6454b27d04ba3774b1f212134ed915dec99ee8c922d = $this->env->getExtension("native_profiler");
        $__internal_088a3121c872292dab98d6454b27d04ba3774b1f212134ed915dec99ee8c922d->enter($__internal_088a3121c872292dab98d6454b27d04ba3774b1f212134ed915dec99ee8c922d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LamaDelRayPlatformBundle:Advert:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_088a3121c872292dab98d6454b27d04ba3774b1f212134ed915dec99ee8c922d->leave($__internal_088a3121c872292dab98d6454b27d04ba3774b1f212134ed915dec99ee8c922d_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_cfb30b436cf0eff09a3ebe8fe71e396468d3a36a1ff431c2a484ef9ae5984a7a = $this->env->getExtension("native_profiler");
        $__internal_cfb30b436cf0eff09a3ebe8fe71e396468d3a36a1ff431c2a484ef9ae5984a7a->enter($__internal_cfb30b436cf0eff09a3ebe8fe71e396468d3a36a1ff431c2a484ef9ae5984a7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "\tAjouter une annonce - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_cfb30b436cf0eff09a3ebe8fe71e396468d3a36a1ff431c2a484ef9ae5984a7a->leave($__internal_cfb30b436cf0eff09a3ebe8fe71e396468d3a36a1ff431c2a484ef9ae5984a7a_prof);

    }

    // line 7
    public function block_platform_body($context, array $blocks = array())
    {
        $__internal_973440a1cc73ff6bc0b5f840cf9c8bc3aa9e21b372c3d25fef77d1072f6bc4f0 = $this->env->getExtension("native_profiler");
        $__internal_973440a1cc73ff6bc0b5f840cf9c8bc3aa9e21b372c3d25fef77d1072f6bc4f0->enter($__internal_973440a1cc73ff6bc0b5f840cf9c8bc3aa9e21b372c3d25fef77d1072f6bc4f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "platform_body"));

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
        
        $__internal_973440a1cc73ff6bc0b5f840cf9c8bc3aa9e21b372c3d25fef77d1072f6bc4f0->leave($__internal_973440a1cc73ff6bc0b5f840cf9c8bc3aa9e21b372c3d25fef77d1072f6bc4f0_prof);

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
