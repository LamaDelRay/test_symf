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
        $__internal_62d004c66f2278ab4761b66c7a7acb5b9790c645e7dc1cd8e4c3cc5baf6f3692 = $this->env->getExtension("native_profiler");
        $__internal_62d004c66f2278ab4761b66c7a7acb5b9790c645e7dc1cd8e4c3cc5baf6f3692->enter($__internal_62d004c66f2278ab4761b66c7a7acb5b9790c645e7dc1cd8e4c3cc5baf6f3692_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LamaDelRayPlatformBundle:Advert:menu.html.twig"));

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
        
        $__internal_62d004c66f2278ab4761b66c7a7acb5b9790c645e7dc1cd8e4c3cc5baf6f3692->leave($__internal_62d004c66f2278ab4761b66c7a7acb5b9790c645e7dc1cd8e4c3cc5baf6f3692_prof);

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
