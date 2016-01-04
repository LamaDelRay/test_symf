<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_23728440aad0444b9d61162aeca8d32d2d4a02ca43454d2c10050ebc3a43c903 extends Twig_Template
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
        $__internal_5c6ec58f16968ce9433c775f1c6911aa50fe2e00b2290be5f2784e36630727c2 = $this->env->getExtension("native_profiler");
        $__internal_5c6ec58f16968ce9433c775f1c6911aa50fe2e00b2290be5f2784e36630727c2->enter($__internal_5c6ec58f16968ce9433c775f1c6911aa50fe2e00b2290be5f2784e36630727c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_5c6ec58f16968ce9433c775f1c6911aa50fe2e00b2290be5f2784e36630727c2->leave($__internal_5c6ec58f16968ce9433c775f1c6911aa50fe2e00b2290be5f2784e36630727c2_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_a365b821e15c15568c9eb672de69e9d26323ecb4e5a703c2e466507fcd06c34d = $this->env->getExtension("native_profiler");
        $__internal_a365b821e15c15568c9eb672de69e9d26323ecb4e5a703c2e466507fcd06c34d->enter($__internal_a365b821e15c15568c9eb672de69e9d26323ecb4e5a703c2e466507fcd06c34d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_a365b821e15c15568c9eb672de69e9d26323ecb4e5a703c2e466507fcd06c34d->leave($__internal_a365b821e15c15568c9eb672de69e9d26323ecb4e5a703c2e466507fcd06c34d_prof);

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
