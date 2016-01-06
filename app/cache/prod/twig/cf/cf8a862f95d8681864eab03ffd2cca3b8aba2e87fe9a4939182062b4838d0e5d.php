<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_f68de1e19e9317633f8edb56e0d9b7563fb5ffb8dc7f44102262bb67aba366a3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_e80ba20f97025537f5b695ac49112fe422ab4480eaa38ae0a32e53ad0e6da230 = $this->env->getExtension("native_profiler");
        $__internal_e80ba20f97025537f5b695ac49112fe422ab4480eaa38ae0a32e53ad0e6da230->enter($__internal_e80ba20f97025537f5b695ac49112fe422ab4480eaa38ae0a32e53ad0e6da230_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e80ba20f97025537f5b695ac49112fe422ab4480eaa38ae0a32e53ad0e6da230->leave($__internal_e80ba20f97025537f5b695ac49112fe422ab4480eaa38ae0a32e53ad0e6da230_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_085ed9ee5c18a7b17a98a378252ff135951c5cb54e9e68228a2a3f78491d46b9 = $this->env->getExtension("native_profiler");
        $__internal_085ed9ee5c18a7b17a98a378252ff135951c5cb54e9e68228a2a3f78491d46b9->enter($__internal_085ed9ee5c18a7b17a98a378252ff135951c5cb54e9e68228a2a3f78491d46b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_085ed9ee5c18a7b17a98a378252ff135951c5cb54e9e68228a2a3f78491d46b9->leave($__internal_085ed9ee5c18a7b17a98a378252ff135951c5cb54e9e68228a2a3f78491d46b9_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_81031451f4e7f9057a69fe0b40cb0ff327f5c82e1976ddfd84a262f53a742942 = $this->env->getExtension("native_profiler");
        $__internal_81031451f4e7f9057a69fe0b40cb0ff327f5c82e1976ddfd84a262f53a742942->enter($__internal_81031451f4e7f9057a69fe0b40cb0ff327f5c82e1976ddfd84a262f53a742942_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_81031451f4e7f9057a69fe0b40cb0ff327f5c82e1976ddfd84a262f53a742942->leave($__internal_81031451f4e7f9057a69fe0b40cb0ff327f5c82e1976ddfd84a262f53a742942_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_c9174e4ff388dbb83dfeb719275562daa0a888044567864851767f7ffec7ca0e = $this->env->getExtension("native_profiler");
        $__internal_c9174e4ff388dbb83dfeb719275562daa0a888044567864851767f7ffec7ca0e->enter($__internal_c9174e4ff388dbb83dfeb719275562daa0a888044567864851767f7ffec7ca0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_c9174e4ff388dbb83dfeb719275562daa0a888044567864851767f7ffec7ca0e->leave($__internal_c9174e4ff388dbb83dfeb719275562daa0a888044567864851767f7ffec7ca0e_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
