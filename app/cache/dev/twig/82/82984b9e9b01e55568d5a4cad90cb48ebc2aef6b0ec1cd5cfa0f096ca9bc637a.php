<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_99ef154903ad7dd7decfae3009bebb60e446fa9cfe4652d1c06c654d8d1f28d2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:show.html.twig", 1);
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
        $__internal_0fe9820d2293181fd78b20a9cd0c7575df46fcb847d43653e00ccf520c0a20bb = $this->env->getExtension("native_profiler");
        $__internal_0fe9820d2293181fd78b20a9cd0c7575df46fcb847d43653e00ccf520c0a20bb->enter($__internal_0fe9820d2293181fd78b20a9cd0c7575df46fcb847d43653e00ccf520c0a20bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0fe9820d2293181fd78b20a9cd0c7575df46fcb847d43653e00ccf520c0a20bb->leave($__internal_0fe9820d2293181fd78b20a9cd0c7575df46fcb847d43653e00ccf520c0a20bb_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_1898bd02b881a716ff5bbb7f79499cba58ab03a57a1bc5f5843443e834d4ec2f = $this->env->getExtension("native_profiler");
        $__internal_1898bd02b881a716ff5bbb7f79499cba58ab03a57a1bc5f5843443e834d4ec2f->enter($__internal_1898bd02b881a716ff5bbb7f79499cba58ab03a57a1bc5f5843443e834d4ec2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_1898bd02b881a716ff5bbb7f79499cba58ab03a57a1bc5f5843443e834d4ec2f->leave($__internal_1898bd02b881a716ff5bbb7f79499cba58ab03a57a1bc5f5843443e834d4ec2f_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
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
/* {% include "FOSUserBundle:Profile:show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
