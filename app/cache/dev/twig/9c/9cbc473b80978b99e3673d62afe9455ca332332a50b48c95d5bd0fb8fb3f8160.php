<?php

/* FOSUserBundle:Resetting:checkEmail.html.twig */
class __TwigTemplate_9867e180e1084c22926645f724b6ad5e39eb16f6074c39b17420792cab65ec7c extends Twig_Template
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
        $__internal_2c9f6d4604567a2f726b6284a49efc7dc917bfbbbf9672b406fbeb46d273326b = $this->env->getExtension("native_profiler");
        $__internal_2c9f6d4604567a2f726b6284a49efc7dc917bfbbbf9672b406fbeb46d273326b->enter($__internal_2c9f6d4604567a2f726b6284a49efc7dc917bfbbbf9672b406fbeb46d273326b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2c9f6d4604567a2f726b6284a49efc7dc917bfbbbf9672b406fbeb46d273326b->leave($__internal_2c9f6d4604567a2f726b6284a49efc7dc917bfbbbf9672b406fbeb46d273326b_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_9f6cbe80baa38752a52601f0df13705635622e6c054f929b1afba51fcf90f996 = $this->env->getExtension("native_profiler");
        $__internal_9f6cbe80baa38752a52601f0df13705635622e6c054f929b1afba51fcf90f996->enter($__internal_9f6cbe80baa38752a52601f0df13705635622e6c054f929b1afba51fcf90f996_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.check_email", array("%email%" => (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email"))), "FOSUserBundle"), "html", null, true);
        echo "
</p>
";
        
        $__internal_9f6cbe80baa38752a52601f0df13705635622e6c054f929b1afba51fcf90f996->leave($__internal_9f6cbe80baa38752a52601f0df13705635622e6c054f929b1afba51fcf90f996_prof);

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
        return array (  43 => 7,  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/* <p>*/
/* {{ 'resetting.check_email'|trans({'%email%': email}) }}*/
/* </p>*/
/* {% endblock %}*/
/* */
