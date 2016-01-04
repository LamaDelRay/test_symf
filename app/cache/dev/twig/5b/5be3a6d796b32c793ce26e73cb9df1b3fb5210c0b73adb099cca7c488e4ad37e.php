<?php

/* LamaDelRayPlatformBundle:Advert:menu.html.twig */
class __TwigTemplate_60696a3fa3770d2b02cd9be0e7ec3c1c57e56e99b738452e0455afbb64e77a39 extends Twig_Template
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
        $__internal_71f95b0b7cf3530df945fa2baf9e2f43feb5e1e6ca2d8cd8ad6081c48cbb0dee = $this->env->getExtension("native_profiler");
        $__internal_71f95b0b7cf3530df945fa2baf9e2f43feb5e1e6ca2d8cd8ad6081c48cbb0dee->enter($__internal_71f95b0b7cf3530df945fa2baf9e2f43feb5e1e6ca2d8cd8ad6081c48cbb0dee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LamaDelRayPlatformBundle:Advert:menu.html.twig"));

        // line 1
        echo "<ul class=\"nav nav-pills nav-stacked\">
\t";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listAdverts"]) ? $context["listAdverts"] : $this->getContext($context, "listAdverts")));
        foreach ($context['_seq'] as $context["_key"] => $context["advert"]) {
            // line 3
            echo "\t\t<li>
\t\t\t<a href=\"";
            // line 4
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("platform_view", array("id" => $this->getAttribute($context["advert"], "id", array()))), "html", null, true);
            echo "\">
\t\t\t\t";
            // line 5
            echo twig_escape_filter($this->env, $this->getAttribute($context["advert"], "title", array()), "html", null, true);
            echo "
\t\t\t</a>
\t\t</li>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['advert'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 9
        echo "</ul>";
        
        $__internal_71f95b0b7cf3530df945fa2baf9e2f43feb5e1e6ca2d8cd8ad6081c48cbb0dee->leave($__internal_71f95b0b7cf3530df945fa2baf9e2f43feb5e1e6ca2d8cd8ad6081c48cbb0dee_prof);

    }

    public function getTemplateName()
    {
        return "LamaDelRayPlatformBundle:Advert:menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 9,  36 => 5,  32 => 4,  29 => 3,  25 => 2,  22 => 1,);
    }
}
/* <ul class="nav nav-pills nav-stacked">*/
/* 	{% for advert in listAdverts %}*/
/* 		<li>*/
/* 			<a href="{{ path('platform_view', {'id': advert.id}) }}">*/
/* 				{{ advert.title }}*/
/* 			</a>*/
/* 		</li>*/
/* 	{% endfor %}*/
/* </ul>*/
