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
        $__internal_985e153cf2a28893722719f6e164c7f15728a1430e459e39595f2e8fc828b870 = $this->env->getExtension("native_profiler");
        $__internal_985e153cf2a28893722719f6e164c7f15728a1430e459e39595f2e8fc828b870->enter($__internal_985e153cf2a28893722719f6e164c7f15728a1430e459e39595f2e8fc828b870_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_985e153cf2a28893722719f6e164c7f15728a1430e459e39595f2e8fc828b870->leave($__internal_985e153cf2a28893722719f6e164c7f15728a1430e459e39595f2e8fc828b870_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_2b07100c7a66f3d900fbcd86d878de6dee8c50317af6e1fcd0597f4a1c701edf = $this->env->getExtension("native_profiler");
        $__internal_2b07100c7a66f3d900fbcd86d878de6dee8c50317af6e1fcd0597f4a1c701edf->enter($__internal_2b07100c7a66f3d900fbcd86d878de6dee8c50317af6e1fcd0597f4a1c701edf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_2b07100c7a66f3d900fbcd86d878de6dee8c50317af6e1fcd0597f4a1c701edf->leave($__internal_2b07100c7a66f3d900fbcd86d878de6dee8c50317af6e1fcd0597f4a1c701edf_prof);

    }

    // line 13
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_74dacea29959e4640ecd5a75a068d208d809dd6d6d22660f07b0300cda93abea = $this->env->getExtension("native_profiler");
        $__internal_74dacea29959e4640ecd5a75a068d208d809dd6d6d22660f07b0300cda93abea->enter($__internal_74dacea29959e4640ecd5a75a068d208d809dd6d6d22660f07b0300cda93abea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 14
        echo "\t";
        
        $__internal_74dacea29959e4640ecd5a75a068d208d809dd6d6d22660f07b0300cda93abea->leave($__internal_74dacea29959e4640ecd5a75a068d208d809dd6d6d22660f07b0300cda93abea_prof);

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
