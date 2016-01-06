<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_3cda9ad4a5db89f0f05cd898b9b3806020e9f5c8b0831f5ad09237af3d9b1aa2 extends Twig_Template
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
        $__internal_6aaa665e78386fe775c6d7fb3d12b85c597de1eb39944823950bea674cfd5787 = $this->env->getExtension("native_profiler");
        $__internal_6aaa665e78386fe775c6d7fb3d12b85c597de1eb39944823950bea674cfd5787->enter($__internal_6aaa665e78386fe775c6d7fb3d12b85c597de1eb39944823950bea674cfd5787_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_6aaa665e78386fe775c6d7fb3d12b85c597de1eb39944823950bea674cfd5787->leave($__internal_6aaa665e78386fe775c6d7fb3d12b85c597de1eb39944823950bea674cfd5787_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_334512561e55deed7965a696ce82b74d4c15c534d03695a2ed4229ad65079706 = $this->env->getExtension("native_profiler");
        $__internal_334512561e55deed7965a696ce82b74d4c15c534d03695a2ed4229ad65079706->enter($__internal_334512561e55deed7965a696ce82b74d4c15c534d03695a2ed4229ad65079706_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_334512561e55deed7965a696ce82b74d4c15c534d03695a2ed4229ad65079706->leave($__internal_334512561e55deed7965a696ce82b74d4c15c534d03695a2ed4229ad65079706_prof);

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
