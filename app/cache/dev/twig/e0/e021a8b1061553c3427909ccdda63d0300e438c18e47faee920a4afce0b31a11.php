<?php

/* FOSUserBundle:Registration:email.txt.twig */
class __TwigTemplate_b2bc79aafbab808c4c50c6d38e29b7978a9d494445108b45aa4c1e8ba37378d6 extends Twig_Template
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
        $__internal_d3b3a30d4780fb04af03863c63de0ccfab191b17a8c9e0b6e1d5d570d03f942b = $this->env->getExtension("native_profiler");
        $__internal_d3b3a30d4780fb04af03863c63de0ccfab191b17a8c9e0b6e1d5d570d03f942b->enter($__internal_d3b3a30d4780fb04af03863c63de0ccfab191b17a8c9e0b6e1d5d570d03f942b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 1
        $this->displayBlock('subject', $context, $blocks);
        // line 6
        $this->displayBlock('body_text', $context, $blocks);
        // line 11
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_d3b3a30d4780fb04af03863c63de0ccfab191b17a8c9e0b6e1d5d570d03f942b->leave($__internal_d3b3a30d4780fb04af03863c63de0ccfab191b17a8c9e0b6e1d5d570d03f942b_prof);

    }

    // line 1
    public function block_subject($context, array $blocks = array())
    {
        $__internal_156bd748eb16149c5d8e402cca4e02cbea71ef926b25f88cb533bd4c3e285111 = $this->env->getExtension("native_profiler");
        $__internal_156bd748eb16149c5d8e402cca4e02cbea71ef926b25f88cb533bd4c3e285111->enter($__internal_156bd748eb16149c5d8e402cca4e02cbea71ef926b25f88cb533bd4c3e285111_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 3
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_156bd748eb16149c5d8e402cca4e02cbea71ef926b25f88cb533bd4c3e285111->leave($__internal_156bd748eb16149c5d8e402cca4e02cbea71ef926b25f88cb533bd4c3e285111_prof);

    }

    // line 6
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_3777472bd1c578a05bb4abb6adafbe89b08302bca72a7cdeebf8f99059a378e0 = $this->env->getExtension("native_profiler");
        $__internal_3777472bd1c578a05bb4abb6adafbe89b08302bca72a7cdeebf8f99059a378e0->enter($__internal_3777472bd1c578a05bb4abb6adafbe89b08302bca72a7cdeebf8f99059a378e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 8
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_3777472bd1c578a05bb4abb6adafbe89b08302bca72a7cdeebf8f99059a378e0->leave($__internal_3777472bd1c578a05bb4abb6adafbe89b08302bca72a7cdeebf8f99059a378e0_prof);

    }

    // line 11
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_cac681e896d0d89b5a96eddda3b80c558504a3eb26e429761833163181fa1093 = $this->env->getExtension("native_profiler");
        $__internal_cac681e896d0d89b5a96eddda3b80c558504a3eb26e429761833163181fa1093->enter($__internal_cac681e896d0d89b5a96eddda3b80c558504a3eb26e429761833163181fa1093_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_cac681e896d0d89b5a96eddda3b80c558504a3eb26e429761833163181fa1093->leave($__internal_cac681e896d0d89b5a96eddda3b80c558504a3eb26e429761833163181fa1093_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  66 => 11,  57 => 8,  51 => 6,  42 => 3,  36 => 1,  29 => 11,  27 => 6,  25 => 1,);
    }
}
/* {% block subject %}*/
/* {% autoescape false %}*/
/* {{ 'registration.email.subject'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}, 'FOSUserBundle') }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_text %}*/
/* {% autoescape false %}*/
/* {{ 'registration.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}, 'FOSUserBundle') }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_html %}{% endblock %}*/
/* */
