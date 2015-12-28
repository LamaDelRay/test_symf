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
        $__internal_d9d78f9770344be12f13369ac998116b772431d4ad5789bf6768bacf7d74a75c = $this->env->getExtension("native_profiler");
        $__internal_d9d78f9770344be12f13369ac998116b772431d4ad5789bf6768bacf7d74a75c->enter($__internal_d9d78f9770344be12f13369ac998116b772431d4ad5789bf6768bacf7d74a75c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d9d78f9770344be12f13369ac998116b772431d4ad5789bf6768bacf7d74a75c->leave($__internal_d9d78f9770344be12f13369ac998116b772431d4ad5789bf6768bacf7d74a75c_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_f45f681f78a6e0b16e606b54577eb958a767964491c86452893116d6844d2141 = $this->env->getExtension("native_profiler");
        $__internal_f45f681f78a6e0b16e606b54577eb958a767964491c86452893116d6844d2141->enter($__internal_f45f681f78a6e0b16e606b54577eb958a767964491c86452893116d6844d2141_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_f45f681f78a6e0b16e606b54577eb958a767964491c86452893116d6844d2141->leave($__internal_f45f681f78a6e0b16e606b54577eb958a767964491c86452893116d6844d2141_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_2c1e47c70ca789edc7ab174dc78168f1da0a9e95e4416bacfe45042b8b1e7133 = $this->env->getExtension("native_profiler");
        $__internal_2c1e47c70ca789edc7ab174dc78168f1da0a9e95e4416bacfe45042b8b1e7133->enter($__internal_2c1e47c70ca789edc7ab174dc78168f1da0a9e95e4416bacfe45042b8b1e7133_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_2c1e47c70ca789edc7ab174dc78168f1da0a9e95e4416bacfe45042b8b1e7133->leave($__internal_2c1e47c70ca789edc7ab174dc78168f1da0a9e95e4416bacfe45042b8b1e7133_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_c730d845e40120faf36e2ba1d5541375a947ba10bbab090118bce81831a1d869 = $this->env->getExtension("native_profiler");
        $__internal_c730d845e40120faf36e2ba1d5541375a947ba10bbab090118bce81831a1d869->enter($__internal_c730d845e40120faf36e2ba1d5541375a947ba10bbab090118bce81831a1d869_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_c730d845e40120faf36e2ba1d5541375a947ba10bbab090118bce81831a1d869->leave($__internal_c730d845e40120faf36e2ba1d5541375a947ba10bbab090118bce81831a1d869_prof);

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
