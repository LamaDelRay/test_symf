<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_c0e04a3158ecc82619c5651763cde6b862bb9968a67db984cc89abed1cb10706 extends Twig_Template
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
        $__internal_5e1e25b347bdd8c9bb026f2a3cc592b510d1e381a4fe8dbcba2f0604b8ef9ef2 = $this->env->getExtension("native_profiler");
        $__internal_5e1e25b347bdd8c9bb026f2a3cc592b510d1e381a4fe8dbcba2f0604b8ef9ef2->enter($__internal_5e1e25b347bdd8c9bb026f2a3cc592b510d1e381a4fe8dbcba2f0604b8ef9ef2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5e1e25b347bdd8c9bb026f2a3cc592b510d1e381a4fe8dbcba2f0604b8ef9ef2->leave($__internal_5e1e25b347bdd8c9bb026f2a3cc592b510d1e381a4fe8dbcba2f0604b8ef9ef2_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_5d7a2d36983df3676148da612451d9c4051a1bf1b37f3bb4a7790ed523ebe68a = $this->env->getExtension("native_profiler");
        $__internal_5d7a2d36983df3676148da612451d9c4051a1bf1b37f3bb4a7790ed523ebe68a->enter($__internal_5d7a2d36983df3676148da612451d9c4051a1bf1b37f3bb4a7790ed523ebe68a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_5d7a2d36983df3676148da612451d9c4051a1bf1b37f3bb4a7790ed523ebe68a->leave($__internal_5d7a2d36983df3676148da612451d9c4051a1bf1b37f3bb4a7790ed523ebe68a_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_f183c8fa493e34897f332a09e56a5095bd5794ab2e6202f7b69f4d5de99b6592 = $this->env->getExtension("native_profiler");
        $__internal_f183c8fa493e34897f332a09e56a5095bd5794ab2e6202f7b69f4d5de99b6592->enter($__internal_f183c8fa493e34897f332a09e56a5095bd5794ab2e6202f7b69f4d5de99b6592_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_f183c8fa493e34897f332a09e56a5095bd5794ab2e6202f7b69f4d5de99b6592->leave($__internal_f183c8fa493e34897f332a09e56a5095bd5794ab2e6202f7b69f4d5de99b6592_prof);

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
