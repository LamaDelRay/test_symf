<?php

/* FOSUserBundle:ChangePassword:changePassword.html.twig */
class __TwigTemplate_ef378722c40bec906443d8e557ddad5e95e904302f0249ebc3603b8af9c86427 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:ChangePassword:changePassword.html.twig", 1);
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
        $__internal_03df7dd2c7fe359100c740bf195a620e9b8bd9f8328d4e22faaeacc306d77272 = $this->env->getExtension("native_profiler");
        $__internal_03df7dd2c7fe359100c740bf195a620e9b8bd9f8328d4e22faaeacc306d77272->enter($__internal_03df7dd2c7fe359100c740bf195a620e9b8bd9f8328d4e22faaeacc306d77272_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:changePassword.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_03df7dd2c7fe359100c740bf195a620e9b8bd9f8328d4e22faaeacc306d77272->leave($__internal_03df7dd2c7fe359100c740bf195a620e9b8bd9f8328d4e22faaeacc306d77272_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_94293418300c2115c02fa24af91855bd3938d9368f0b002137db83fc62b3e4f0 = $this->env->getExtension("native_profiler");
        $__internal_94293418300c2115c02fa24af91855bd3938d9368f0b002137db83fc62b3e4f0->enter($__internal_94293418300c2115c02fa24af91855bd3938d9368f0b002137db83fc62b3e4f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:changePassword_content.html.twig", "FOSUserBundle:ChangePassword:changePassword.html.twig", 4)->display($context);
        
        $__internal_94293418300c2115c02fa24af91855bd3938d9368f0b002137db83fc62b3e4f0->leave($__internal_94293418300c2115c02fa24af91855bd3938d9368f0b002137db83fc62b3e4f0_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:ChangePassword:changePassword.html.twig";
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
/* {% include "FOSUserBundle:ChangePassword:changePassword_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
