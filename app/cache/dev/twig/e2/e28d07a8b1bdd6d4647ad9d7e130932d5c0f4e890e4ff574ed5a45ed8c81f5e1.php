<?php

/* FOSUserBundle:Registration:email.txt.twig */
class __TwigTemplate_437d6b11946a2d56f92e1a402365e3d03a0c54f278388dc47506ffe0ef470321 extends Twig_Template
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
        $__internal_414d1fdc7e5dd78dcd9f723ad68995fa291a0f8a71bba907032fa31ec8c02a15 = $this->env->getExtension("native_profiler");
        $__internal_414d1fdc7e5dd78dcd9f723ad68995fa291a0f8a71bba907032fa31ec8c02a15->enter($__internal_414d1fdc7e5dd78dcd9f723ad68995fa291a0f8a71bba907032fa31ec8c02a15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_414d1fdc7e5dd78dcd9f723ad68995fa291a0f8a71bba907032fa31ec8c02a15->leave($__internal_414d1fdc7e5dd78dcd9f723ad68995fa291a0f8a71bba907032fa31ec8c02a15_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_818572ebfab798489c31575170d1669e2104ec2372e67ab92ad5cc242a104bd0 = $this->env->getExtension("native_profiler");
        $__internal_818572ebfab798489c31575170d1669e2104ec2372e67ab92ad5cc242a104bd0->enter($__internal_818572ebfab798489c31575170d1669e2104ec2372e67ab92ad5cc242a104bd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_818572ebfab798489c31575170d1669e2104ec2372e67ab92ad5cc242a104bd0->leave($__internal_818572ebfab798489c31575170d1669e2104ec2372e67ab92ad5cc242a104bd0_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_bf761bab325b5456fb8b042c8e2ad5a7540e6625327541941cd40c7f5704fe1b = $this->env->getExtension("native_profiler");
        $__internal_bf761bab325b5456fb8b042c8e2ad5a7540e6625327541941cd40c7f5704fe1b->enter($__internal_bf761bab325b5456fb8b042c8e2ad5a7540e6625327541941cd40c7f5704fe1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_bf761bab325b5456fb8b042c8e2ad5a7540e6625327541941cd40c7f5704fe1b->leave($__internal_bf761bab325b5456fb8b042c8e2ad5a7540e6625327541941cd40c7f5704fe1b_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_23db5966237e87ab39ba9c83c4b01f73ec7d4ec7f567525b9610e3baaaf412c5 = $this->env->getExtension("native_profiler");
        $__internal_23db5966237e87ab39ba9c83c4b01f73ec7d4ec7f567525b9610e3baaaf412c5->enter($__internal_23db5966237e87ab39ba9c83c4b01f73ec7d4ec7f567525b9610e3baaaf412c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_23db5966237e87ab39ba9c83c4b01f73ec7d4ec7f567525b9610e3baaaf412c5->leave($__internal_23db5966237e87ab39ba9c83c4b01f73ec7d4ec7f567525b9610e3baaaf412c5_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  66 => 12,  57 => 9,  51 => 7,  42 => 4,  36 => 2,  29 => 12,  27 => 7,  25 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* {% block subject %}*/
/* {% autoescape false %}*/
/* {{ 'registration.email.subject'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_text %}*/
/* {% autoescape false %}*/
/* {{ 'registration.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_html %}{% endblock %}*/
/* */
