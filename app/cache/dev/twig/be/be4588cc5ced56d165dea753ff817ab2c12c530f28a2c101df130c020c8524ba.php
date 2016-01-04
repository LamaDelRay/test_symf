<?php

/* FOSUserBundle:Registration:confirmed.html.twig */
class __TwigTemplate_1221cc22457b22150c30d84a473ce0c32b1eae3ec0f4a76316890e10d8b7642e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:confirmed.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c6c5bfae5907a126c11e8c482cbb4775ab30b1c72679ecfec6ceec63087c6a47 = $this->env->getExtension("native_profiler");
        $__internal_c6c5bfae5907a126c11e8c482cbb4775ab30b1c72679ecfec6ceec63087c6a47->enter($__internal_c6c5bfae5907a126c11e8c482cbb4775ab30b1c72679ecfec6ceec63087c6a47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c6c5bfae5907a126c11e8c482cbb4775ab30b1c72679ecfec6ceec63087c6a47->leave($__internal_c6c5bfae5907a126c11e8c482cbb4775ab30b1c72679ecfec6ceec63087c6a47_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_7b6306738eba8d9e334fd864bd1ea815b2971b84d2c79bcac916c9ce02900d8d = $this->env->getExtension("native_profiler");
        $__internal_7b6306738eba8d9e334fd864bd1ea815b2971b84d2c79bcac916c9ce02900d8d->enter($__internal_7b6306738eba8d9e334fd864bd1ea815b2971b84d2c79bcac916c9ce02900d8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.confirmed", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
    ";
        // line 7
        if ((isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl"))) {
            // line 8
            echo "    <p><a href=\"";
            echo twig_escape_filter($this->env, (isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.back", array(), "FOSUserBundle"), "html", null, true);
            echo "</a></p>
    ";
        }
        
        $__internal_7b6306738eba8d9e334fd864bd1ea815b2971b84d2c79bcac916c9ce02900d8d->leave($__internal_7b6306738eba8d9e334fd864bd1ea815b2971b84d2c79bcac916c9ce02900d8d_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:confirmed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 8,  45 => 7,  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/*     <p>{{ 'registration.confirmed'|trans({'%username%': user.username}) }}</p>*/
/*     {% if targetUrl %}*/
/*     <p><a href="{{ targetUrl }}">{{ 'registration.back'|trans }}</a></p>*/
/*     {% endif %}*/
/* {% endblock fos_user_content %}*/
/* */
