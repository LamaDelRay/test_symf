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
        $__internal_f0799e507b994e36513ee8afcbd80a99496e04440a9615c23b6a9c231dabbbe8 = $this->env->getExtension("native_profiler");
        $__internal_f0799e507b994e36513ee8afcbd80a99496e04440a9615c23b6a9c231dabbbe8->enter($__internal_f0799e507b994e36513ee8afcbd80a99496e04440a9615c23b6a9c231dabbbe8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LamaDelRayPlatformBundle:Advert:view.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f0799e507b994e36513ee8afcbd80a99496e04440a9615c23b6a9c231dabbbe8->leave($__internal_f0799e507b994e36513ee8afcbd80a99496e04440a9615c23b6a9c231dabbbe8_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_1a26b002bedf28329d9f37ff1c68db385f4bee203c1b5f971d8dcc1d3fb7c193 = $this->env->getExtension("native_profiler");
        $__internal_1a26b002bedf28329d9f37ff1c68db385f4bee203c1b5f971d8dcc1d3fb7c193->enter($__internal_1a26b002bedf28329d9f37ff1c68db385f4bee203c1b5f971d8dcc1d3fb7c193_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "\tLecture d'une annonce - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_1a26b002bedf28329d9f37ff1c68db385f4bee203c1b5f971d8dcc1d3fb7c193->leave($__internal_1a26b002bedf28329d9f37ff1c68db385f4bee203c1b5f971d8dcc1d3fb7c193_prof);

    }

    // line 7
    public function block_platform_body($context, array $blocks = array())
    {
        $__internal_a9adf69cdb7dac2f4a2eff546b6ff4c9a1957556b778354167947e2934197353 = $this->env->getExtension("native_profiler");
        $__internal_a9adf69cdb7dac2f4a2eff546b6ff4c9a1957556b778354167947e2934197353->enter($__internal_a9adf69cdb7dac2f4a2eff546b6ff4c9a1957556b778354167947e2934197353_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "platform_body"));

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
\t</div>

\t";
        // line 16
        if ( !$this->getAttribute($this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "categories", array()), "empty", array())) {
            // line 17
            echo "\t\t<p>
\t\t\tCette annonce est parue dans les catégories suivantes :
\t\t\t";
            // line 19
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
                // line 20
                echo "\t\t\t";
                echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "name", array()), "html", null, true);
                if ( !$this->getAttribute($context["loop"], "last", array())) {
                    echo ", ";
                }
                // line 21
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
            // line 22
            echo "\t\t</p>
\t";
        }
        // line 24
        echo "
\t<p>
\t\t<a href=\"";
        // line 26
        echo $this->env->getExtension('routing')->getPath("platform_home");
        echo "\" class=\"btn btn-default\">
\t\t\t<i class=\"glyphicon glyphicon-chevron-left\"></i>
\t\t\tRetour à la liste
\t\t</a>
\t\t<a href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("platform_edit", array("id" => $this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-default\">
\t\t\t<i class=\"glyphicon glyphicon-edit\"></i>
\t\t\tModifier l'annonce
\t\t</a>
\t\t<a href=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("platform_delete", array("id" => $this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-danger\">
\t\t\t<i class=\"glyphicon glyphicon-trash\"></i>
\t\t\tSupprimer l'annonce
\t\t</a>
\t</p>

";
        
        $__internal_a9adf69cdb7dac2f4a2eff546b6ff4c9a1957556b778354167947e2934197353->leave($__internal_a9adf69cdb7dac2f4a2eff546b6ff4c9a1957556b778354167947e2934197353_prof);

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
        return array (  143 => 34,  136 => 30,  129 => 26,  125 => 24,  121 => 22,  107 => 21,  101 => 20,  84 => 19,  80 => 17,  78 => 16,  72 => 13,  64 => 10,  60 => 9,  57 => 8,  51 => 7,  41 => 4,  35 => 3,  11 => 1,);
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
