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
        $__internal_25d641d311a06ccf5705f13da8dab7f6d19ce607aabc140cb69a8883be9c9ab6 = $this->env->getExtension("native_profiler");
        $__internal_25d641d311a06ccf5705f13da8dab7f6d19ce607aabc140cb69a8883be9c9ab6->enter($__internal_25d641d311a06ccf5705f13da8dab7f6d19ce607aabc140cb69a8883be9c9ab6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_25d641d311a06ccf5705f13da8dab7f6d19ce607aabc140cb69a8883be9c9ab6->leave($__internal_25d641d311a06ccf5705f13da8dab7f6d19ce607aabc140cb69a8883be9c9ab6_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_ec15d42ca9a8c4635c777155f64f2f7a4a4277a928b834ab286224dd292995c7 = $this->env->getExtension("native_profiler");
        $__internal_ec15d42ca9a8c4635c777155f64f2f7a4a4277a928b834ab286224dd292995c7->enter($__internal_ec15d42ca9a8c4635c777155f64f2f7a4a4277a928b834ab286224dd292995c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_ec15d42ca9a8c4635c777155f64f2f7a4a4277a928b834ab286224dd292995c7->leave($__internal_ec15d42ca9a8c4635c777155f64f2f7a4a4277a928b834ab286224dd292995c7_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_accb23acc55652b79a8dd527e1327313d52078875300843ba836890eafd2c1f7 = $this->env->getExtension("native_profiler");
        $__internal_accb23acc55652b79a8dd527e1327313d52078875300843ba836890eafd2c1f7->enter($__internal_accb23acc55652b79a8dd527e1327313d52078875300843ba836890eafd2c1f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_accb23acc55652b79a8dd527e1327313d52078875300843ba836890eafd2c1f7->leave($__internal_accb23acc55652b79a8dd527e1327313d52078875300843ba836890eafd2c1f7_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_4f89683a93a372ef4fd4de91281bc2a2e641daa034efeafdc6d81ebc8c7e3c29 = $this->env->getExtension("native_profiler");
        $__internal_4f89683a93a372ef4fd4de91281bc2a2e641daa034efeafdc6d81ebc8c7e3c29->enter($__internal_4f89683a93a372ef4fd4de91281bc2a2e641daa034efeafdc6d81ebc8c7e3c29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_4f89683a93a372ef4fd4de91281bc2a2e641daa034efeafdc6d81ebc8c7e3c29->leave($__internal_4f89683a93a372ef4fd4de91281bc2a2e641daa034efeafdc6d81ebc8c7e3c29_prof);

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
