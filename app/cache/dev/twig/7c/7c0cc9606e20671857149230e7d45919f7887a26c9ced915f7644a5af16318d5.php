<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_f7165f3a76cd419cb9428bec26f35cab4ca92087a3f7bf2d2ac64331173199d8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1b827f5d8c510bea0b405eb674c6c1290a01567689ca1c98ce04719731559c9f = $this->env->getExtension("native_profiler");
        $__internal_1b827f5d8c510bea0b405eb674c6c1290a01567689ca1c98ce04719731559c9f->enter($__internal_1b827f5d8c510bea0b405eb674c6c1290a01567689ca1c98ce04719731559c9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_1b827f5d8c510bea0b405eb674c6c1290a01567689ca1c98ce04719731559c9f->leave($__internal_1b827f5d8c510bea0b405eb674c6c1290a01567689ca1c98ce04719731559c9f_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_a67af51e135175523be67174f8ab718b055f5206e9108938a9c875c4acc4405a = $this->env->getExtension("native_profiler");
        $__internal_a67af51e135175523be67174f8ab718b055f5206e9108938a9c875c4acc4405a->enter($__internal_a67af51e135175523be67174f8ab718b055f5206e9108938a9c875c4acc4405a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_a67af51e135175523be67174f8ab718b055f5206e9108938a9c875c4acc4405a->leave($__internal_a67af51e135175523be67174f8ab718b055f5206e9108938a9c875c4acc4405a_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block panel '' %}*/
/* */
