<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_268d304c83a516a0b65061b2b5ed2ea86fa09246f4777a8354067ed3d8bb0d5e extends Twig_Template
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
        $__internal_dd64312bb3921a5c6db26a020251a0db982d00842a9f78ff32e4269bafecc652 = $this->env->getExtension("native_profiler");
        $__internal_dd64312bb3921a5c6db26a020251a0db982d00842a9f78ff32e4269bafecc652->enter($__internal_dd64312bb3921a5c6db26a020251a0db982d00842a9f78ff32e4269bafecc652_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dd64312bb3921a5c6db26a020251a0db982d00842a9f78ff32e4269bafecc652->leave($__internal_dd64312bb3921a5c6db26a020251a0db982d00842a9f78ff32e4269bafecc652_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_055f80b537dc71f50b51f7e42e483b31ec4a80aaffafb2ec37ea156ba24058bd = $this->env->getExtension("native_profiler");
        $__internal_055f80b537dc71f50b51f7e42e483b31ec4a80aaffafb2ec37ea156ba24058bd->enter($__internal_055f80b537dc71f50b51f7e42e483b31ec4a80aaffafb2ec37ea156ba24058bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_055f80b537dc71f50b51f7e42e483b31ec4a80aaffafb2ec37ea156ba24058bd->leave($__internal_055f80b537dc71f50b51f7e42e483b31ec4a80aaffafb2ec37ea156ba24058bd_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_8dece5a7542b61817413c190fc52c080451c61780bb801efb957f9232cdba78c = $this->env->getExtension("native_profiler");
        $__internal_8dece5a7542b61817413c190fc52c080451c61780bb801efb957f9232cdba78c->enter($__internal_8dece5a7542b61817413c190fc52c080451c61780bb801efb957f9232cdba78c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_8dece5a7542b61817413c190fc52c080451c61780bb801efb957f9232cdba78c->leave($__internal_8dece5a7542b61817413c190fc52c080451c61780bb801efb957f9232cdba78c_prof);

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
