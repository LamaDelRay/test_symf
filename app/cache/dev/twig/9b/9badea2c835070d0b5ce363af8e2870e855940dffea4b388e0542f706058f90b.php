<?php

/* FOSUserBundle:Registration:email.txt.twig */
class __TwigTemplate_de734dbb89f6d6b718b267c9dc9a2ea4b78f275667c6f8f56e4dcee4d85f4c5a extends Twig_Template
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
        $__internal_8217161a4e8c5ee17cee69c0ec2179b98f97c36762ad634417acd1263fea46d2 = $this->env->getExtension("native_profiler");
        $__internal_8217161a4e8c5ee17cee69c0ec2179b98f97c36762ad634417acd1263fea46d2->enter($__internal_8217161a4e8c5ee17cee69c0ec2179b98f97c36762ad634417acd1263fea46d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_8217161a4e8c5ee17cee69c0ec2179b98f97c36762ad634417acd1263fea46d2->leave($__internal_8217161a4e8c5ee17cee69c0ec2179b98f97c36762ad634417acd1263fea46d2_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_30faa09e634dc5219748433f6bb71e280f20b5d9c68c1100547e0b46bb237480 = $this->env->getExtension("native_profiler");
        $__internal_30faa09e634dc5219748433f6bb71e280f20b5d9c68c1100547e0b46bb237480->enter($__internal_30faa09e634dc5219748433f6bb71e280f20b5d9c68c1100547e0b46bb237480_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_30faa09e634dc5219748433f6bb71e280f20b5d9c68c1100547e0b46bb237480->leave($__internal_30faa09e634dc5219748433f6bb71e280f20b5d9c68c1100547e0b46bb237480_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_7219fae302a0028a89e6283e10eb0593b59b72b0dc0d591340f40d8f32f0140f = $this->env->getExtension("native_profiler");
        $__internal_7219fae302a0028a89e6283e10eb0593b59b72b0dc0d591340f40d8f32f0140f->enter($__internal_7219fae302a0028a89e6283e10eb0593b59b72b0dc0d591340f40d8f32f0140f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_7219fae302a0028a89e6283e10eb0593b59b72b0dc0d591340f40d8f32f0140f->leave($__internal_7219fae302a0028a89e6283e10eb0593b59b72b0dc0d591340f40d8f32f0140f_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_fdc2e6540d40152636324636984098059013e70acfa3ac77f5e4459449312081 = $this->env->getExtension("native_profiler");
        $__internal_fdc2e6540d40152636324636984098059013e70acfa3ac77f5e4459449312081->enter($__internal_fdc2e6540d40152636324636984098059013e70acfa3ac77f5e4459449312081_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_fdc2e6540d40152636324636984098059013e70acfa3ac77f5e4459449312081->leave($__internal_fdc2e6540d40152636324636984098059013e70acfa3ac77f5e4459449312081_prof);

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
