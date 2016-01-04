<?php

/* LamaDelRayPlatformBundle::layout.html.twig */
class __TwigTemplate_44e17148b3c596f71fe5ab14aabbcb8a46bb5326b05c95886fc39247682d510a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "LamaDelRayPlatformBundle::layout.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'platform_body' => array($this, 'block_platform_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_50eb61962d0c3f6ece91121a63e3ec73d687a23018b56bb9d174d92c7fa75a69 = $this->env->getExtension("native_profiler");
        $__internal_50eb61962d0c3f6ece91121a63e3ec73d687a23018b56bb9d174d92c7fa75a69->enter($__internal_50eb61962d0c3f6ece91121a63e3ec73d687a23018b56bb9d174d92c7fa75a69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LamaDelRayPlatformBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_50eb61962d0c3f6ece91121a63e3ec73d687a23018b56bb9d174d92c7fa75a69->leave($__internal_50eb61962d0c3f6ece91121a63e3ec73d687a23018b56bb9d174d92c7fa75a69_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_152649f86377b638126535ff665efadf5512b746b8f8d995b1f95a00833a16b4 = $this->env->getExtension("native_profiler");
        $__internal_152649f86377b638126535ff665efadf5512b746b8f8d995b1f95a00833a16b4->enter($__internal_152649f86377b638126535ff665efadf5512b746b8f8d995b1f95a00833a16b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "\tAnnonces - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_152649f86377b638126535ff665efadf5512b746b8f8d995b1f95a00833a16b4->leave($__internal_152649f86377b638126535ff665efadf5512b746b8f8d995b1f95a00833a16b4_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_24060af94af13b08b1b7e826f32ca93ff2a8182c0ec3090892a850ffc2fa28ac = $this->env->getExtension("native_profiler");
        $__internal_24060af94af13b08b1b7e826f32ca93ff2a8182c0ec3090892a850ffc2fa28ac->enter($__internal_24060af94af13b08b1b7e826f32ca93ff2a8182c0ec3090892a850ffc2fa28ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "
\t<h1>Annonces</h1>

\t<hr>

\t";
        // line 13
        $this->displayBlock('platform_body', $context, $blocks);
        // line 15
        echo "\t
";
        
        $__internal_24060af94af13b08b1b7e826f32ca93ff2a8182c0ec3090892a850ffc2fa28ac->leave($__internal_24060af94af13b08b1b7e826f32ca93ff2a8182c0ec3090892a850ffc2fa28ac_prof);

    }

    // line 13
    public function block_platform_body($context, array $blocks = array())
    {
        $__internal_cb63fc58eed2e779f8538b8b0ac6d688a609c423de4b43fdc7e9ebd7046cecc6 = $this->env->getExtension("native_profiler");
        $__internal_cb63fc58eed2e779f8538b8b0ac6d688a609c423de4b43fdc7e9ebd7046cecc6->enter($__internal_cb63fc58eed2e779f8538b8b0ac6d688a609c423de4b43fdc7e9ebd7046cecc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "platform_body"));

        // line 14
        echo "\t";
        
        $__internal_cb63fc58eed2e779f8538b8b0ac6d688a609c423de4b43fdc7e9ebd7046cecc6->leave($__internal_cb63fc58eed2e779f8538b8b0ac6d688a609c423de4b43fdc7e9ebd7046cecc6_prof);

    }

    public function getTemplateName()
    {
        return "LamaDelRayPlatformBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 14,  75 => 13,  67 => 15,  65 => 13,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends "::layout.html.twig" %}*/
/* */
/* {% block title %}*/
/* 	Annonces - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/* */
/* 	<h1>Annonces</h1>*/
/* */
/* 	<hr>*/
/* */
/* 	{% block platform_body %}*/
/* 	{% endblock %}*/
/* 	*/
/* {% endblock %}*/
