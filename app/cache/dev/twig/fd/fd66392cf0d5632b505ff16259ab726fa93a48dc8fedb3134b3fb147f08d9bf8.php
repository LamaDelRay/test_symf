<?php

/* FOSUserBundle:Group:list.html.twig */
class __TwigTemplate_218f231b7f5b8f2f2564307479bc70b6486ec2a3e26330eed1b822fa27fe0be5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:list.html.twig", 1);
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
        $__internal_444475e9327f646b8a8802c86ff1556233d4ebe311bb10ca8cf207010ca6b763 = $this->env->getExtension("native_profiler");
        $__internal_444475e9327f646b8a8802c86ff1556233d4ebe311bb10ca8cf207010ca6b763->enter($__internal_444475e9327f646b8a8802c86ff1556233d4ebe311bb10ca8cf207010ca6b763_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_444475e9327f646b8a8802c86ff1556233d4ebe311bb10ca8cf207010ca6b763->leave($__internal_444475e9327f646b8a8802c86ff1556233d4ebe311bb10ca8cf207010ca6b763_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_99e7c14155784e2eced765e3d5a86cdd7114eb6f79b71165ff720a4380ce28d4 = $this->env->getExtension("native_profiler");
        $__internal_99e7c14155784e2eced765e3d5a86cdd7114eb6f79b71165ff720a4380ce28d4->enter($__internal_99e7c14155784e2eced765e3d5a86cdd7114eb6f79b71165ff720a4380ce28d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_99e7c14155784e2eced765e3d5a86cdd7114eb6f79b71165ff720a4380ce28d4->leave($__internal_99e7c14155784e2eced765e3d5a86cdd7114eb6f79b71165ff720a4380ce28d4_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list.html.twig";
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
/* {% include "FOSUserBundle:Group:list_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
