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
        $__internal_887f7f9f1b6eb9ef3df780e0642e13ca7426db9763dc0587d9016c0323791bb7 = $this->env->getExtension("native_profiler");
        $__internal_887f7f9f1b6eb9ef3df780e0642e13ca7426db9763dc0587d9016c0323791bb7->enter($__internal_887f7f9f1b6eb9ef3df780e0642e13ca7426db9763dc0587d9016c0323791bb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LamaDelRayPlatformBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_887f7f9f1b6eb9ef3df780e0642e13ca7426db9763dc0587d9016c0323791bb7->leave($__internal_887f7f9f1b6eb9ef3df780e0642e13ca7426db9763dc0587d9016c0323791bb7_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_cb38056a53dd7e2e37bb902c54d5bf82a40d32d425fe5f0bc3da1ff845599739 = $this->env->getExtension("native_profiler");
        $__internal_cb38056a53dd7e2e37bb902c54d5bf82a40d32d425fe5f0bc3da1ff845599739->enter($__internal_cb38056a53dd7e2e37bb902c54d5bf82a40d32d425fe5f0bc3da1ff845599739_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "\tAnnonces - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_cb38056a53dd7e2e37bb902c54d5bf82a40d32d425fe5f0bc3da1ff845599739->leave($__internal_cb38056a53dd7e2e37bb902c54d5bf82a40d32d425fe5f0bc3da1ff845599739_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_38f1cce7d9bdd27646a38ffe693b8e21d6ddf743f04d20ae84bfec0771ea698e = $this->env->getExtension("native_profiler");
        $__internal_38f1cce7d9bdd27646a38ffe693b8e21d6ddf743f04d20ae84bfec0771ea698e->enter($__internal_38f1cce7d9bdd27646a38ffe693b8e21d6ddf743f04d20ae84bfec0771ea698e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_38f1cce7d9bdd27646a38ffe693b8e21d6ddf743f04d20ae84bfec0771ea698e->leave($__internal_38f1cce7d9bdd27646a38ffe693b8e21d6ddf743f04d20ae84bfec0771ea698e_prof);

    }

    // line 13
    public function block_platform_body($context, array $blocks = array())
    {
        $__internal_a969ed9f6af6bb61068290126f124ed08d9179a43d8e1eda3ff1ebd28b46cbe9 = $this->env->getExtension("native_profiler");
        $__internal_a969ed9f6af6bb61068290126f124ed08d9179a43d8e1eda3ff1ebd28b46cbe9->enter($__internal_a969ed9f6af6bb61068290126f124ed08d9179a43d8e1eda3ff1ebd28b46cbe9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "platform_body"));

        // line 14
        echo "\t";
        
        $__internal_a969ed9f6af6bb61068290126f124ed08d9179a43d8e1eda3ff1ebd28b46cbe9->leave($__internal_a969ed9f6af6bb61068290126f124ed08d9179a43d8e1eda3ff1ebd28b46cbe9_prof);

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
