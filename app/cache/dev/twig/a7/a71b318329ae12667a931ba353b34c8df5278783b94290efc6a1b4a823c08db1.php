<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_268d304c83a516a0b65061b2b5ed2ea86fa09246f4777a8354067ed3d8bb0d5e extends Twig_Template
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
        $__internal_c00078472b87182becda827dc87f36aaf610f74401f216a9f484dc90f3ad910d = $this->env->getExtension("native_profiler");
        $__internal_c00078472b87182becda827dc87f36aaf610f74401f216a9f484dc90f3ad910d->enter($__internal_c00078472b87182becda827dc87f36aaf610f74401f216a9f484dc90f3ad910d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c00078472b87182becda827dc87f36aaf610f74401f216a9f484dc90f3ad910d->leave($__internal_c00078472b87182becda827dc87f36aaf610f74401f216a9f484dc90f3ad910d_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_45867b2f2a6c872dc3acb0033e832ef082ab7adffcca98a6b94d07851271795a = $this->env->getExtension("native_profiler");
        $__internal_45867b2f2a6c872dc3acb0033e832ef082ab7adffcca98a6b94d07851271795a->enter($__internal_45867b2f2a6c872dc3acb0033e832ef082ab7adffcca98a6b94d07851271795a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_45867b2f2a6c872dc3acb0033e832ef082ab7adffcca98a6b94d07851271795a->leave($__internal_45867b2f2a6c872dc3acb0033e832ef082ab7adffcca98a6b94d07851271795a_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_a480d67c64fcb9cf9d2667bb6ae8eb123ced1215eb64981408c8fb9f67503bbc = $this->env->getExtension("native_profiler");
        $__internal_a480d67c64fcb9cf9d2667bb6ae8eb123ced1215eb64981408c8fb9f67503bbc->enter($__internal_a480d67c64fcb9cf9d2667bb6ae8eb123ced1215eb64981408c8fb9f67503bbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_a480d67c64fcb9cf9d2667bb6ae8eb123ced1215eb64981408c8fb9f67503bbc->leave($__internal_a480d67c64fcb9cf9d2667bb6ae8eb123ced1215eb64981408c8fb9f67503bbc_prof);

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
