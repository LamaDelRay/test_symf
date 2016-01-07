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
        $__internal_5d6268d4506bc9a72071348a9452208fde930764322d09e2fd447967f6892547 = $this->env->getExtension("native_profiler");
        $__internal_5d6268d4506bc9a72071348a9452208fde930764322d09e2fd447967f6892547->enter($__internal_5d6268d4506bc9a72071348a9452208fde930764322d09e2fd447967f6892547_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5d6268d4506bc9a72071348a9452208fde930764322d09e2fd447967f6892547->leave($__internal_5d6268d4506bc9a72071348a9452208fde930764322d09e2fd447967f6892547_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_614662f1266ef8611eb885dec568a5a1da4d617a648f5b8723b43e19c57e6e89 = $this->env->getExtension("native_profiler");
        $__internal_614662f1266ef8611eb885dec568a5a1da4d617a648f5b8723b43e19c57e6e89->enter($__internal_614662f1266ef8611eb885dec568a5a1da4d617a648f5b8723b43e19c57e6e89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_614662f1266ef8611eb885dec568a5a1da4d617a648f5b8723b43e19c57e6e89->leave($__internal_614662f1266ef8611eb885dec568a5a1da4d617a648f5b8723b43e19c57e6e89_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_f1e3b427444c4c9674d6391f4e56264922d4e76d16a452b230bd52b6f9e6e22b = $this->env->getExtension("native_profiler");
        $__internal_f1e3b427444c4c9674d6391f4e56264922d4e76d16a452b230bd52b6f9e6e22b->enter($__internal_f1e3b427444c4c9674d6391f4e56264922d4e76d16a452b230bd52b6f9e6e22b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_f1e3b427444c4c9674d6391f4e56264922d4e76d16a452b230bd52b6f9e6e22b->leave($__internal_f1e3b427444c4c9674d6391f4e56264922d4e76d16a452b230bd52b6f9e6e22b_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_0e4c22e82730135d3acb1e1eb9afa4f91149fba4ada3deb13cec001f6418afe6 = $this->env->getExtension("native_profiler");
        $__internal_0e4c22e82730135d3acb1e1eb9afa4f91149fba4ada3deb13cec001f6418afe6->enter($__internal_0e4c22e82730135d3acb1e1eb9afa4f91149fba4ada3deb13cec001f6418afe6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_0e4c22e82730135d3acb1e1eb9afa4f91149fba4ada3deb13cec001f6418afe6->leave($__internal_0e4c22e82730135d3acb1e1eb9afa4f91149fba4ada3deb13cec001f6418afe6_prof);

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
