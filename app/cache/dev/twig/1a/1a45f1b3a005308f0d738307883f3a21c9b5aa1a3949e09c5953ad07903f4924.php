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
        $__internal_1480b24d7b507749a0d468c4aa9eed2b8d1aa1c4cae2e7a64d3592e16dca5145 = $this->env->getExtension("native_profiler");
        $__internal_1480b24d7b507749a0d468c4aa9eed2b8d1aa1c4cae2e7a64d3592e16dca5145->enter($__internal_1480b24d7b507749a0d468c4aa9eed2b8d1aa1c4cae2e7a64d3592e16dca5145_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1480b24d7b507749a0d468c4aa9eed2b8d1aa1c4cae2e7a64d3592e16dca5145->leave($__internal_1480b24d7b507749a0d468c4aa9eed2b8d1aa1c4cae2e7a64d3592e16dca5145_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_9bd9cf405daf4fdf9af55d2eec8a730a53116c67e09a0b104ca6a9c1cf436c2d = $this->env->getExtension("native_profiler");
        $__internal_9bd9cf405daf4fdf9af55d2eec8a730a53116c67e09a0b104ca6a9c1cf436c2d->enter($__internal_9bd9cf405daf4fdf9af55d2eec8a730a53116c67e09a0b104ca6a9c1cf436c2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "<p>
";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.check_email", array("%email%" => (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email"))), "FOSUserBundle"), "html", null, true);
        echo "
</p>
";
        
        $__internal_9bd9cf405daf4fdf9af55d2eec8a730a53116c67e09a0b104ca6a9c1cf436c2d->leave($__internal_9bd9cf405daf4fdf9af55d2eec8a730a53116c67e09a0b104ca6a9c1cf436c2d_prof);

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
