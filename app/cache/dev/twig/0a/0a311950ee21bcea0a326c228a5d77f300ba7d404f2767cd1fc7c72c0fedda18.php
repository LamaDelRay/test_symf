<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_367f1084c26a65fe055a11eafed559f19e6f4ebd98bec288ca43ad97645d9392 extends Twig_Template
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
        $__internal_02ed53948ffa05bb6a176284371e7990869f31f179a98ba9f704efb7129d1886 = $this->env->getExtension("native_profiler");
        $__internal_02ed53948ffa05bb6a176284371e7990869f31f179a98ba9f704efb7129d1886->enter($__internal_02ed53948ffa05bb6a176284371e7990869f31f179a98ba9f704efb7129d1886_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_02ed53948ffa05bb6a176284371e7990869f31f179a98ba9f704efb7129d1886->leave($__internal_02ed53948ffa05bb6a176284371e7990869f31f179a98ba9f704efb7129d1886_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_9c2344007e6a6c172b4ff6c925847148f4563071fb5517b6550f2ff9f13100fd = $this->env->getExtension("native_profiler");
        $__internal_9c2344007e6a6c172b4ff6c925847148f4563071fb5517b6550f2ff9f13100fd->enter($__internal_9c2344007e6a6c172b4ff6c925847148f4563071fb5517b6550f2ff9f13100fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_9c2344007e6a6c172b4ff6c925847148f4563071fb5517b6550f2ff9f13100fd->leave($__internal_9c2344007e6a6c172b4ff6c925847148f4563071fb5517b6550f2ff9f13100fd_prof);

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
