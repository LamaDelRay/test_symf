<?php

/* LamaDelRayPlatformBundle::layout2.html.twig */
class __TwigTemplate_6a032fecc1f5f9f741dfc4c37409aa16d3336fe0f8c677af65e22643c1ab0d5e extends Twig_Template
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
        $__internal_a0be2f85b8abadb66d9f528f2ffe4238497b382966529f1efdbba1f35a5faddd = $this->env->getExtension("native_profiler");
        $__internal_a0be2f85b8abadb66d9f528f2ffe4238497b382966529f1efdbba1f35a5faddd->enter($__internal_a0be2f85b8abadb66d9f528f2ffe4238497b382966529f1efdbba1f35a5faddd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LamaDelRayPlatformBundle::layout2.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a0be2f85b8abadb66d9f528f2ffe4238497b382966529f1efdbba1f35a5faddd->leave($__internal_a0be2f85b8abadb66d9f528f2ffe4238497b382966529f1efdbba1f35a5faddd_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_e10317eef2ddffe22e158db8833f78d05eff0a357ad880c3e1e402e8b16dab9e = $this->env->getExtension("native_profiler");
        $__internal_e10317eef2ddffe22e158db8833f78d05eff0a357ad880c3e1e402e8b16dab9e->enter($__internal_e10317eef2ddffe22e158db8833f78d05eff0a357ad880c3e1e402e8b16dab9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "\tAnnonces - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_e10317eef2ddffe22e158db8833f78d05eff0a357ad880c3e1e402e8b16dab9e->leave($__internal_e10317eef2ddffe22e158db8833f78d05eff0a357ad880c3e1e402e8b16dab9e_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_80acabba644face0c69b1cff3692812ccd8a7e7ab34e46eb6cfe2dfe626a5b15 = $this->env->getExtension("native_profiler");
        $__internal_80acabba644face0c69b1cff3692812ccd8a7e7ab34e46eb6cfe2dfe626a5b15->enter($__internal_80acabba644face0c69b1cff3692812ccd8a7e7ab34e46eb6cfe2dfe626a5b15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_80acabba644face0c69b1cff3692812ccd8a7e7ab34e46eb6cfe2dfe626a5b15->leave($__internal_80acabba644face0c69b1cff3692812ccd8a7e7ab34e46eb6cfe2dfe626a5b15_prof);

    }

    // line 13
    public function block_platform_body($context, array $blocks = array())
    {
        $__internal_a5ee525409e9a085897bcb129693a91c9c6cc39fdc2d6fc8fdfc1f57eb7ff0b3 = $this->env->getExtension("native_profiler");
        $__internal_a5ee525409e9a085897bcb129693a91c9c6cc39fdc2d6fc8fdfc1f57eb7ff0b3->enter($__internal_a5ee525409e9a085897bcb129693a91c9c6cc39fdc2d6fc8fdfc1f57eb7ff0b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "platform_body"));

        // line 14
        echo "\t";
        
        $__internal_a5ee525409e9a085897bcb129693a91c9c6cc39fdc2d6fc8fdfc1f57eb7ff0b3->leave($__internal_a5ee525409e9a085897bcb129693a91c9c6cc39fdc2d6fc8fdfc1f57eb7ff0b3_prof);

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
