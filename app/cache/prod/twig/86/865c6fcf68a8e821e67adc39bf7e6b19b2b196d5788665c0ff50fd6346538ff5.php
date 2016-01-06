<?php

/* FOSUserBundle:Registration:confirmed.html.twig */
class __TwigTemplate_4a8eda1d60dd58878f1c34d2bbf8c536a2933594577ddebdad9c2f22eb67dc76 extends Twig_Template
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
        $__internal_fd26539fd49ef4cef3e6f46f7fb1b75115deb4ee534052f04f5cfd3bfbca9c9d = $this->env->getExtension("native_profiler");
        $__internal_fd26539fd49ef4cef3e6f46f7fb1b75115deb4ee534052f04f5cfd3bfbca9c9d->enter($__internal_fd26539fd49ef4cef3e6f46f7fb1b75115deb4ee534052f04f5cfd3bfbca9c9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fd26539fd49ef4cef3e6f46f7fb1b75115deb4ee534052f04f5cfd3bfbca9c9d->leave($__internal_fd26539fd49ef4cef3e6f46f7fb1b75115deb4ee534052f04f5cfd3bfbca9c9d_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_86dbf262b635bf5296f34be01dc631e0414cc668e675e5e5317b3f5d271bdd04 = $this->env->getExtension("native_profiler");
        $__internal_86dbf262b635bf5296f34be01dc631e0414cc668e675e5e5317b3f5d271bdd04->enter($__internal_86dbf262b635bf5296f34be01dc631e0414cc668e675e5e5317b3f5d271bdd04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

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
        
        $__internal_86dbf262b635bf5296f34be01dc631e0414cc668e675e5e5317b3f5d271bdd04->leave($__internal_86dbf262b635bf5296f34be01dc631e0414cc668e675e5e5317b3f5d271bdd04_prof);

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
