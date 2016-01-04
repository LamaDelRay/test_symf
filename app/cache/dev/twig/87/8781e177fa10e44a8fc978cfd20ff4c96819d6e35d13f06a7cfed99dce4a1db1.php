<?php

/* LamaDelRayPlatformBundle::layout2.html.twig */
class __TwigTemplate_81a2220af32fc51c542018da4296f383d9c5a02fe475ef265db556d48865be3a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "LamaDelRayPlatformBundle::layout2.html.twig", 1);
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
        $__internal_e063acba438c2d3fc30f3bd5713b13879a03103128511f821982b3768f5f1d8a = $this->env->getExtension("native_profiler");
        $__internal_e063acba438c2d3fc30f3bd5713b13879a03103128511f821982b3768f5f1d8a->enter($__internal_e063acba438c2d3fc30f3bd5713b13879a03103128511f821982b3768f5f1d8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LamaDelRayPlatformBundle::layout2.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e063acba438c2d3fc30f3bd5713b13879a03103128511f821982b3768f5f1d8a->leave($__internal_e063acba438c2d3fc30f3bd5713b13879a03103128511f821982b3768f5f1d8a_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_8d36f4c1851505f9c64f082160493332d8fab630ec5d73a24c6d00d9aa07812e = $this->env->getExtension("native_profiler");
        $__internal_8d36f4c1851505f9c64f082160493332d8fab630ec5d73a24c6d00d9aa07812e->enter($__internal_8d36f4c1851505f9c64f082160493332d8fab630ec5d73a24c6d00d9aa07812e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "\tAnnonces - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_8d36f4c1851505f9c64f082160493332d8fab630ec5d73a24c6d00d9aa07812e->leave($__internal_8d36f4c1851505f9c64f082160493332d8fab630ec5d73a24c6d00d9aa07812e_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_c153a69786df2af227e4634f3e15a8a7d732b8f19a107c8e7f9d0ed09c34c7ff = $this->env->getExtension("native_profiler");
        $__internal_c153a69786df2af227e4634f3e15a8a7d732b8f19a107c8e7f9d0ed09c34c7ff->enter($__internal_c153a69786df2af227e4634f3e15a8a7d732b8f19a107c8e7f9d0ed09c34c7ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_c153a69786df2af227e4634f3e15a8a7d732b8f19a107c8e7f9d0ed09c34c7ff->leave($__internal_c153a69786df2af227e4634f3e15a8a7d732b8f19a107c8e7f9d0ed09c34c7ff_prof);

    }

    // line 13
    public function block_platform_body($context, array $blocks = array())
    {
        $__internal_84c96675efbbdfefd21f3b6224ea5bdd9d0c9f050a7d9886927624ca83dc5b98 = $this->env->getExtension("native_profiler");
        $__internal_84c96675efbbdfefd21f3b6224ea5bdd9d0c9f050a7d9886927624ca83dc5b98->enter($__internal_84c96675efbbdfefd21f3b6224ea5bdd9d0c9f050a7d9886927624ca83dc5b98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "platform_body"));

        // line 14
        echo "\t";
        
        $__internal_84c96675efbbdfefd21f3b6224ea5bdd9d0c9f050a7d9886927624ca83dc5b98->leave($__internal_84c96675efbbdfefd21f3b6224ea5bdd9d0c9f050a7d9886927624ca83dc5b98_prof);

    }

    public function getTemplateName()
    {
        return "LamaDelRayPlatformBundle::layout2.html.twig";
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
