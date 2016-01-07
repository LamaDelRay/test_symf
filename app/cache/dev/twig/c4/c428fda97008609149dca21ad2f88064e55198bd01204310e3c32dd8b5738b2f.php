<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_4ad7197a2c475923551b0a78fa70913ccfa8b8e916b68fec86d766618c1495e8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:edit.html.twig", 1);
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
        $__internal_a6fe871e39687a072db4d8345b9a9efd841a21e4044f9e09e0233ea96da04083 = $this->env->getExtension("native_profiler");
        $__internal_a6fe871e39687a072db4d8345b9a9efd841a21e4044f9e09e0233ea96da04083->enter($__internal_a6fe871e39687a072db4d8345b9a9efd841a21e4044f9e09e0233ea96da04083_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a6fe871e39687a072db4d8345b9a9efd841a21e4044f9e09e0233ea96da04083->leave($__internal_a6fe871e39687a072db4d8345b9a9efd841a21e4044f9e09e0233ea96da04083_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_570b25cf01a6efb55d7596e9546c9792a3ffc202b1ae8e46aa2a6a0cede1d5bf = $this->env->getExtension("native_profiler");
        $__internal_570b25cf01a6efb55d7596e9546c9792a3ffc202b1ae8e46aa2a6a0cede1d5bf->enter($__internal_570b25cf01a6efb55d7596e9546c9792a3ffc202b1ae8e46aa2a6a0cede1d5bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_570b25cf01a6efb55d7596e9546c9792a3ffc202b1ae8e46aa2a6a0cede1d5bf->leave($__internal_570b25cf01a6efb55d7596e9546c9792a3ffc202b1ae8e46aa2a6a0cede1d5bf_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit.html.twig";
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
/* {% include "FOSUserBundle:Profile:edit_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
