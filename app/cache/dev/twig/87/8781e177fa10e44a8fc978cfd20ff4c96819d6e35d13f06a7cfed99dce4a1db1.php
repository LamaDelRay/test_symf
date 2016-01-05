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
        $__internal_799fde8251c5259082bfca5eb269efd79c8a1cff5e63ba707ceb163de97ed47b = $this->env->getExtension("native_profiler");
        $__internal_799fde8251c5259082bfca5eb269efd79c8a1cff5e63ba707ceb163de97ed47b->enter($__internal_799fde8251c5259082bfca5eb269efd79c8a1cff5e63ba707ceb163de97ed47b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LamaDelRayPlatformBundle::layout2.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_799fde8251c5259082bfca5eb269efd79c8a1cff5e63ba707ceb163de97ed47b->leave($__internal_799fde8251c5259082bfca5eb269efd79c8a1cff5e63ba707ceb163de97ed47b_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_72259de075914c64fd0f17f7a2a855d6b1f29e268bc91864904a6968574dd6aa = $this->env->getExtension("native_profiler");
        $__internal_72259de075914c64fd0f17f7a2a855d6b1f29e268bc91864904a6968574dd6aa->enter($__internal_72259de075914c64fd0f17f7a2a855d6b1f29e268bc91864904a6968574dd6aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "\tAnnonces - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_72259de075914c64fd0f17f7a2a855d6b1f29e268bc91864904a6968574dd6aa->leave($__internal_72259de075914c64fd0f17f7a2a855d6b1f29e268bc91864904a6968574dd6aa_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_d1fd571890f020313a1970efb740815ab5d1c14aa14d01c787db8850635ee039 = $this->env->getExtension("native_profiler");
        $__internal_d1fd571890f020313a1970efb740815ab5d1c14aa14d01c787db8850635ee039->enter($__internal_d1fd571890f020313a1970efb740815ab5d1c14aa14d01c787db8850635ee039_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_d1fd571890f020313a1970efb740815ab5d1c14aa14d01c787db8850635ee039->leave($__internal_d1fd571890f020313a1970efb740815ab5d1c14aa14d01c787db8850635ee039_prof);

    }

    // line 13
    public function block_platform_body($context, array $blocks = array())
    {
        $__internal_92060cc54e3551b04872872e7fe247254eaabdfa189168304fc5acfe9c74530e = $this->env->getExtension("native_profiler");
        $__internal_92060cc54e3551b04872872e7fe247254eaabdfa189168304fc5acfe9c74530e->enter($__internal_92060cc54e3551b04872872e7fe247254eaabdfa189168304fc5acfe9c74530e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "platform_body"));

        // line 14
        echo "\t";
        
        $__internal_92060cc54e3551b04872872e7fe247254eaabdfa189168304fc5acfe9c74530e->leave($__internal_92060cc54e3551b04872872e7fe247254eaabdfa189168304fc5acfe9c74530e_prof);

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
