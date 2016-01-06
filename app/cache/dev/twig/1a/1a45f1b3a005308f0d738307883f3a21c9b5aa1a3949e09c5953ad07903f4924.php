<?php

/* FOSUserBundle:Resetting:checkEmail.html.twig */
class __TwigTemplate_52e8a724337c28dd2dfe5ad9cb6cef6e994440c38d7c09cdd815544890396b31 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:checkEmail.html.twig", 1);
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
        $__internal_b9c29836e2efe67a5bb4410ecfa82da2730c036b911d2c223ba41ddd1db33aae = $this->env->getExtension("native_profiler");
        $__internal_b9c29836e2efe67a5bb4410ecfa82da2730c036b911d2c223ba41ddd1db33aae->enter($__internal_b9c29836e2efe67a5bb4410ecfa82da2730c036b911d2c223ba41ddd1db33aae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b9c29836e2efe67a5bb4410ecfa82da2730c036b911d2c223ba41ddd1db33aae->leave($__internal_b9c29836e2efe67a5bb4410ecfa82da2730c036b911d2c223ba41ddd1db33aae_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_bce33c3645ee650896ef238eb063a9a458d69a8017d5725e59c86b704dee63a8 = $this->env->getExtension("native_profiler");
        $__internal_bce33c3645ee650896ef238eb063a9a458d69a8017d5725e59c86b704dee63a8->enter($__internal_bce33c3645ee650896ef238eb063a9a458d69a8017d5725e59c86b704dee63a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "<p>
";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.check_email", array("%email%" => (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email"))), "FOSUserBundle"), "html", null, true);
        echo "
</p>
";
        
        $__internal_bce33c3645ee650896ef238eb063a9a458d69a8017d5725e59c86b704dee63a8->leave($__internal_bce33c3645ee650896ef238eb063a9a458d69a8017d5725e59c86b704dee63a8_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:checkEmail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/* <p>*/
/* {{ 'resetting.check_email'|trans({'%email%': email}, 'FOSUserBundle') }}*/
/* </p>*/
/* {% endblock %}*/
/* */
