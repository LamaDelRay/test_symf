<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_33f57888984e4c9a195ff9ae19caa93530d2dbf9717a65e6dcdba2c7cd619206 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b917fddab8c0d089f06ccdac1f4646ab9b66e2e501a703c9247f6581e6646021 = $this->env->getExtension("native_profiler");
        $__internal_b917fddab8c0d089f06ccdac1f4646ab9b66e2e501a703c9247f6581e6646021->enter($__internal_b917fddab8c0d089f06ccdac1f4646ab9b66e2e501a703c9247f6581e6646021_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b917fddab8c0d089f06ccdac1f4646ab9b66e2e501a703c9247f6581e6646021->leave($__internal_b917fddab8c0d089f06ccdac1f4646ab9b66e2e501a703c9247f6581e6646021_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_5869757a9e96ef7ebd51075a024a80673e383eebd1e9a3299b339e85c9c1fe54 = $this->env->getExtension("native_profiler");
        $__internal_5869757a9e96ef7ebd51075a024a80673e383eebd1e9a3299b339e85c9c1fe54->enter($__internal_5869757a9e96ef7ebd51075a024a80673e383eebd1e9a3299b339e85c9c1fe54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_5869757a9e96ef7ebd51075a024a80673e383eebd1e9a3299b339e85c9c1fe54->leave($__internal_5869757a9e96ef7ebd51075a024a80673e383eebd1e9a3299b339e85c9c1fe54_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_ce7bbcf4be21c44c8eb08d4ed26e2615fe46d8b28203c65471dc0af541b2e1f1 = $this->env->getExtension("native_profiler");
        $__internal_ce7bbcf4be21c44c8eb08d4ed26e2615fe46d8b28203c65471dc0af541b2e1f1->enter($__internal_ce7bbcf4be21c44c8eb08d4ed26e2615fe46d8b28203c65471dc0af541b2e1f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_ce7bbcf4be21c44c8eb08d4ed26e2615fe46d8b28203c65471dc0af541b2e1f1->leave($__internal_ce7bbcf4be21c44c8eb08d4ed26e2615fe46d8b28203c65471dc0af541b2e1f1_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_704a05a3888ba854e8a71351a2e9e1719766290edb5c068fa474a1377e928aef = $this->env->getExtension("native_profiler");
        $__internal_704a05a3888ba854e8a71351a2e9e1719766290edb5c068fa474a1377e928aef->enter($__internal_704a05a3888ba854e8a71351a2e9e1719766290edb5c068fa474a1377e928aef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_704a05a3888ba854e8a71351a2e9e1719766290edb5c068fa474a1377e928aef->leave($__internal_704a05a3888ba854e8a71351a2e9e1719766290edb5c068fa474a1377e928aef_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
