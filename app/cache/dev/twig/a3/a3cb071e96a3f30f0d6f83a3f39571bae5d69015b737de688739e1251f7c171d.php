<?php

/* LamaDelRayPlatformBundle:Advert:view.html.twig */
class __TwigTemplate_75ce09ad1edfbd2f561abb25479b54a69611b6d37aed079740e66b0132e9ae59 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LamaDelRayPlatformBundle::layout2.html.twig", "LamaDelRayPlatformBundle:Advert:view.html.twig", 1);
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
        $__internal_a5e5423d445edce23e01b208b03c9f6f463538a582e28b61dc2ff8d000a175ae = $this->env->getExtension("native_profiler");
        $__internal_a5e5423d445edce23e01b208b03c9f6f463538a582e28b61dc2ff8d000a175ae->enter($__internal_a5e5423d445edce23e01b208b03c9f6f463538a582e28b61dc2ff8d000a175ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LamaDelRayPlatformBundle:Advert:view.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a5e5423d445edce23e01b208b03c9f6f463538a582e28b61dc2ff8d000a175ae->leave($__internal_a5e5423d445edce23e01b208b03c9f6f463538a582e28b61dc2ff8d000a175ae_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_2f6ba9f541e213a6b87e3a872f9d6eedf291c390d64c1e5b9dc3a7cd7450b1d4 = $this->env->getExtension("native_profiler");
        $__internal_2f6ba9f541e213a6b87e3a872f9d6eedf291c390d64c1e5b9dc3a7cd7450b1d4->enter($__internal_2f6ba9f541e213a6b87e3a872f9d6eedf291c390d64c1e5b9dc3a7cd7450b1d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "\tLecture d'une annonce - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_2f6ba9f541e213a6b87e3a872f9d6eedf291c390d64c1e5b9dc3a7cd7450b1d4->leave($__internal_2f6ba9f541e213a6b87e3a872f9d6eedf291c390d64c1e5b9dc3a7cd7450b1d4_prof);

    }

    // line 7
    public function block_platform_body($context, array $blocks = array())
    {
        $__internal_8de434bd68a3cc77c5b2a8fabd913b5f9e283794bba8030a32718ab0124de639 = $this->env->getExtension("native_profiler");
        $__internal_8de434bd68a3cc77c5b2a8fabd913b5f9e283794bba8030a32718ab0124de639->enter($__internal_8de434bd68a3cc77c5b2a8fabd913b5f9e283794bba8030a32718ab0124de639_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "platform_body"));

        // line 8
        echo "
\t<h2>";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "title", array()), "html", null, true);
        echo "</h2>
\t<i>Parr ";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "author", array()), "html", null, true);
        echo ", le ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "date", array()), "d/m/Y"), "html", null, true);
        echo "</i>

\t<div class=\"well\">
\t\t";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "content", array()), "html", null, true);
        echo "
\t\t";
        // line 14
        if (($this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "image", array()) != null)) {
            // line 15
            echo "\t\t<img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->getAttribute($this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "image", array()), "webPath", array())), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "image", array()), "alt", array()), "html", null, true);
            echo "\">
\t\t";
        }
        // line 17
        echo "\t</div>

\t";
        // line 19
        if ( !$this->getAttribute($this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "categories", array()), "empty", array())) {
            // line 20
            echo "\t\t<p>
\t\t\tCette annonce est parue dans les catégories suivantes :
\t\t\t";
            // line 22
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "categories", array()));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 23
                echo "\t\t\t";
                echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "name", array()), "html", null, true);
                if ( !$this->getAttribute($context["loop"], "last", array())) {
                    echo ", ";
                }
                // line 24
                echo "\t\t\t";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 25
            echo "\t\t</p>
\t";
        }
        // line 27
        echo "

\t<p>
\t\t<a href=\"";
        // line 30
        echo $this->env->getExtension('routing')->getPath("platform_home");
        echo "\" class=\"btn btn-default\">
\t\t\t<i class=\"glyphicon glyphicon-chevron-left\"></i>
\t\t\tRetour à la liste
\t\t</a>
\t\t<a href=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("platform_edit", array("id" => $this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-default\">
\t\t\t<i class=\"glyphicon glyphicon-edit\"></i>
\t\t\tModifier l'annonce
\t\t</a>
\t\t<a href=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("platform_delete", array("id" => $this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-danger\">
\t\t\t<i class=\"glyphicon glyphicon-trash\"></i>
\t\t\tSupprimer l'annonce
\t\t</a>
\t</p>

";
        
        $__internal_8de434bd68a3cc77c5b2a8fabd913b5f9e283794bba8030a32718ab0124de639->leave($__internal_8de434bd68a3cc77c5b2a8fabd913b5f9e283794bba8030a32718ab0124de639_prof);

    }

    public function getTemplateName()
    {
        return "LamaDelRayPlatformBundle:Advert:view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  156 => 38,  149 => 34,  142 => 30,  137 => 27,  133 => 25,  119 => 24,  113 => 23,  96 => 22,  92 => 20,  90 => 19,  86 => 17,  78 => 15,  76 => 14,  72 => 13,  64 => 10,  60 => 9,  57 => 8,  51 => 7,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends "LamaDelRayPlatformBundle::layout2.html.twig" %}*/
/* */
/* {% block title %}*/
/* 	Lecture d'une annonce - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block platform_body %}*/
/* */
/* 	<h2>{{ advert.title }}</h2>*/
/* 	<i>Parr {{ advert.author }}, le {{ advert.date|date('d/m/Y') }}</i>*/
/* */
/* 	<div class="well">*/
/* 		{{ advert.content }}*/
/* 		{% if advert.image != null %}*/
/* 		<img src="{{ asset(advert.image.webPath) }}" alt="{{ advert.image.alt }}">*/
/* 		{% endif %}*/
/* 	</div>*/
/* */
/* 	{% if not advert.categories.empty %}*/
/* 		<p>*/
/* 			Cette annonce est parue dans les catégories suivantes :*/
/* 			{% for category in advert.categories %}*/
/* 			{{ category.name }}{% if not loop.last %}, {% endif %}*/
/* 			{% endfor %}*/
/* 		</p>*/
/* 	{% endif %}*/
/* */
/* */
/* 	<p>*/
/* 		<a href="{{ path('platform_home') }}" class="btn btn-default">*/
/* 			<i class="glyphicon glyphicon-chevron-left"></i>*/
/* 			Retour à la liste*/
/* 		</a>*/
/* 		<a href="{{ path('platform_edit', {'id': advert.id}) }}" class="btn btn-default">*/
/* 			<i class="glyphicon glyphicon-edit"></i>*/
/* 			Modifier l'annonce*/
/* 		</a>*/
/* 		<a href="{{ path('platform_delete', {'id': advert.id}) }}" class="btn btn-danger">*/
/* 			<i class="glyphicon glyphicon-trash"></i>*/
/* 			Supprimer l'annonce*/
/* 		</a>*/
/* 	</p>*/
/* */
/* {% endblock %}*/
