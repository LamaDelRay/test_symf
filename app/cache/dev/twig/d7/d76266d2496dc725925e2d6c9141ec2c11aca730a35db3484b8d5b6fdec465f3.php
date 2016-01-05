<?php

/* FOSUserBundle:Resetting:checkEmail.html.twig */
class __TwigTemplate_2dee71983a4c46143cad3a6c73ce561a238f7b94f102249e45cf833741848f25 extends Twig_Template
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
        $__internal_b69f13009e8dca1e360f8250b78fc83216983e64491bc34a3922653bcce96dad = $this->env->getExtension("native_profiler");
        $__internal_b69f13009e8dca1e360f8250b78fc83216983e64491bc34a3922653bcce96dad->enter($__internal_b69f13009e8dca1e360f8250b78fc83216983e64491bc34a3922653bcce96dad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b69f13009e8dca1e360f8250b78fc83216983e64491bc34a3922653bcce96dad->leave($__internal_b69f13009e8dca1e360f8250b78fc83216983e64491bc34a3922653bcce96dad_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_972050900ee45be6922543e927d202deae0fceebcdb38fee537d91e06b979944 = $this->env->getExtension("native_profiler");
        $__internal_972050900ee45be6922543e927d202deae0fceebcdb38fee537d91e06b979944->enter($__internal_972050900ee45be6922543e927d202deae0fceebcdb38fee537d91e06b979944_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.check_email", array("%email%" => (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email"))), "FOSUserBundle"), "html", null, true);
        echo "
</p>
";
        
        $__internal_972050900ee45be6922543e927d202deae0fceebcdb38fee537d91e06b979944->leave($__internal_972050900ee45be6922543e927d202deae0fceebcdb38fee537d91e06b979944_prof);

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
