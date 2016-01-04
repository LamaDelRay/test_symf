<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_a95433de23c96a2ea55ea0d2fdeb1c3fa1bf359fa67b85dc15e3d71c3525d474 extends Twig_Template
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
        $__internal_f7634307bd0ea8b2155c9c1c47316fd700a7e6c6504b14f2402092becce557a0 = $this->env->getExtension("native_profiler");
        $__internal_f7634307bd0ea8b2155c9c1c47316fd700a7e6c6504b14f2402092becce557a0->enter($__internal_f7634307bd0ea8b2155c9c1c47316fd700a7e6c6504b14f2402092becce557a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f7634307bd0ea8b2155c9c1c47316fd700a7e6c6504b14f2402092becce557a0->leave($__internal_f7634307bd0ea8b2155c9c1c47316fd700a7e6c6504b14f2402092becce557a0_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_b5b691a2132c52e7a5b7f74fcd57cc61372f3ae2cbc18e41f25ce8db56ba125e = $this->env->getExtension("native_profiler");
        $__internal_b5b691a2132c52e7a5b7f74fcd57cc61372f3ae2cbc18e41f25ce8db56ba125e->enter($__internal_b5b691a2132c52e7a5b7f74fcd57cc61372f3ae2cbc18e41f25ce8db56ba125e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_b5b691a2132c52e7a5b7f74fcd57cc61372f3ae2cbc18e41f25ce8db56ba125e->leave($__internal_b5b691a2132c52e7a5b7f74fcd57cc61372f3ae2cbc18e41f25ce8db56ba125e_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_751b5ac5660f4019f9bbda6a11b4984d8eadeaa3f982056a6a8b5dd70cbd35ab = $this->env->getExtension("native_profiler");
        $__internal_751b5ac5660f4019f9bbda6a11b4984d8eadeaa3f982056a6a8b5dd70cbd35ab->enter($__internal_751b5ac5660f4019f9bbda6a11b4984d8eadeaa3f982056a6a8b5dd70cbd35ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_751b5ac5660f4019f9bbda6a11b4984d8eadeaa3f982056a6a8b5dd70cbd35ab->leave($__internal_751b5ac5660f4019f9bbda6a11b4984d8eadeaa3f982056a6a8b5dd70cbd35ab_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_0b08b632c02e86212d30187f9ef84679db12560bb9b22636d395e851d4bd7f5c = $this->env->getExtension("native_profiler");
        $__internal_0b08b632c02e86212d30187f9ef84679db12560bb9b22636d395e851d4bd7f5c->enter($__internal_0b08b632c02e86212d30187f9ef84679db12560bb9b22636d395e851d4bd7f5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_0b08b632c02e86212d30187f9ef84679db12560bb9b22636d395e851d4bd7f5c->leave($__internal_0b08b632c02e86212d30187f9ef84679db12560bb9b22636d395e851d4bd7f5c_prof);

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
