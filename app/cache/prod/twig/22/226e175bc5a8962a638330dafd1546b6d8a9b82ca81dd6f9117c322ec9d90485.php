<?php

/* LamaDelRayPlatformBundle:Advert:view.html.twig */
class __TwigTemplate_e25dfe29c83a5acb04b7048951ff0bc23d1050afb711c9e0227a5bf9202d698b extends Twig_Template
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
        $__internal_01582b243234318d061439e90319e00636992529c05291c954acbe4ea7d1fe29 = $this->env->getExtension("native_profiler");
        $__internal_01582b243234318d061439e90319e00636992529c05291c954acbe4ea7d1fe29->enter($__internal_01582b243234318d061439e90319e00636992529c05291c954acbe4ea7d1fe29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LamaDelRayPlatformBundle:Advert:view.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_01582b243234318d061439e90319e00636992529c05291c954acbe4ea7d1fe29->leave($__internal_01582b243234318d061439e90319e00636992529c05291c954acbe4ea7d1fe29_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_a32b0ccec0a19c423aa9ac32d8169a6ad5bbfc597ce99356345b57c3ef76235e = $this->env->getExtension("native_profiler");
        $__internal_a32b0ccec0a19c423aa9ac32d8169a6ad5bbfc597ce99356345b57c3ef76235e->enter($__internal_a32b0ccec0a19c423aa9ac32d8169a6ad5bbfc597ce99356345b57c3ef76235e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "\tLecture d'une annonce - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_a32b0ccec0a19c423aa9ac32d8169a6ad5bbfc597ce99356345b57c3ef76235e->leave($__internal_a32b0ccec0a19c423aa9ac32d8169a6ad5bbfc597ce99356345b57c3ef76235e_prof);

    }

    // line 7
    public function block_platform_body($context, array $blocks = array())
    {
        $__internal_2aa01e6a36a62c9339fa99c252c5365626367f60bc8ffd37253e40bff0038759 = $this->env->getExtension("native_profiler");
        $__internal_2aa01e6a36a62c9339fa99c252c5365626367f60bc8ffd37253e40bff0038759->enter($__internal_2aa01e6a36a62c9339fa99c252c5365626367f60bc8ffd37253e40bff0038759_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "platform_body"));

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
        
        $__internal_2aa01e6a36a62c9339fa99c252c5365626367f60bc8ffd37253e40bff0038759->leave($__internal_2aa01e6a36a62c9339fa99c252c5365626367f60bc8ffd37253e40bff0038759_prof);

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