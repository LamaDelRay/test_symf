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
        $__internal_fe7a2e195c8f0c642aa82f45c273b42ec070076efc4d97723e386467a1b8d08b = $this->env->getExtension("native_profiler");
        $__internal_fe7a2e195c8f0c642aa82f45c273b42ec070076efc4d97723e386467a1b8d08b->enter($__internal_fe7a2e195c8f0c642aa82f45c273b42ec070076efc4d97723e386467a1b8d08b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LamaDelRayPlatformBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fe7a2e195c8f0c642aa82f45c273b42ec070076efc4d97723e386467a1b8d08b->leave($__internal_fe7a2e195c8f0c642aa82f45c273b42ec070076efc4d97723e386467a1b8d08b_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_5cd0165f766503acd85eb2ac9b509fc4cc63db9134f258dd5f8f8a93163f1661 = $this->env->getExtension("native_profiler");
        $__internal_5cd0165f766503acd85eb2ac9b509fc4cc63db9134f258dd5f8f8a93163f1661->enter($__internal_5cd0165f766503acd85eb2ac9b509fc4cc63db9134f258dd5f8f8a93163f1661_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "\tAnnonces - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_5cd0165f766503acd85eb2ac9b509fc4cc63db9134f258dd5f8f8a93163f1661->leave($__internal_5cd0165f766503acd85eb2ac9b509fc4cc63db9134f258dd5f8f8a93163f1661_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_829bceff22c955313469bff4fe2c11ea2b1e6ae1771e24fe3e0aaf811209028a = $this->env->getExtension("native_profiler");
        $__internal_829bceff22c955313469bff4fe2c11ea2b1e6ae1771e24fe3e0aaf811209028a->enter($__internal_829bceff22c955313469bff4fe2c11ea2b1e6ae1771e24fe3e0aaf811209028a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_829bceff22c955313469bff4fe2c11ea2b1e6ae1771e24fe3e0aaf811209028a->leave($__internal_829bceff22c955313469bff4fe2c11ea2b1e6ae1771e24fe3e0aaf811209028a_prof);

    }

    // line 13
    public function block_platform_body($context, array $blocks = array())
    {
        $__internal_82459e7481056c858dbbd706efdcf1a98dfd721a09f38c60bfdde45c54f25ab7 = $this->env->getExtension("native_profiler");
        $__internal_82459e7481056c858dbbd706efdcf1a98dfd721a09f38c60bfdde45c54f25ab7->enter($__internal_82459e7481056c858dbbd706efdcf1a98dfd721a09f38c60bfdde45c54f25ab7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "platform_body"));

        // line 14
        echo "\t";
        
        $__internal_82459e7481056c858dbbd706efdcf1a98dfd721a09f38c60bfdde45c54f25ab7->leave($__internal_82459e7481056c858dbbd706efdcf1a98dfd721a09f38c60bfdde45c54f25ab7_prof);

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
