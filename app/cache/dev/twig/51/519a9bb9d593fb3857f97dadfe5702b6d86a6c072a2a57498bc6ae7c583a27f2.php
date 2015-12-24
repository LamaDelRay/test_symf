<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_6c7efcd6915dbfa194b04d8acf18722f2db3ca5f03d728045d89304897c2a76f extends Twig_Template
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
        $__internal_d3be40495d847264b998e93531fd158d480ee98f47cf2725ccd8097f8b6c6487 = $this->env->getExtension("native_profiler");
        $__internal_d3be40495d847264b998e93531fd158d480ee98f47cf2725ccd8097f8b6c6487->enter($__internal_d3be40495d847264b998e93531fd158d480ee98f47cf2725ccd8097f8b6c6487_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d3be40495d847264b998e93531fd158d480ee98f47cf2725ccd8097f8b6c6487->leave($__internal_d3be40495d847264b998e93531fd158d480ee98f47cf2725ccd8097f8b6c6487_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_c84d54488fa317d6d4b47c3035644e0a0a28dccb358e566aef5f0fd3b7bc2411 = $this->env->getExtension("native_profiler");
        $__internal_c84d54488fa317d6d4b47c3035644e0a0a28dccb358e566aef5f0fd3b7bc2411->enter($__internal_c84d54488fa317d6d4b47c3035644e0a0a28dccb358e566aef5f0fd3b7bc2411_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_c84d54488fa317d6d4b47c3035644e0a0a28dccb358e566aef5f0fd3b7bc2411->leave($__internal_c84d54488fa317d6d4b47c3035644e0a0a28dccb358e566aef5f0fd3b7bc2411_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_4d32e329c9ec4b9435003c326a51d28b6b9d5688e1328c284c9e7369eaf0f635 = $this->env->getExtension("native_profiler");
        $__internal_4d32e329c9ec4b9435003c326a51d28b6b9d5688e1328c284c9e7369eaf0f635->enter($__internal_4d32e329c9ec4b9435003c326a51d28b6b9d5688e1328c284c9e7369eaf0f635_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_4d32e329c9ec4b9435003c326a51d28b6b9d5688e1328c284c9e7369eaf0f635->leave($__internal_4d32e329c9ec4b9435003c326a51d28b6b9d5688e1328c284c9e7369eaf0f635_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_62eb8d6b13f8b4619e2497f1b2864bd7ed6729f146fcc3b0e633fbbd70597117 = $this->env->getExtension("native_profiler");
        $__internal_62eb8d6b13f8b4619e2497f1b2864bd7ed6729f146fcc3b0e633fbbd70597117->enter($__internal_62eb8d6b13f8b4619e2497f1b2864bd7ed6729f146fcc3b0e633fbbd70597117_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_62eb8d6b13f8b4619e2497f1b2864bd7ed6729f146fcc3b0e633fbbd70597117->leave($__internal_62eb8d6b13f8b4619e2497f1b2864bd7ed6729f146fcc3b0e633fbbd70597117_prof);

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
