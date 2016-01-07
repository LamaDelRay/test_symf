<?php

/* FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig */
class __TwigTemplate_6125d9c3cec0dceed1b2867ee07138b0310abe650e2193924bb5f085074b5880 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig", 1);
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
        $__internal_8f621640e8e5f5d490a6f339681807ae4a9228a2d6ee8b4f33a5780124ff4006 = $this->env->getExtension("native_profiler");
        $__internal_8f621640e8e5f5d490a6f339681807ae4a9228a2d6ee8b4f33a5780124ff4006->enter($__internal_8f621640e8e5f5d490a6f339681807ae4a9228a2d6ee8b4f33a5780124ff4006_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8f621640e8e5f5d490a6f339681807ae4a9228a2d6ee8b4f33a5780124ff4006->leave($__internal_8f621640e8e5f5d490a6f339681807ae4a9228a2d6ee8b4f33a5780124ff4006_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_0b5d6ac8f11d6e4b3c3f2951e4d627115ecc8eb50c8e89ce4e88ef8a6cbfb238 = $this->env->getExtension("native_profiler");
        $__internal_0b5d6ac8f11d6e4b3c3f2951e4d627115ecc8eb50c8e89ce4e88ef8a6cbfb238->enter($__internal_0b5d6ac8f11d6e4b3c3f2951e4d627115ecc8eb50c8e89ce4e88ef8a6cbfb238_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "<p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.password_already_requested", array(), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_0b5d6ac8f11d6e4b3c3f2951e4d627115ecc8eb50c8e89ce4e88ef8a6cbfb238->leave($__internal_0b5d6ac8f11d6e4b3c3f2951e4d627115ecc8eb50c8e89ce4e88ef8a6cbfb238_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig";
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
/* <p>{{ 'resetting.password_already_requested'|trans({}, 'FOSUserBundle') }}</p>*/
/* {% endblock fos_user_content %}*/
/* */
