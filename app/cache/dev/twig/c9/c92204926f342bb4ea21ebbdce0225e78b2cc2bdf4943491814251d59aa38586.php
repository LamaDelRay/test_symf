<?php

/* LamaDelRayPlatformBundle:Advert:view.html.twig */
class __TwigTemplate_d713e05d6f104bd0832f7f6667e47a9041f4a6bfe31f07cc8c636313aa71ed52 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LamaDelRayPlatformBundle::layout.html.twig", "LamaDelRayPlatformBundle:Advert:view.html.twig", 1);
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
        $__internal_0a63cc297e5174bc1e4888cab298369959fd3412a764c894f41e700ee56320a0 = $this->env->getExtension("native_profiler");
        $__internal_0a63cc297e5174bc1e4888cab298369959fd3412a764c894f41e700ee56320a0->enter($__internal_0a63cc297e5174bc1e4888cab298369959fd3412a764c894f41e700ee56320a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LamaDelRayPlatformBundle:Advert:view.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0a63cc297e5174bc1e4888cab298369959fd3412a764c894f41e700ee56320a0->leave($__internal_0a63cc297e5174bc1e4888cab298369959fd3412a764c894f41e700ee56320a0_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_6550c5553b209f8762238d80e648f876841daf8d9218b9c98d5a345ec1b5d89d = $this->env->getExtension("native_profiler");
        $__internal_6550c5553b209f8762238d80e648f876841daf8d9218b9c98d5a345ec1b5d89d->enter($__internal_6550c5553b209f8762238d80e648f876841daf8d9218b9c98d5a345ec1b5d89d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "\tLecture d'une annonce - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_6550c5553b209f8762238d80e648f876841daf8d9218b9c98d5a345ec1b5d89d->leave($__internal_6550c5553b209f8762238d80e648f876841daf8d9218b9c98d5a345ec1b5d89d_prof);

    }

    // line 7
    public function block_platform_body($context, array $blocks = array())
    {
        $__internal_cb58d9fe26e43a35c47c125250d993bbf0f26e7edf603bbb71f13e8e1480fbfd = $this->env->getExtension("native_profiler");
        $__internal_cb58d9fe26e43a35c47c125250d993bbf0f26e7edf603bbb71f13e8e1480fbfd->enter($__internal_cb58d9fe26e43a35c47c125250d993bbf0f26e7edf603bbb71f13e8e1480fbfd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "platform_body"));

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
\t\t<img src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->getAttribute($this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "image", array()), "webPath", array())), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "image", array()), "alt", array()), "html", null, true);
        echo "\">
\t</div>

\t";
        // line 17
        if ( !$this->getAttribute($this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "categories", array()), "empty", array())) {
            // line 18
            echo "\t\t<p>
\t\t\tCette annonce est parue dans les catégories suivantes :
\t\t\t";
            // line 20
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
                // line 21
                echo "\t\t\t";
                echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "name", array()), "html", null, true);
                if ( !$this->getAttribute($context["loop"], "last", array())) {
                    echo ", ";
                }
                // line 22
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
            // line 23
            echo "\t\t</p>
\t";
        }
        // line 25
        echo "
\t";
        // line 26
        if ((twig_length_filter($this->env, (isset($context["listAdvertSkills"]) ? $context["listAdvertSkills"] : $this->getContext($context, "listAdvertSkills"))) > 0)) {
            // line 27
            echo "\t\t<div>
\t\t\tCette annonce requiert les compétences suivantes :
\t\t\t<ul>
\t\t\t\t";
            // line 30
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["listAdvertSkills"]) ? $context["listAdvertSkills"] : $this->getContext($context, "listAdvertSkills")));
            foreach ($context['_seq'] as $context["_key"] => $context["advertSkill"]) {
                // line 31
                echo "\t\t\t\t<li>";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["advertSkill"], "skill", array()), "name", array()), "html", null, true);
                echo " : niveau ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["advertSkill"], "level", array()), "html", null, true);
                echo "</li>
\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['advertSkill'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 33
            echo "\t\t\t</ul>
\t\t</div>
\t";
        }
        // line 36
        echo "
\t<p>
\t\t<a href=\"";
        // line 38
        echo $this->env->getExtension('routing')->getPath("platform_home");
        echo "\" class=\"btn btn-default\">
\t\t\t<i class=\"glyphicon glyphicon-chevron-left\"></i>
\t\t\tRetour à la liste
\t\t</a>
\t\t<a href=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("platform_edit", array("id" => $this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-default\">
\t\t\t<i class=\"glyphicon glyphicon-edit\"></i>
\t\t\tModifier l'annonce
\t\t</a>
\t\t<a href=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("platform_delete", array("id" => $this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-danger\">
\t\t\t<i class=\"glyphicon glyphicon-trash\"></i>
\t\t\tSupprimer l'annonce
\t\t</a>
\t</p>

";
        
        $__internal_cb58d9fe26e43a35c47c125250d993bbf0f26e7edf603bbb71f13e8e1480fbfd->leave($__internal_cb58d9fe26e43a35c47c125250d993bbf0f26e7edf603bbb71f13e8e1480fbfd_prof);

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
        return array (  179 => 46,  172 => 42,  165 => 38,  161 => 36,  156 => 33,  145 => 31,  141 => 30,  136 => 27,  134 => 26,  131 => 25,  127 => 23,  113 => 22,  107 => 21,  90 => 20,  86 => 18,  84 => 17,  76 => 14,  72 => 13,  64 => 10,  60 => 9,  57 => 8,  51 => 7,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends "LamaDelRayPlatformBundle::layout.html.twig" %}*/
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
/* 		<img src="{{ asset(advert.image.webPath) }}" alt="{{ advert.image.alt }}">*/
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
/* 	{% if listAdvertSkills|length > 0 %}*/
/* 		<div>*/
/* 			Cette annonce requiert les compétences suivantes :*/
/* 			<ul>*/
/* 				{% for advertSkill in listAdvertSkills %}*/
/* 				<li>{{ advertSkill.skill.name }} : niveau {{ advertSkill.level }}</li>*/
/* 				{% endfor %}*/
/* 			</ul>*/
/* 		</div>*/
/* 	{% endif %}*/
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
