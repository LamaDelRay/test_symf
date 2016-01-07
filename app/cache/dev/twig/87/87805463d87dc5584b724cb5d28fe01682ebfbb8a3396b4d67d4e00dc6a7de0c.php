<?php

/* FOSUserBundle:Group:edit.html.twig */
class __TwigTemplate_dd3095b73001ebafda9c5b9c81b053fc45c8311faf06381969cd464974d99093 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:edit.html.twig", 1);
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
        $__internal_2636c5007a9beb3b8acd582565a557d1e6f0d60cb037c7f2dcb309dd9af2cffa = $this->env->getExtension("native_profiler");
        $__internal_2636c5007a9beb3b8acd582565a557d1e6f0d60cb037c7f2dcb309dd9af2cffa->enter($__internal_2636c5007a9beb3b8acd582565a557d1e6f0d60cb037c7f2dcb309dd9af2cffa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2636c5007a9beb3b8acd582565a557d1e6f0d60cb037c7f2dcb309dd9af2cffa->leave($__internal_2636c5007a9beb3b8acd582565a557d1e6f0d60cb037c7f2dcb309dd9af2cffa_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_de42f622c06f70e294660828142f8ba1de81459b3b52fe52270c6c3adb0d257d = $this->env->getExtension("native_profiler");
        $__internal_de42f622c06f70e294660828142f8ba1de81459b3b52fe52270c6c3adb0d257d->enter($__internal_de42f622c06f70e294660828142f8ba1de81459b3b52fe52270c6c3adb0d257d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_de42f622c06f70e294660828142f8ba1de81459b3b52fe52270c6c3adb0d257d->leave($__internal_de42f622c06f70e294660828142f8ba1de81459b3b52fe52270c6c3adb0d257d_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:edit.html.twig";
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
/* {% include "FOSUserBundle:Group:edit_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
