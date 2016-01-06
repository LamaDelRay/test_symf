<?php

/* LamaDelRayPlatformBundle:Advert:edit.html.twig */
class __TwigTemplate_44ca1552dcb88a9e24f19966a7b08d74e5dcd17ce19946f34b55914ef7e79ad0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LamaDelRayPlatformBundle::layout2.html.twig", "LamaDelRayPlatformBundle:Advert:edit.html.twig", 1);
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
        $__internal_55a53944b8326e5b97a89ebeb11ee574c778c83d0eca520165bedde0fd8b9fb2 = $this->env->getExtension("native_profiler");
        $__internal_55a53944b8326e5b97a89ebeb11ee574c778c83d0eca520165bedde0fd8b9fb2->enter($__internal_55a53944b8326e5b97a89ebeb11ee574c778c83d0eca520165bedde0fd8b9fb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LamaDelRayPlatformBundle:Advert:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_55a53944b8326e5b97a89ebeb11ee574c778c83d0eca520165bedde0fd8b9fb2->leave($__internal_55a53944b8326e5b97a89ebeb11ee574c778c83d0eca520165bedde0fd8b9fb2_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_b53e24f60ad9c70150f211b787c028664b0851e419b22891fb6802222c1bb606 = $this->env->getExtension("native_profiler");
        $__internal_b53e24f60ad9c70150f211b787c028664b0851e419b22891fb6802222c1bb606->enter($__internal_b53e24f60ad9c70150f211b787c028664b0851e419b22891fb6802222c1bb606_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "\tModifier une annonce - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_b53e24f60ad9c70150f211b787c028664b0851e419b22891fb6802222c1bb606->leave($__internal_b53e24f60ad9c70150f211b787c028664b0851e419b22891fb6802222c1bb606_prof);

    }

    // line 7
    public function block_platform_body($context, array $blocks = array())
    {
        $__internal_b818a5cc390ecd8297e02b43711fe71fb1c936f347f0b1df204ac5831616d622 = $this->env->getExtension("native_profiler");
        $__internal_b818a5cc390ecd8297e02b43711fe71fb1c936f347f0b1df204ac5831616d622->enter($__internal_b818a5cc390ecd8297e02b43711fe71fb1c936f347f0b1df204ac5831616d622_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "platform_body"));

        // line 8
        echo "
\t<h2> Modifier une annonce </h2>

\t";
        // line 11
        echo twig_include($this->env, $context, "LamaDelRayPlatformBundle:Advert:form.html.twig");
        echo "

\t<p>
\t\tVous éditez une annonce déjà existante, merci de ne pas changer
\t\tl'esprit générale de l'annonce déjà publiée.
\t</p>

\t<p>
\t\tVous éditez une annonce déjà existante, merci de ne pas changer
\t\tl'esprit générale de l'annonce déjà publiée
\t</p>

\t<p>
\t\t<a href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("platform_view", array("id" => $this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-default\">
\t\t\t<i class=\"glyphicon glyphicon-chevron-left\"></i>
\t\t\tRetour à l'annonce
\t\t</a>
\t</p>

";
        
        $__internal_b818a5cc390ecd8297e02b43711fe71fb1c936f347f0b1df204ac5831616d622->leave($__internal_b818a5cc390ecd8297e02b43711fe71fb1c936f347f0b1df204ac5831616d622_prof);

    }

    public function getTemplateName()
    {
        return "LamaDelRayPlatformBundle:Advert:edit.html.twig";
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
/* 	Modifier une annonce - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block platform_body %}*/
/* */
/* 	<h2> Modifier une annonce </h2>*/
/* */
/* 	{{ include("LamaDelRayPlatformBundle:Advert:form.html.twig") }}*/
/* */
/* 	<p>*/
/* 		Vous éditez une annonce déjà existante, merci de ne pas changer*/
/* 		l'esprit générale de l'annonce déjà publiée.*/
/* 	</p>*/
/* */
/* 	<p>*/
/* 		Vous éditez une annonce déjà existante, merci de ne pas changer*/
/* 		l'esprit générale de l'annonce déjà publiée*/
/* 	</p>*/
/* */
/* 	<p>*/
/* 		<a href="{{ path('platform_view', {'id': advert.id}) }}" class="btn btn-default">*/
/* 			<i class="glyphicon glyphicon-chevron-left"></i>*/
/* 			Retour à l'annonce*/
/* 		</a>*/
/* 	</p>*/
/* */
/* {% endblock %}*/
