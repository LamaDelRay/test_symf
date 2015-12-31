<?php

/* LamaDelRayPlatformBundle:Advert:delete.html.twig */
class __TwigTemplate_43d539a44cc0463060641a9780a21ae7891132f24d466629220582446a720f03 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LamaDelRayPlatformBundle::layout.html.twig", "LamaDelRayPlatformBundle:Advert:delete.html.twig", 1);
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
        $__internal_c79f3d836cef62763151c02169e69202241ef7f202f1c16f20c0f89374e30c77 = $this->env->getExtension("native_profiler");
        $__internal_c79f3d836cef62763151c02169e69202241ef7f202f1c16f20c0f89374e30c77->enter($__internal_c79f3d836cef62763151c02169e69202241ef7f202f1c16f20c0f89374e30c77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LamaDelRayPlatformBundle:Advert:delete.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c79f3d836cef62763151c02169e69202241ef7f202f1c16f20c0f89374e30c77->leave($__internal_c79f3d836cef62763151c02169e69202241ef7f202f1c16f20c0f89374e30c77_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_012aa3d55834e0a13a9db1d3ff0955a4e39997bfbdbff5b4cc6d5655ef78a7b7 = $this->env->getExtension("native_profiler");
        $__internal_012aa3d55834e0a13a9db1d3ff0955a4e39997bfbdbff5b4cc6d5655ef78a7b7->enter($__internal_012aa3d55834e0a13a9db1d3ff0955a4e39997bfbdbff5b4cc6d5655ef78a7b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "\tSupprimer une annonce - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_012aa3d55834e0a13a9db1d3ff0955a4e39997bfbdbff5b4cc6d5655ef78a7b7->leave($__internal_012aa3d55834e0a13a9db1d3ff0955a4e39997bfbdbff5b4cc6d5655ef78a7b7_prof);

    }

    // line 7
    public function block_platform_body($context, array $blocks = array())
    {
        $__internal_ec70fd82c166b7e121f2bdf26906c35f9830716468f30d92c4d2a52883b5f6be = $this->env->getExtension("native_profiler");
        $__internal_ec70fd82c166b7e121f2bdf26906c35f9830716468f30d92c4d2a52883b5f6be->enter($__internal_ec70fd82c166b7e121f2bdf26906c35f9830716468f30d92c4d2a52883b5f6be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "platform_body"));

        // line 8
        echo "
\t<h2>Supprimer une annonce</h2>

\t<p>
\t\tEtes-vous certain de vouloir supprimer l'annonce \"";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "title", array()), "html", null, true);
        echo "\" ?
\t</p>

\t<form action=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("platform_delete", array("id" => $this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "id", array()))), "html", null, true);
        echo "\" method=\"post\">
\t\t<a href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("platform_view", array("id" => $this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-default\">
\t\t\t<i class=\"glyphicon glyphicon-chevron-left\"></i>
\t\t\tRetour à l'annonce
\t\t</a>
\t\t<input type=\"submit\" value=\"Supprimer\" class=\"btn btn-danger\" />
\t\t";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
\t</form>
";
        
        $__internal_ec70fd82c166b7e121f2bdf26906c35f9830716468f30d92c4d2a52883b5f6be->leave($__internal_ec70fd82c166b7e121f2bdf26906c35f9830716468f30d92c4d2a52883b5f6be_prof);

    }

    public function getTemplateName()
    {
        return "LamaDelRayPlatformBundle:Advert:delete.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 21,  73 => 16,  69 => 15,  63 => 12,  57 => 8,  51 => 7,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends "LamaDelRayPlatformBundle::layout.html.twig" %}*/
/* */
/* {% block title %}*/
/* 	Supprimer une annonce - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block platform_body %}*/
/* */
/* 	<h2>Supprimer une annonce</h2>*/
/* */
/* 	<p>*/
/* 		Etes-vous certain de vouloir supprimer l'annonce "{{ advert.title }}" ?*/
/* 	</p>*/
/* */
/* 	<form action="{{ path('platform_delete', {'id': advert.id}) }}" method="post">*/
/* 		<a href="{{ path('platform_view', {'id' : advert.id}) }}" class="btn btn-default">*/
/* 			<i class="glyphicon glyphicon-chevron-left"></i>*/
/* 			Retour à l'annonce*/
/* 		</a>*/
/* 		<input type="submit" value="Supprimer" class="btn btn-danger" />*/
/* 		{{ form_rest(form) }}*/
/* 	</form>*/
/* {% endblock %}*/
/* */
/* */
