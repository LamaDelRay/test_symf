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
        $__internal_c82489237f01ef4311df955706ce5913514f00e00ebe22948a9ed34f60551b3f = $this->env->getExtension("native_profiler");
        $__internal_c82489237f01ef4311df955706ce5913514f00e00ebe22948a9ed34f60551b3f->enter($__internal_c82489237f01ef4311df955706ce5913514f00e00ebe22948a9ed34f60551b3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LamaDelRayPlatformBundle:Advert:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c82489237f01ef4311df955706ce5913514f00e00ebe22948a9ed34f60551b3f->leave($__internal_c82489237f01ef4311df955706ce5913514f00e00ebe22948a9ed34f60551b3f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_432fe3de6e6ad305e5deb8d7bb7e1241c6ab7e729849b3b23e9edc752ec1b8a5 = $this->env->getExtension("native_profiler");
        $__internal_432fe3de6e6ad305e5deb8d7bb7e1241c6ab7e729849b3b23e9edc752ec1b8a5->enter($__internal_432fe3de6e6ad305e5deb8d7bb7e1241c6ab7e729849b3b23e9edc752ec1b8a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " 
    Accueil - ";
        // line 4
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_432fe3de6e6ad305e5deb8d7bb7e1241c6ab7e729849b3b23e9edc752ec1b8a5->leave($__internal_432fe3de6e6ad305e5deb8d7bb7e1241c6ab7e729849b3b23e9edc752ec1b8a5_prof);

    }

    // line 7
    public function block_platform_body($context, array $blocks = array())
    {
        $__internal_7b125a382c9a8fc0a30c99197a83ea7bba3253d737629ecb6d7a235a454de86b = $this->env->getExtension("native_profiler");
        $__internal_7b125a382c9a8fc0a30c99197a83ea7bba3253d737629ecb6d7a235a454de86b->enter($__internal_7b125a382c9a8fc0a30c99197a83ea7bba3253d737629ecb6d7a235a454de86b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "platform_body"));

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
";
        
        $__internal_7b125a382c9a8fc0a30c99197a83ea7bba3253d737629ecb6d7a235a454de86b->leave($__internal_7b125a382c9a8fc0a30c99197a83ea7bba3253d737629ecb6d7a235a454de86b_prof);

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
        return array (  98 => 21,  91 => 19,  83 => 16,  79 => 15,  74 => 13,  70 => 12,  67 => 11,  62 => 10,  58 => 8,  52 => 7,  43 => 4,  35 => 3,  11 => 1,);
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
/* {% endblock %}*/
