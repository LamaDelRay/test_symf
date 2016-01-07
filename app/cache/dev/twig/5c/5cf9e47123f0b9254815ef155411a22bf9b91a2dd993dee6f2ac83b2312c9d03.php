<?php

/* FOSUserBundle:Registration:checkEmail.html.twig */
class __TwigTemplate_848a7e01c15f8892ec0be243b78ef3ac86b93d0c67fe3717a9af4a1ba28fc01d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:checkEmail.html.twig", 1);
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
        $__internal_802ecb5e6a8136330663d99bc2e0572b3052031417366fb45e8e7c5b9ff04f3d = $this->env->getExtension("native_profiler");
        $__internal_802ecb5e6a8136330663d99bc2e0572b3052031417366fb45e8e7c5b9ff04f3d->enter($__internal_802ecb5e6a8136330663d99bc2e0572b3052031417366fb45e8e7c5b9ff04f3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_802ecb5e6a8136330663d99bc2e0572b3052031417366fb45e8e7c5b9ff04f3d->leave($__internal_802ecb5e6a8136330663d99bc2e0572b3052031417366fb45e8e7c5b9ff04f3d_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_7ab990c2602a02662c0ec9a6d1bf93a262c4ddc68ff782fbdfa927d8a7059a84 = $this->env->getExtension("native_profiler");
        $__internal_7ab990c2602a02662c0ec9a6d1bf93a262c4ddc68ff782fbdfa927d8a7059a84->enter($__internal_7ab990c2602a02662c0ec9a6d1bf93a262c4ddc68ff782fbdfa927d8a7059a84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_7ab990c2602a02662c0ec9a6d1bf93a262c4ddc68ff782fbdfa927d8a7059a84->leave($__internal_7ab990c2602a02662c0ec9a6d1bf93a262c4ddc68ff782fbdfa927d8a7059a84_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:checkEmail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/*     <p>{{ 'registration.check_email'|trans({'%email%': user.email}, 'FOSUserBundle') }}</p>*/
/* {% endblock fos_user_content %}*/
/* */
