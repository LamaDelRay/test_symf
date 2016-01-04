<?php

/* FOSUserBundle::layout.html.twig */
class __TwigTemplate_31a4fcd9ae09de2852d882b11f002b20bd62632b044900760a6e2c18f83c682c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "FOSUserBundle::layout.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ff51ce42831495f41354946e8bc23fcbbc1db72493f1e46be91bf159fc95bcc4 = $this->env->getExtension("native_profiler");
        $__internal_ff51ce42831495f41354946e8bc23fcbbc1db72493f1e46be91bf159fc95bcc4->enter($__internal_ff51ce42831495f41354946e8bc23fcbbc1db72493f1e46be91bf159fc95bcc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ff51ce42831495f41354946e8bc23fcbbc1db72493f1e46be91bf159fc95bcc4->leave($__internal_ff51ce42831495f41354946e8bc23fcbbc1db72493f1e46be91bf159fc95bcc4_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_9d8871bb4c5954ee1032aff769037e67edd96685069012126cc297ce59bf8dd9 = $this->env->getExtension("native_profiler");
        $__internal_9d8871bb4c5954ee1032aff769037e67edd96685069012126cc297ce59bf8dd9->enter($__internal_9d8871bb4c5954ee1032aff769037e67edd96685069012126cc297ce59bf8dd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
\t";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "all", array(), "method"));
        foreach ($context['_seq'] as $context["key"] => $context["message"]) {
            // line 6
            echo "\t\t<div class=\"alert alert-";
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo "\">
\t\t\t";
            // line 7
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($context["message"], array(), "FPSIserBundle"), "html", null, true);
            echo "
\t\t</div>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo "
\t";
        // line 11
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 13
        echo "
";
        
        $__internal_9d8871bb4c5954ee1032aff769037e67edd96685069012126cc297ce59bf8dd9->leave($__internal_9d8871bb4c5954ee1032aff769037e67edd96685069012126cc297ce59bf8dd9_prof);

    }

    // line 11
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_213e473a08f88da5fdbf240d1e6965fa78c7f5c6a9c6f904edfbb2bd41fe6acb = $this->env->getExtension("native_profiler");
        $__internal_213e473a08f88da5fdbf240d1e6965fa78c7f5c6a9c6f904edfbb2bd41fe6acb->enter($__internal_213e473a08f88da5fdbf240d1e6965fa78c7f5c6a9c6f904edfbb2bd41fe6acb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 12
        echo "\t";
        
        $__internal_213e473a08f88da5fdbf240d1e6965fa78c7f5c6a9c6f904edfbb2bd41fe6acb->leave($__internal_213e473a08f88da5fdbf240d1e6965fa78c7f5c6a9c6f904edfbb2bd41fe6acb_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 12,  75 => 11,  67 => 13,  65 => 11,  62 => 10,  53 => 7,  48 => 6,  44 => 5,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends "::layout.html.twig" %}*/
/* */
/* {% block body %}*/
/* */
/* 	{% for key, message in app.session.flashbag.all() %}*/
/* 		<div class="alert alert-{{ key }}">*/
/* 			{{ message|trans({}, 'FPSIserBundle') }}*/
/* 		</div>*/
/* 	{% endfor %}*/
/* */
/* 	{% block fos_user_content %}*/
/* 	{% endblock fos_user_content %}*/
/* */
/* {% endblock %}*/
