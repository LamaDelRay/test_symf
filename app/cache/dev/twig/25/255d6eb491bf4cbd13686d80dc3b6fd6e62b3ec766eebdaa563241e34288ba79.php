<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_071ae94058d8d78fce0ddfad5a1d801890696d73cc0417e8fc7e57cecc88e41f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8dfcc9a170402ea185498cb23a5d6ec8b72f722b57fccbd248830a035631998b = $this->env->getExtension("native_profiler");
        $__internal_8dfcc9a170402ea185498cb23a5d6ec8b72f722b57fccbd248830a035631998b->enter($__internal_8dfcc9a170402ea185498cb23a5d6ec8b72f722b57fccbd248830a035631998b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8dfcc9a170402ea185498cb23a5d6ec8b72f722b57fccbd248830a035631998b->leave($__internal_8dfcc9a170402ea185498cb23a5d6ec8b72f722b57fccbd248830a035631998b_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_c113ce5dbb54269f8512b59936ac0af7d3cffdde38b93a4db6386612741774fb = $this->env->getExtension("native_profiler");
        $__internal_c113ce5dbb54269f8512b59936ac0af7d3cffdde38b93a4db6386612741774fb->enter($__internal_c113ce5dbb54269f8512b59936ac0af7d3cffdde38b93a4db6386612741774fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_c113ce5dbb54269f8512b59936ac0af7d3cffdde38b93a4db6386612741774fb->leave($__internal_c113ce5dbb54269f8512b59936ac0af7d3cffdde38b93a4db6386612741774fb_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_0db1e67f92635f652ba970b6b12620aff6143f82f487f54ef71df785842db4f2 = $this->env->getExtension("native_profiler");
        $__internal_0db1e67f92635f652ba970b6b12620aff6143f82f487f54ef71df785842db4f2->enter($__internal_0db1e67f92635f652ba970b6b12620aff6143f82f487f54ef71df785842db4f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_0db1e67f92635f652ba970b6b12620aff6143f82f487f54ef71df785842db4f2->leave($__internal_0db1e67f92635f652ba970b6b12620aff6143f82f487f54ef71df785842db4f2_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block title 'Redirection Intercepted' %}*/
/* */
/* {% block body %}*/
/*     <div class="sf-reset">*/
/*         <div class="block-exception">*/
/*             <h1>This request redirects to <a href="{{ location }}">{{ location }}</a>.</h1>*/
/* */
/*             <p>*/
/*                 <small>*/
/*                     The redirect was intercepted by the web debug toolbar to help debugging.*/
/*                     For more information, see the "intercept-redirects" option of the Profiler.*/
/*                 </small>*/
/*             </p>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
