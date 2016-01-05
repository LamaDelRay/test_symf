<?php

/* FOSUserBundle:Resetting:email.txt.twig */
class __TwigTemplate_a92faafba7d7698f19bd1beb0ae1e84477f620213cd48bd389e6714d8386ef1c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0ba871b4ec70c279b5a87c69a8a30ff3ba2a677c9f071756da747c9bc11fcc35 = $this->env->getExtension("native_profiler");
        $__internal_0ba871b4ec70c279b5a87c69a8a30ff3ba2a677c9f071756da747c9bc11fcc35->enter($__internal_0ba871b4ec70c279b5a87c69a8a30ff3ba2a677c9f071756da747c9bc11fcc35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_0ba871b4ec70c279b5a87c69a8a30ff3ba2a677c9f071756da747c9bc11fcc35->leave($__internal_0ba871b4ec70c279b5a87c69a8a30ff3ba2a677c9f071756da747c9bc11fcc35_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_61906fe78ad48cac666fdacaa2d47aad41c0accf250c36e67794a1d3d3d2cae9 = $this->env->getExtension("native_profiler");
        $__internal_61906fe78ad48cac666fdacaa2d47aad41c0accf250c36e67794a1d3d3d2cae9->enter($__internal_61906fe78ad48cac666fdacaa2d47aad41c0accf250c36e67794a1d3d3d2cae9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_61906fe78ad48cac666fdacaa2d47aad41c0accf250c36e67794a1d3d3d2cae9->leave($__internal_61906fe78ad48cac666fdacaa2d47aad41c0accf250c36e67794a1d3d3d2cae9_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_c79767c4dc95c4aae884c4ce6b491fc60a7af2b338d231f44fef7c99480d5015 = $this->env->getExtension("native_profiler");
        $__internal_c79767c4dc95c4aae884c4ce6b491fc60a7af2b338d231f44fef7c99480d5015->enter($__internal_c79767c4dc95c4aae884c4ce6b491fc60a7af2b338d231f44fef7c99480d5015_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_c79767c4dc95c4aae884c4ce6b491fc60a7af2b338d231f44fef7c99480d5015->leave($__internal_c79767c4dc95c4aae884c4ce6b491fc60a7af2b338d231f44fef7c99480d5015_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_6253b90ff2643ca4b828c26f7a895ed6b66da5c41a0473483d550b2a6d997a04 = $this->env->getExtension("native_profiler");
        $__internal_6253b90ff2643ca4b828c26f7a895ed6b66da5c41a0473483d550b2a6d997a04->enter($__internal_6253b90ff2643ca4b828c26f7a895ed6b66da5c41a0473483d550b2a6d997a04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_6253b90ff2643ca4b828c26f7a895ed6b66da5c41a0473483d550b2a6d997a04->leave($__internal_6253b90ff2643ca4b828c26f7a895ed6b66da5c41a0473483d550b2a6d997a04_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  66 => 12,  57 => 9,  51 => 7,  42 => 4,  36 => 2,  29 => 12,  27 => 7,  25 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* {% block subject %}*/
/* {% autoescape false %}*/
/* {{ 'resetting.email.subject'|trans({'%username%': user.username}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_text %}*/
/* {% autoescape false %}*/
/* {{ 'resetting.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_html %}{% endblock %}*/
/* */
