<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_c0e04a3158ecc82619c5651763cde6b862bb9968a67db984cc89abed1cb10706 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
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
        $__internal_439fae689489d781217dc3fe81b189d6bb42681ba7d90116e2bd467e4af001c1 = $this->env->getExtension("native_profiler");
        $__internal_439fae689489d781217dc3fe81b189d6bb42681ba7d90116e2bd467e4af001c1->enter($__internal_439fae689489d781217dc3fe81b189d6bb42681ba7d90116e2bd467e4af001c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_439fae689489d781217dc3fe81b189d6bb42681ba7d90116e2bd467e4af001c1->leave($__internal_439fae689489d781217dc3fe81b189d6bb42681ba7d90116e2bd467e4af001c1_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_c3c988acf195065b485d426c57bee33a990313547bc5f2883f7cd64e796e4139 = $this->env->getExtension("native_profiler");
        $__internal_c3c988acf195065b485d426c57bee33a990313547bc5f2883f7cd64e796e4139->enter($__internal_c3c988acf195065b485d426c57bee33a990313547bc5f2883f7cd64e796e4139_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_c3c988acf195065b485d426c57bee33a990313547bc5f2883f7cd64e796e4139->leave($__internal_c3c988acf195065b485d426c57bee33a990313547bc5f2883f7cd64e796e4139_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_7338102a20547b975b8d06bcce79e2fdc1b611df42ebd563c747024fd1d0a1d4 = $this->env->getExtension("native_profiler");
        $__internal_7338102a20547b975b8d06bcce79e2fdc1b611df42ebd563c747024fd1d0a1d4->enter($__internal_7338102a20547b975b8d06bcce79e2fdc1b611df42ebd563c747024fd1d0a1d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_7338102a20547b975b8d06bcce79e2fdc1b611df42ebd563c747024fd1d0a1d4->leave($__internal_7338102a20547b975b8d06bcce79e2fdc1b611df42ebd563c747024fd1d0a1d4_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
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
