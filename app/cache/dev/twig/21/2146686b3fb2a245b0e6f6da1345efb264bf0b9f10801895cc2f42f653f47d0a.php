<?php

/* LamaDelRayPlatformBundle:Advert:index.html.twig */
class __TwigTemplate_7172a500ccf3bd8443a39c8d77dd2be43ae035dd62475fe18004b9c6287f6f15 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LamaDelRayPlatformBundle::layout.html.twig", "LamaDelRayPlatformBundle:Advert:index.html.twig", 1);
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
        $__internal_d7246862e66d154f270677b0eb5cdcf280861068730657540d9d791ef723caca = $this->env->getExtension("native_profiler");
        $__internal_d7246862e66d154f270677b0eb5cdcf280861068730657540d9d791ef723caca->enter($__internal_d7246862e66d154f270677b0eb5cdcf280861068730657540d9d791ef723caca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LamaDelRayPlatformBundle:Advert:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d7246862e66d154f270677b0eb5cdcf280861068730657540d9d791ef723caca->leave($__internal_d7246862e66d154f270677b0eb5cdcf280861068730657540d9d791ef723caca_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_ac5f5dd292c649445298e971f915ea48574c6cb1d59de365528593d1130caaf7 = $this->env->getExtension("native_profiler");
        $__internal_ac5f5dd292c649445298e971f915ea48574c6cb1d59de365528593d1130caaf7->enter($__internal_ac5f5dd292c649445298e971f915ea48574c6cb1d59de365528593d1130caaf7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " 
    Accueil - ";
        // line 4
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_ac5f5dd292c649445298e971f915ea48574c6cb1d59de365528593d1130caaf7->leave($__internal_ac5f5dd292c649445298e971f915ea48574c6cb1d59de365528593d1130caaf7_prof);

    }

    // line 7
    public function block_platform_body($context, array $blocks = array())
    {
        $__internal_179a3b16d761bef8e98a598190e7baecbbc635c2edafc8b7a8ddfa88ca9ded47 = $this->env->getExtension("native_profiler");
        $__internal_179a3b16d761bef8e98a598190e7baecbbc635c2edafc8b7a8ddfa88ca9ded47->enter($__internal_179a3b16d761bef8e98a598190e7baecbbc635c2edafc8b7a8ddfa88ca9ded47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "platform_body"));

        // line 8
        echo "    <h2>Liste des annonces</h2>
    <ul>
        ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listAdverts"]) ? $context["listAdverts"] : $this->getContext($context, "listAdverts")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["advert"]) {
            // line 11
            echo "        <li>
            <a href=\"";
            // line 12
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("platform_view", array("id" => $this->getAttribute($context["advert"], "id", array()))), "html", null, true);
            echo "\">
                ";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute($context["advert"], "title", array()), "html", null, true);
            echo "
            </a>
            par ";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute($context["advert"], "author", array()), "html", null, true);
            echo ",
            le ";
            // line 16
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["advert"], "date", array()), "d/m/Y"), "html", null, true);
            echo "
        </li>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 19
            echo "            <li>Pas (encore !) d'annonces</li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['advert'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "    </ul>

    <ul class=\"pagination\">
        ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["nbPages"]) ? $context["nbPages"] : $this->getContext($context, "nbPages"))));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 25
            echo "        <li ";
            if (($context["p"] == (isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")))) {
                echo " class=\"active\" ";
            }
            echo ">
            <a href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("platform_home", array("page" => $context["p"])), "html", null, true);
            echo "\"> ";
            echo twig_escape_filter($this->env, $context["p"], "html", null, true);
            echo " </a>
        </li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "    </ul>

";
        
        $__internal_179a3b16d761bef8e98a598190e7baecbbc635c2edafc8b7a8ddfa88ca9ded47->leave($__internal_179a3b16d761bef8e98a598190e7baecbbc635c2edafc8b7a8ddfa88ca9ded47_prof);

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
        return array (  125 => 29,  114 => 26,  107 => 25,  103 => 24,  98 => 21,  91 => 19,  83 => 16,  79 => 15,  74 => 13,  70 => 12,  67 => 11,  62 => 10,  58 => 8,  52 => 7,  43 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends "LamaDelRayPlatformBundle::layout.html.twig" %}*/
/* */
/* {% block title %} */
/*     Accueil - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block platform_body %}*/
/*     <h2>Liste des annonces</h2>*/
/*     <ul>*/
/*         {% for advert in listAdverts %}*/
/*         <li>*/
/*             <a href="{{ path('platform_view',{'id': advert.id}) }}">*/
/*                 {{ advert.title }}*/
/*             </a>*/
/*             par {{ advert.author }},*/
/*             le {{ advert.date|date('d/m/Y') }}*/
/*         </li>*/
/*         {% else %}*/
/*             <li>Pas (encore !) d'annonces</li>*/
/*         {% endfor %}*/
/*     </ul>*/
/* */
/*     <ul class="pagination">*/
/*         {% for p in range(1, nbPages) %}*/
/*         <li {% if p == page %} class="active" {% endif %}>*/
/*             <a href="{{ path('platform_home', {'page': p}) }}"> {{ p }} </a>*/
/*         </li>*/
/*         {% endfor %}*/
/*     </ul>*/
/* */
/* {% endblock %}*/
