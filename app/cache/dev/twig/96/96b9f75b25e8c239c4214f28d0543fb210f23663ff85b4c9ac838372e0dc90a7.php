<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_3ed3459cb63e27de3fd50483f7477d98b394274f63772098884f0d7bf36db678 extends Twig_Template
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
        $__internal_057194c278de1fceeddf4a1ce90e04573eedf2d3a44571434ae44d292512fd2f = $this->env->getExtension("native_profiler");
        $__internal_057194c278de1fceeddf4a1ce90e04573eedf2d3a44571434ae44d292512fd2f->enter($__internal_057194c278de1fceeddf4a1ce90e04573eedf2d3a44571434ae44d292512fd2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_057194c278de1fceeddf4a1ce90e04573eedf2d3a44571434ae44d292512fd2f->leave($__internal_057194c278de1fceeddf4a1ce90e04573eedf2d3a44571434ae44d292512fd2f_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_5c7bf8c0fcf95bf89de263896eaa6cd49d42bb8759e4e5e41637888c6cf1300c = $this->env->getExtension("native_profiler");
        $__internal_5c7bf8c0fcf95bf89de263896eaa6cd49d42bb8759e4e5e41637888c6cf1300c->enter($__internal_5c7bf8c0fcf95bf89de263896eaa6cd49d42bb8759e4e5e41637888c6cf1300c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_5c7bf8c0fcf95bf89de263896eaa6cd49d42bb8759e4e5e41637888c6cf1300c->leave($__internal_5c7bf8c0fcf95bf89de263896eaa6cd49d42bb8759e4e5e41637888c6cf1300c_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_a9b7aadd0c347664b2cae5eee530c2f84880f7495cdf6a96d948b76200fd9847 = $this->env->getExtension("native_profiler");
        $__internal_a9b7aadd0c347664b2cae5eee530c2f84880f7495cdf6a96d948b76200fd9847->enter($__internal_a9b7aadd0c347664b2cae5eee530c2f84880f7495cdf6a96d948b76200fd9847_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_a9b7aadd0c347664b2cae5eee530c2f84880f7495cdf6a96d948b76200fd9847->leave($__internal_a9b7aadd0c347664b2cae5eee530c2f84880f7495cdf6a96d948b76200fd9847_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_cec357e2651394546823b792135d9c1f08ef7ed00836bf4e4f7442794c58c9ee = $this->env->getExtension("native_profiler");
        $__internal_cec357e2651394546823b792135d9c1f08ef7ed00836bf4e4f7442794c58c9ee->enter($__internal_cec357e2651394546823b792135d9c1f08ef7ed00836bf4e4f7442794c58c9ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_cec357e2651394546823b792135d9c1f08ef7ed00836bf4e4f7442794c58c9ee->leave($__internal_cec357e2651394546823b792135d9c1f08ef7ed00836bf4e4f7442794c58c9ee_prof);

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
