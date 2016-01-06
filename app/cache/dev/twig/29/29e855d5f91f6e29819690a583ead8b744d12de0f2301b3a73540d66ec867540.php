<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_8168d4a1dc19892e6cd4a518df8f567ccf83c9cb80bd5dfd5f3492bad2f41bea extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
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
        $__internal_d868f0f84af9c646148174c6328a2d6f2c64f1891ed5d118387506c56ed2eefe = $this->env->getExtension("native_profiler");
        $__internal_d868f0f84af9c646148174c6328a2d6f2c64f1891ed5d118387506c56ed2eefe->enter($__internal_d868f0f84af9c646148174c6328a2d6f2c64f1891ed5d118387506c56ed2eefe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d868f0f84af9c646148174c6328a2d6f2c64f1891ed5d118387506c56ed2eefe->leave($__internal_d868f0f84af9c646148174c6328a2d6f2c64f1891ed5d118387506c56ed2eefe_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_6ccddb5db0fa9056fc316878f62b4cc7acf154852e147851acd893fed3a57fe2 = $this->env->getExtension("native_profiler");
        $__internal_6ccddb5db0fa9056fc316878f62b4cc7acf154852e147851acd893fed3a57fe2->enter($__internal_6ccddb5db0fa9056fc316878f62b4cc7acf154852e147851acd893fed3a57fe2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_6ccddb5db0fa9056fc316878f62b4cc7acf154852e147851acd893fed3a57fe2->leave($__internal_6ccddb5db0fa9056fc316878f62b4cc7acf154852e147851acd893fed3a57fe2_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
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
/* {% include "FOSUserBundle:Registration:register_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
