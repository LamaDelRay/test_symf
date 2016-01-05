<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_ed5e9790a0054aa5ca25e75b60288d6a3c5010ad100b734ff1113e9ccbfe653f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:show.html.twig", 1);
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
        $__internal_3adbdea043223349feb64a6cd16dae024277b64a6c01568ef1552d50b8231ac3 = $this->env->getExtension("native_profiler");
        $__internal_3adbdea043223349feb64a6cd16dae024277b64a6c01568ef1552d50b8231ac3->enter($__internal_3adbdea043223349feb64a6cd16dae024277b64a6c01568ef1552d50b8231ac3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3adbdea043223349feb64a6cd16dae024277b64a6c01568ef1552d50b8231ac3->leave($__internal_3adbdea043223349feb64a6cd16dae024277b64a6c01568ef1552d50b8231ac3_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_9f6832e4c649716f0e67a2256a2b373045292a2ffef126117f0ca2f1ab275144 = $this->env->getExtension("native_profiler");
        $__internal_9f6832e4c649716f0e67a2256a2b373045292a2ffef126117f0ca2f1ab275144->enter($__internal_9f6832e4c649716f0e67a2256a2b373045292a2ffef126117f0ca2f1ab275144_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_9f6832e4c649716f0e67a2256a2b373045292a2ffef126117f0ca2f1ab275144->leave($__internal_9f6832e4c649716f0e67a2256a2b373045292a2ffef126117f0ca2f1ab275144_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
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
/* {% include "FOSUserBundle:Profile:show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
