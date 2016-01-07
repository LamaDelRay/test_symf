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
        $__internal_15126f78174a054f0a35d5d2f917aa22d2c62d5b5946a947ba23150727247f91 = $this->env->getExtension("native_profiler");
        $__internal_15126f78174a054f0a35d5d2f917aa22d2c62d5b5946a947ba23150727247f91->enter($__internal_15126f78174a054f0a35d5d2f917aa22d2c62d5b5946a947ba23150727247f91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_15126f78174a054f0a35d5d2f917aa22d2c62d5b5946a947ba23150727247f91->leave($__internal_15126f78174a054f0a35d5d2f917aa22d2c62d5b5946a947ba23150727247f91_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_517dbda1e6c732a2e3ecd5dbf682418a0efd30f4120033afa4555c3249845b67 = $this->env->getExtension("native_profiler");
        $__internal_517dbda1e6c732a2e3ecd5dbf682418a0efd30f4120033afa4555c3249845b67->enter($__internal_517dbda1e6c732a2e3ecd5dbf682418a0efd30f4120033afa4555c3249845b67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_517dbda1e6c732a2e3ecd5dbf682418a0efd30f4120033afa4555c3249845b67->leave($__internal_517dbda1e6c732a2e3ecd5dbf682418a0efd30f4120033afa4555c3249845b67_prof);

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
