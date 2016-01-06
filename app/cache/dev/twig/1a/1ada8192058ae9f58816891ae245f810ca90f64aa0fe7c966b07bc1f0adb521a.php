<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_11e925290a589a32d182ba34f2c8dc1a2e5cd046ae9aec5655fedec94cd94331 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_8a254cae91aeefead77e35bc2517b0221b99c88e0bff52467a562d5265d170ac = $this->env->getExtension("native_profiler");
        $__internal_8a254cae91aeefead77e35bc2517b0221b99c88e0bff52467a562d5265d170ac->enter($__internal_8a254cae91aeefead77e35bc2517b0221b99c88e0bff52467a562d5265d170ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8a254cae91aeefead77e35bc2517b0221b99c88e0bff52467a562d5265d170ac->leave($__internal_8a254cae91aeefead77e35bc2517b0221b99c88e0bff52467a562d5265d170ac_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_33b657228bf30a9e1c02ff983b49c699b334c3f33d2e3173bd1d99b860530064 = $this->env->getExtension("native_profiler");
        $__internal_33b657228bf30a9e1c02ff983b49c699b334c3f33d2e3173bd1d99b860530064->enter($__internal_33b657228bf30a9e1c02ff983b49c699b334c3f33d2e3173bd1d99b860530064_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_33b657228bf30a9e1c02ff983b49c699b334c3f33d2e3173bd1d99b860530064->leave($__internal_33b657228bf30a9e1c02ff983b49c699b334c3f33d2e3173bd1d99b860530064_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_93a448df4015f337e92d6793a9007e3baca7aaaaa3cc404e1be90a4c277186ea = $this->env->getExtension("native_profiler");
        $__internal_93a448df4015f337e92d6793a9007e3baca7aaaaa3cc404e1be90a4c277186ea->enter($__internal_93a448df4015f337e92d6793a9007e3baca7aaaaa3cc404e1be90a4c277186ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_93a448df4015f337e92d6793a9007e3baca7aaaaa3cc404e1be90a4c277186ea->leave($__internal_93a448df4015f337e92d6793a9007e3baca7aaaaa3cc404e1be90a4c277186ea_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_7e1d84ec008d2c55eb5d85722c138ba511c1220a6b2b25d7af205461442c1986 = $this->env->getExtension("native_profiler");
        $__internal_7e1d84ec008d2c55eb5d85722c138ba511c1220a6b2b25d7af205461442c1986->enter($__internal_7e1d84ec008d2c55eb5d85722c138ba511c1220a6b2b25d7af205461442c1986_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_7e1d84ec008d2c55eb5d85722c138ba511c1220a6b2b25d7af205461442c1986->leave($__internal_7e1d84ec008d2c55eb5d85722c138ba511c1220a6b2b25d7af205461442c1986_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 33,  114 => 32,  108 => 28,  106 => 27,  102 => 25,  96 => 24,  88 => 21,  82 => 17,  80 => 16,  75 => 14,  70 => 13,  64 => 12,  54 => 9,  48 => 6,  45 => 5,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     {% if collector.hasexception %}*/
/*         <style>*/
/*             {{ render(path('_profiler_exception_css', { token: token })) }}*/
/*         </style>*/
/*     {% endif %}*/
/*     {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block menu %}*/
/*     <span class="label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}">*/
/*         <span class="icon">{{ include('@WebProfiler/Icon/exception.svg') }}</span>*/
/*         <strong>Exception</strong>*/
/*         {% if collector.hasexception %}*/
/*             <span class="count">*/
/*                 <span>1</span>*/
/*             </span>*/
/*         {% endif %}*/
/*     </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     <h2>Exceptions</h2>*/
/* */
/*     {% if not collector.hasexception %}*/
/*         <div class="empty">*/
/*             <p>No exception was thrown and caught during the request.</p>*/
/*         </div>*/
/*     {% else %}*/
/*         <div class="sf-reset">*/
/*             {{ render(path('_profiler_exception', { token: token })) }}*/
/*         </div>*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
