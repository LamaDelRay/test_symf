<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_83e488403ef5dd8fbeb70398dbb361ad7b61beb6218d472b6186688a0100c291 extends Twig_Template
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
        $__internal_4b0cea6cb8c575abfb302cbdc57add95df2c97eba918fef6c3f2acc40214875b = $this->env->getExtension("native_profiler");
        $__internal_4b0cea6cb8c575abfb302cbdc57add95df2c97eba918fef6c3f2acc40214875b->enter($__internal_4b0cea6cb8c575abfb302cbdc57add95df2c97eba918fef6c3f2acc40214875b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4b0cea6cb8c575abfb302cbdc57add95df2c97eba918fef6c3f2acc40214875b->leave($__internal_4b0cea6cb8c575abfb302cbdc57add95df2c97eba918fef6c3f2acc40214875b_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ca4a9cfb72e4256ebd21e8a74492783e9231760181fa21dce9a70c551df57aa0 = $this->env->getExtension("native_profiler");
        $__internal_ca4a9cfb72e4256ebd21e8a74492783e9231760181fa21dce9a70c551df57aa0->enter($__internal_ca4a9cfb72e4256ebd21e8a74492783e9231760181fa21dce9a70c551df57aa0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_ca4a9cfb72e4256ebd21e8a74492783e9231760181fa21dce9a70c551df57aa0->leave($__internal_ca4a9cfb72e4256ebd21e8a74492783e9231760181fa21dce9a70c551df57aa0_prof);

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
