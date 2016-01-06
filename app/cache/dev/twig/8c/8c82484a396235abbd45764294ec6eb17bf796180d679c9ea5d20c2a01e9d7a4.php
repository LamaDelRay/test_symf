<?php

/* FOSUserBundle:Resetting:email.txt.twig */
class __TwigTemplate_3606d438ffedcdcad4712b0dcf1c7dae8162a899326feda4a62d6af014739ffe extends Twig_Template
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
        $__internal_299c8b9fb6135db99591ff8adc386305f9913a3437ca0d01d5b34067503c0ea7 = $this->env->getExtension("native_profiler");
        $__internal_299c8b9fb6135db99591ff8adc386305f9913a3437ca0d01d5b34067503c0ea7->enter($__internal_299c8b9fb6135db99591ff8adc386305f9913a3437ca0d01d5b34067503c0ea7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 1
        $this->displayBlock('subject', $context, $blocks);
        // line 6
        $this->displayBlock('body_text', $context, $blocks);
        // line 11
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_299c8b9fb6135db99591ff8adc386305f9913a3437ca0d01d5b34067503c0ea7->leave($__internal_299c8b9fb6135db99591ff8adc386305f9913a3437ca0d01d5b34067503c0ea7_prof);

    }

    // line 1
    public function block_subject($context, array $blocks = array())
    {
        $__internal_add923b43e3f2dc5aec62a32ca196ad1965f7c8612d582c56778acf47ff63e50 = $this->env->getExtension("native_profiler");
        $__internal_add923b43e3f2dc5aec62a32ca196ad1965f7c8612d582c56778acf47ff63e50->enter($__internal_add923b43e3f2dc5aec62a32ca196ad1965f7c8612d582c56778acf47ff63e50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 3
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_add923b43e3f2dc5aec62a32ca196ad1965f7c8612d582c56778acf47ff63e50->leave($__internal_add923b43e3f2dc5aec62a32ca196ad1965f7c8612d582c56778acf47ff63e50_prof);

    }

    // line 6
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_c2b17e115ac17116be83bf9737c345fc081d68db1deed143c1b8bb21faec09bb = $this->env->getExtension("native_profiler");
        $__internal_c2b17e115ac17116be83bf9737c345fc081d68db1deed143c1b8bb21faec09bb->enter($__internal_c2b17e115ac17116be83bf9737c345fc081d68db1deed143c1b8bb21faec09bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 8
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_c2b17e115ac17116be83bf9737c345fc081d68db1deed143c1b8bb21faec09bb->leave($__internal_c2b17e115ac17116be83bf9737c345fc081d68db1deed143c1b8bb21faec09bb_prof);

    }

    // line 11
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_c3e9883f443849815c1c265a305959a039d0ccbba016211d1d32ea00c0226584 = $this->env->getExtension("native_profiler");
        $__internal_c3e9883f443849815c1c265a305959a039d0ccbba016211d1d32ea00c0226584->enter($__internal_c3e9883f443849815c1c265a305959a039d0ccbba016211d1d32ea00c0226584_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_c3e9883f443849815c1c265a305959a039d0ccbba016211d1d32ea00c0226584->leave($__internal_c3e9883f443849815c1c265a305959a039d0ccbba016211d1d32ea00c0226584_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  66 => 11,  57 => 8,  51 => 6,  42 => 3,  36 => 1,  29 => 11,  27 => 6,  25 => 1,);
    }
}
/* {% block subject %}*/
/* {% autoescape false %}*/
/* {{ 'resetting.email.subject'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}, 'FOSUserBundle') }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_text %}*/
/* {% autoescape false %}*/
/* {{ 'resetting.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}, 'FOSUserBundle') }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_html %}{% endblock %}*/
/* */
