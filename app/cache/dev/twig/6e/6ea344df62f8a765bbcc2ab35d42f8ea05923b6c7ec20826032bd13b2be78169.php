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
        $__internal_772f5bcbc78f840eb2253b2e64f62da2889d3b0fa94ac7a92e9288f841089d80 = $this->env->getExtension("native_profiler");
        $__internal_772f5bcbc78f840eb2253b2e64f62da2889d3b0fa94ac7a92e9288f841089d80->enter($__internal_772f5bcbc78f840eb2253b2e64f62da2889d3b0fa94ac7a92e9288f841089d80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_772f5bcbc78f840eb2253b2e64f62da2889d3b0fa94ac7a92e9288f841089d80->leave($__internal_772f5bcbc78f840eb2253b2e64f62da2889d3b0fa94ac7a92e9288f841089d80_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a2ac2212c68aaf78faea3e41dab6e12bad6297c428d699eda622034b101e3355 = $this->env->getExtension("native_profiler");
        $__internal_a2ac2212c68aaf78faea3e41dab6e12bad6297c428d699eda622034b101e3355->enter($__internal_a2ac2212c68aaf78faea3e41dab6e12bad6297c428d699eda622034b101e3355_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "<p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.password_already_requested", array(), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_a2ac2212c68aaf78faea3e41dab6e12bad6297c428d699eda622034b101e3355->leave($__internal_a2ac2212c68aaf78faea3e41dab6e12bad6297c428d699eda622034b101e3355_prof);

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
