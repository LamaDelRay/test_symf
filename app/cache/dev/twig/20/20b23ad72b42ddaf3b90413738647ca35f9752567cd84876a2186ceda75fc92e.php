<?php

/* SonataAdminBundle:Block:block_rss_dashboard.html.twig */
class __TwigTemplate_3bb4200ed8761eb4f3186a42da6f3e4bbd0c8f855c8053a713345671af63a887 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataBlockBundle:Block:block_core_rss.html.twig", "SonataAdminBundle:Block:block_rss_dashboard.html.twig", 12);
        $this->blocks = array(
            'block' => array($this, 'block_block'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataBlockBundle:Block:block_core_rss.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_617238bd31e95ed713641e35c62ca6ae1f7f105952affcfbb76fd9a08e1dc67e = $this->env->getExtension("native_profiler");
        $__internal_617238bd31e95ed713641e35c62ca6ae1f7f105952affcfbb76fd9a08e1dc67e->enter($__internal_617238bd31e95ed713641e35c62ca6ae1f7f105952affcfbb76fd9a08e1dc67e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Block:block_rss_dashboard.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_617238bd31e95ed713641e35c62ca6ae1f7f105952affcfbb76fd9a08e1dc67e->leave($__internal_617238bd31e95ed713641e35c62ca6ae1f7f105952affcfbb76fd9a08e1dc67e_prof);

    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        $__internal_142f76e5285f223896bde5debc136e0847374b7b0bac6a51166f5cbb0e4e4c9b = $this->env->getExtension("native_profiler");
        $__internal_142f76e5285f223896bde5debc136e0847374b7b0bac6a51166f5cbb0e4e4c9b->enter($__internal_142f76e5285f223896bde5debc136e0847374b7b0bac6a51166f5cbb0e4e4c9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 15
        echo "    <div class=\"box box-varning\">
        <div class=\"box-header\">
            <h3 class=\"box-title sonata-feed-title\"><i class=\"fa fa-rss\"></i> ";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "title", array()), "html", null, true);
        echo "</h3>
        </div>

        <div class=\"sonata-feeds-container list-group\">
            ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["feeds"]) ? $context["feeds"] : $this->getContext($context, "feeds")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["feed"]) {
            // line 22
            echo "                <a class=\"list-group-item\" href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["feed"], "link", array()), "html", null, true);
            echo "\" rel=\"nofollow\" title=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["feed"], "title", array()), "html", null, true);
            echo "\">
                    <strong>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["feed"], "title", array()), "html", null, true);
            echo "</strong>
                    <div>";
            // line 24
            echo $this->getAttribute($context["feed"], "description", array());
            echo "</div>
                </a>
            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 27
            echo "                <div class=\"list-group-item\">No feeds available.</div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['feed'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "        </div>
    </div>
";
        
        $__internal_142f76e5285f223896bde5debc136e0847374b7b0bac6a51166f5cbb0e4e4c9b->leave($__internal_142f76e5285f223896bde5debc136e0847374b7b0bac6a51166f5cbb0e4e4c9b_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Block:block_rss_dashboard.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 29,  75 => 27,  67 => 24,  63 => 23,  56 => 22,  51 => 21,  44 => 17,  40 => 15,  34 => 14,  11 => 12,);
    }
}
/* {#*/
/* */
/* This file is part of the Sonata package.*/
/* */
/* (c) Thomas Rabaix <thomas.rabaix@sonata-project.org>*/
/* */
/* For the full copyright and license information, please view the LICENSE*/
/* file that was distributed with this source code.*/
/* */
/* #}*/
/* */
/* {% extends "SonataBlockBundle:Block:block_core_rss.html.twig" %}*/
/* */
/* {% block block %}*/
/*     <div class="box box-varning">*/
/*         <div class="box-header">*/
/*             <h3 class="box-title sonata-feed-title"><i class="fa fa-rss"></i> {{ settings.title }}</h3>*/
/*         </div>*/
/* */
/*         <div class="sonata-feeds-container list-group">*/
/*             {% for feed in feeds %}*/
/*                 <a class="list-group-item" href="{{ feed.link}}" rel="nofollow" title="{{ feed.title }}">*/
/*                     <strong>{{ feed.title }}</strong>*/
/*                     <div>{{ feed.description|raw }}</div>*/
/*                 </a>*/
/*             {% else %}*/
/*                 <div class="list-group-item">No feeds available.</div>*/
/*             {% endfor %}*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
