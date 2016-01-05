<?php

/* LamaDelRayPlatformBundle:Advert:index.html.twig */
class __TwigTemplate_bc247358e5971fd954eb6524b88038b94dd4ee34d2aebb840e7c7892dd42db77 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LamaDelRayPlatformBundle::layout2.html.twig", "LamaDelRayPlatformBundle:Advert:index.html.twig", 1);
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
        $__internal_82366c68b66d5a2b3b0a16b3c7144c92111161f85e0d3ef98c95331e63e17cf1 = $this->env->getExtension("native_profiler");
        $__internal_82366c68b66d5a2b3b0a16b3c7144c92111161f85e0d3ef98c95331e63e17cf1->enter($__internal_82366c68b66d5a2b3b0a16b3c7144c92111161f85e0d3ef98c95331e63e17cf1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LamaDelRayPlatformBundle:Advert:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_82366c68b66d5a2b3b0a16b3c7144c92111161f85e0d3ef98c95331e63e17cf1->leave($__internal_82366c68b66d5a2b3b0a16b3c7144c92111161f85e0d3ef98c95331e63e17cf1_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_63e5880db2280a2a152c104844c328e0825aeb524b189cb589cd9eff5a5a8701 = $this->env->getExtension("native_profiler");
        $__internal_63e5880db2280a2a152c104844c328e0825aeb524b189cb589cd9eff5a5a8701->enter($__internal_63e5880db2280a2a152c104844c328e0825aeb524b189cb589cd9eff5a5a8701_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " 
    Accueil - ";
        // line 4
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_63e5880db2280a2a152c104844c328e0825aeb524b189cb589cd9eff5a5a8701->leave($__internal_63e5880db2280a2a152c104844c328e0825aeb524b189cb589cd9eff5a5a8701_prof);

    }

    // line 7
    public function block_platform_body($context, array $blocks = array())
    {
        $__internal_371e204c61a4fad802e8749d406d6c1134b7f1d5629d8f783e32f44e0624ff7e = $this->env->getExtension("native_profiler");
        $__internal_371e204c61a4fad802e8749d406d6c1134b7f1d5629d8f783e32f44e0624ff7e->enter($__internal_371e204c61a4fad802e8749d406d6c1134b7f1d5629d8f783e32f44e0624ff7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "platform_body"));

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
        
        $__internal_371e204c61a4fad802e8749d406d6c1134b7f1d5629d8f783e32f44e0624ff7e->leave($__internal_371e204c61a4fad802e8749d406d6c1134b7f1d5629d8f783e32f44e0624ff7e_prof);

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
/* {% extends "LamaDelRayPlatformBundle::layout2.html.twig" %}*/
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