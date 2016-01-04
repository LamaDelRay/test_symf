<?php

/* FOSUserBundle:Resetting:request.html.twig */
class __TwigTemplate_01baf82d1ddd80c0016dc3882689fd7ac2c0d36cc13c6462d6277cee1a9fb6f5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:request.html.twig", 1);
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
        $__internal_92df4917e6e5e07e292fe94879fb58fbf3544168f5c04d33ddc5da6f2e93a4ff = $this->env->getExtension("native_profiler");
        $__internal_92df4917e6e5e07e292fe94879fb58fbf3544168f5c04d33ddc5da6f2e93a4ff->enter($__internal_92df4917e6e5e07e292fe94879fb58fbf3544168f5c04d33ddc5da6f2e93a4ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_92df4917e6e5e07e292fe94879fb58fbf3544168f5c04d33ddc5da6f2e93a4ff->leave($__internal_92df4917e6e5e07e292fe94879fb58fbf3544168f5c04d33ddc5da6f2e93a4ff_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_3725abd39a329631485464dfb5c4d74b5b7d9e918c94bc3d18adf2c9e82ea80e = $this->env->getExtension("native_profiler");
        $__internal_3725abd39a329631485464dfb5c4d74b5b7d9e918c94bc3d18adf2c9e82ea80e->enter($__internal_3725abd39a329631485464dfb5c4d74b5b7d9e918c94bc3d18adf2c9e82ea80e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_3725abd39a329631485464dfb5c4d74b5b7d9e918c94bc3d18adf2c9e82ea80e->leave($__internal_3725abd39a329631485464dfb5c4d74b5b7d9e918c94bc3d18adf2c9e82ea80e_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request.html.twig";
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
/* {% include "FOSUserBundle:Resetting:request_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
