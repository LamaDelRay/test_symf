<?php

/* FOSUserBundle::layout.html.twig */
class __TwigTemplate_c8b6b0827edbec3d5f3c7d29b96a5b13e6ac9c293c35436280186850ef036cf4 extends Twig_Template
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
        $__internal_2fe133cbd0814d6e17bbdf07ccde76dbbb9224654c510e2580d88b2e91f3f7f9 = $this->env->getExtension("native_profiler");
        $__internal_2fe133cbd0814d6e17bbdf07ccde76dbbb9224654c510e2580d88b2e91f3f7f9->enter($__internal_2fe133cbd0814d6e17bbdf07ccde76dbbb9224654c510e2580d88b2e91f3f7f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2fe133cbd0814d6e17bbdf07ccde76dbbb9224654c510e2580d88b2e91f3f7f9->leave($__internal_2fe133cbd0814d6e17bbdf07ccde76dbbb9224654c510e2580d88b2e91f3f7f9_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_ee62cd737bb149fb33caccc800e56bc8d3952abd01af58c7f913cda5edddd7f4 = $this->env->getExtension("native_profiler");
        $__internal_ee62cd737bb149fb33caccc800e56bc8d3952abd01af58c7f913cda5edddd7f4->enter($__internal_ee62cd737bb149fb33caccc800e56bc8d3952abd01af58c7f913cda5edddd7f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_ee62cd737bb149fb33caccc800e56bc8d3952abd01af58c7f913cda5edddd7f4->leave($__internal_ee62cd737bb149fb33caccc800e56bc8d3952abd01af58c7f913cda5edddd7f4_prof);

    }

    // line 11
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_5cb7c51f874fcac7a864b1ce1398f19d0c8c3fc11eeef0d2490345f523399e0c = $this->env->getExtension("native_profiler");
        $__internal_5cb7c51f874fcac7a864b1ce1398f19d0c8c3fc11eeef0d2490345f523399e0c->enter($__internal_5cb7c51f874fcac7a864b1ce1398f19d0c8c3fc11eeef0d2490345f523399e0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 12
        echo "\t";
        
        $__internal_5cb7c51f874fcac7a864b1ce1398f19d0c8c3fc11eeef0d2490345f523399e0c->leave($__internal_5cb7c51f874fcac7a864b1ce1398f19d0c8c3fc11eeef0d2490345f523399e0c_prof);

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
