<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_28e5ed16536f755af1866d9ed251e05b796eb53257e5e8d6f24f2f642e78e30d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
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
        $__internal_4eb1faca7aee7b91e2d6dab62f76acbfc3bdedf78d498f105e04bc6abf67f350 = $this->env->getExtension("native_profiler");
        $__internal_4eb1faca7aee7b91e2d6dab62f76acbfc3bdedf78d498f105e04bc6abf67f350->enter($__internal_4eb1faca7aee7b91e2d6dab62f76acbfc3bdedf78d498f105e04bc6abf67f350_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4eb1faca7aee7b91e2d6dab62f76acbfc3bdedf78d498f105e04bc6abf67f350->leave($__internal_4eb1faca7aee7b91e2d6dab62f76acbfc3bdedf78d498f105e04bc6abf67f350_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_f78bbb749c0db6a154efe49c4faee8c2ae9de4b5216a638fe1ec9cff02ffc9ee = $this->env->getExtension("native_profiler");
        $__internal_f78bbb749c0db6a154efe49c4faee8c2ae9de4b5216a638fe1ec9cff02ffc9ee->enter($__internal_f78bbb749c0db6a154efe49c4faee8c2ae9de4b5216a638fe1ec9cff02ffc9ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_f78bbb749c0db6a154efe49c4faee8c2ae9de4b5216a638fe1ec9cff02ffc9ee->leave($__internal_f78bbb749c0db6a154efe49c4faee8c2ae9de4b5216a638fe1ec9cff02ffc9ee_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_d983abcb3e4bb1a7e30e8661f218f97b4e2d9105ad3ddd8d8a959ec1a34d7d6a = $this->env->getExtension("native_profiler");
        $__internal_d983abcb3e4bb1a7e30e8661f218f97b4e2d9105ad3ddd8d8a959ec1a34d7d6a->enter($__internal_d983abcb3e4bb1a7e30e8661f218f97b4e2d9105ad3ddd8d8a959ec1a34d7d6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_d983abcb3e4bb1a7e30e8661f218f97b4e2d9105ad3ddd8d8a959ec1a34d7d6a->leave($__internal_d983abcb3e4bb1a7e30e8661f218f97b4e2d9105ad3ddd8d8a959ec1a34d7d6a_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_c7895b67c924d888f47a27b27f112bd95ede9ea7c8a3e6b93678b48b51257e09 = $this->env->getExtension("native_profiler");
        $__internal_c7895b67c924d888f47a27b27f112bd95ede9ea7c8a3e6b93678b48b51257e09->enter($__internal_c7895b67c924d888f47a27b27f112bd95ede9ea7c8a3e6b93678b48b51257e09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_c7895b67c924d888f47a27b27f112bd95ede9ea7c8a3e6b93678b48b51257e09->leave($__internal_c7895b67c924d888f47a27b27f112bd95ede9ea7c8a3e6b93678b48b51257e09_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
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
