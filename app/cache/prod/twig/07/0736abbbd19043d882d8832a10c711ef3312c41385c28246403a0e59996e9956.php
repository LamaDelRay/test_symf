<?php

/* FOSUserBundle::layout.html.twig */
class __TwigTemplate_f4afdda9aa850a22e042d286aa33b3bdc15040c3bbcddcdb4b6bbd980d188cf0 extends Twig_Template
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
        $__internal_9589f88102d63f6ccd0ba32282fbd8b9092311acbdc8ee5c0058de06a70d8bfb = $this->env->getExtension("native_profiler");
        $__internal_9589f88102d63f6ccd0ba32282fbd8b9092311acbdc8ee5c0058de06a70d8bfb->enter($__internal_9589f88102d63f6ccd0ba32282fbd8b9092311acbdc8ee5c0058de06a70d8bfb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9589f88102d63f6ccd0ba32282fbd8b9092311acbdc8ee5c0058de06a70d8bfb->leave($__internal_9589f88102d63f6ccd0ba32282fbd8b9092311acbdc8ee5c0058de06a70d8bfb_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_9f10bc9cc8b353a7252760f3eacf216510980a4af407dff92721e26fc06f4aa1 = $this->env->getExtension("native_profiler");
        $__internal_9f10bc9cc8b353a7252760f3eacf216510980a4af407dff92721e26fc06f4aa1->enter($__internal_9f10bc9cc8b353a7252760f3eacf216510980a4af407dff92721e26fc06f4aa1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
\t";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "all", array(), "method"));
        foreach ($context['_seq'] as $context["key"] => $context["message"]) {
            // line 6
            echo "\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")));
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 7
                echo "\t\t\t<div class=\"alert alert-";
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo "\">
\t\t\t\t";
                // line 8
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($context["message"], array(), "FPSIserBundle"), "html", null, true);
                echo "
\t\t\t</div>
\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 11
            echo "\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "
\t";
        // line 13
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 15
        echo "
";
        
        $__internal_9f10bc9cc8b353a7252760f3eacf216510980a4af407dff92721e26fc06f4aa1->leave($__internal_9f10bc9cc8b353a7252760f3eacf216510980a4af407dff92721e26fc06f4aa1_prof);

    }

    // line 13
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_485526b458807cdf59f33c1cc26d80e970c6ee24c80ea330ec814b97d20058ab = $this->env->getExtension("native_profiler");
        $__internal_485526b458807cdf59f33c1cc26d80e970c6ee24c80ea330ec814b97d20058ab->enter($__internal_485526b458807cdf59f33c1cc26d80e970c6ee24c80ea330ec814b97d20058ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 14
        echo "\t";
        
        $__internal_485526b458807cdf59f33c1cc26d80e970c6ee24c80ea330ec814b97d20058ab->leave($__internal_485526b458807cdf59f33c1cc26d80e970c6ee24c80ea330ec814b97d20058ab_prof);

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
        return array (  92 => 14,  86 => 13,  78 => 15,  76 => 13,  73 => 12,  67 => 11,  58 => 8,  53 => 7,  48 => 6,  44 => 5,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends "::layout.html.twig" %}*/
/* */
/* {% block body %}*/
/* */
/* 	{% for key, message in app.session.flashbag.all() %}*/
/* 		{% for message in messages %}*/
/* 			<div class="alert alert-{{ key }}">*/
/* 				{{ message|trans({}, 'FPSIserBundle') }}*/
/* 			</div>*/
/* 		{% endfor %}*/
/* 	{% endfor %}*/
/* */
/* 	{% block fos_user_content %}*/
/* 	{% endblock fos_user_content %}*/
/* */
/* {% endblock %}*/
