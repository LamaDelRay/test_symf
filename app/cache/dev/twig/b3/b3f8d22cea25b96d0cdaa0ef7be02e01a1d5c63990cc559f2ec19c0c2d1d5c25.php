<?php

/* FOSUserBundle:Resetting:email.txt.twig */
class __TwigTemplate_9c08b012ab313885e0010ffda7be806421bc45192ca16b9fb39d550489ea7f05 extends Twig_Template
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
        $__internal_ee58e4b8e7050fb9ad9aea156353bcb16b750a8312b73814b3300a033f024e9c = $this->env->getExtension("native_profiler");
        $__internal_ee58e4b8e7050fb9ad9aea156353bcb16b750a8312b73814b3300a033f024e9c->enter($__internal_ee58e4b8e7050fb9ad9aea156353bcb16b750a8312b73814b3300a033f024e9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_ee58e4b8e7050fb9ad9aea156353bcb16b750a8312b73814b3300a033f024e9c->leave($__internal_ee58e4b8e7050fb9ad9aea156353bcb16b750a8312b73814b3300a033f024e9c_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_30d034530c0622886d65dd1d8a76d02e034da0d61f9200e88e2adae1efce9013 = $this->env->getExtension("native_profiler");
        $__internal_30d034530c0622886d65dd1d8a76d02e034da0d61f9200e88e2adae1efce9013->enter($__internal_30d034530c0622886d65dd1d8a76d02e034da0d61f9200e88e2adae1efce9013_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_30d034530c0622886d65dd1d8a76d02e034da0d61f9200e88e2adae1efce9013->leave($__internal_30d034530c0622886d65dd1d8a76d02e034da0d61f9200e88e2adae1efce9013_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_0924eefd4500f99b3334961e1a0da9e3e4892b9ea723e708dcbe5b9f96483c5c = $this->env->getExtension("native_profiler");
        $__internal_0924eefd4500f99b3334961e1a0da9e3e4892b9ea723e708dcbe5b9f96483c5c->enter($__internal_0924eefd4500f99b3334961e1a0da9e3e4892b9ea723e708dcbe5b9f96483c5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_0924eefd4500f99b3334961e1a0da9e3e4892b9ea723e708dcbe5b9f96483c5c->leave($__internal_0924eefd4500f99b3334961e1a0da9e3e4892b9ea723e708dcbe5b9f96483c5c_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_d7bd28bc6529fd63c7e1d41107ccdb01893ec0d34798983cf813c7bf50625d0a = $this->env->getExtension("native_profiler");
        $__internal_d7bd28bc6529fd63c7e1d41107ccdb01893ec0d34798983cf813c7bf50625d0a->enter($__internal_d7bd28bc6529fd63c7e1d41107ccdb01893ec0d34798983cf813c7bf50625d0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_d7bd28bc6529fd63c7e1d41107ccdb01893ec0d34798983cf813c7bf50625d0a->leave($__internal_d7bd28bc6529fd63c7e1d41107ccdb01893ec0d34798983cf813c7bf50625d0a_prof);

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
