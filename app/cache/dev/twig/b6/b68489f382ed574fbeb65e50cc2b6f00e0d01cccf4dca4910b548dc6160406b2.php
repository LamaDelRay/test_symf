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
        $__internal_61677a58874372fd3f965ddf7446c2ea74f3b52db11e7608261b56b6d79334a2 = $this->env->getExtension("native_profiler");
        $__internal_61677a58874372fd3f965ddf7446c2ea74f3b52db11e7608261b56b6d79334a2->enter($__internal_61677a58874372fd3f965ddf7446c2ea74f3b52db11e7608261b56b6d79334a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_61677a58874372fd3f965ddf7446c2ea74f3b52db11e7608261b56b6d79334a2->leave($__internal_61677a58874372fd3f965ddf7446c2ea74f3b52db11e7608261b56b6d79334a2_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_8100b2a006fb560761493f62c164a634b8f9a031514265ea4fc3b8b755dd8e47 = $this->env->getExtension("native_profiler");
        $__internal_8100b2a006fb560761493f62c164a634b8f9a031514265ea4fc3b8b755dd8e47->enter($__internal_8100b2a006fb560761493f62c164a634b8f9a031514265ea4fc3b8b755dd8e47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_8100b2a006fb560761493f62c164a634b8f9a031514265ea4fc3b8b755dd8e47->leave($__internal_8100b2a006fb560761493f62c164a634b8f9a031514265ea4fc3b8b755dd8e47_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_3def2a3ff857bb6eebbb6e071481f8eed72eb144e608dec4d20b5afd5d866c4a = $this->env->getExtension("native_profiler");
        $__internal_3def2a3ff857bb6eebbb6e071481f8eed72eb144e608dec4d20b5afd5d866c4a->enter($__internal_3def2a3ff857bb6eebbb6e071481f8eed72eb144e608dec4d20b5afd5d866c4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_3def2a3ff857bb6eebbb6e071481f8eed72eb144e608dec4d20b5afd5d866c4a->leave($__internal_3def2a3ff857bb6eebbb6e071481f8eed72eb144e608dec4d20b5afd5d866c4a_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_b0b2a3d8a3a2eff3f7be4bf0772cc5dc9c03bd991faf102a9573d2dc4e2131e7 = $this->env->getExtension("native_profiler");
        $__internal_b0b2a3d8a3a2eff3f7be4bf0772cc5dc9c03bd991faf102a9573d2dc4e2131e7->enter($__internal_b0b2a3d8a3a2eff3f7be4bf0772cc5dc9c03bd991faf102a9573d2dc4e2131e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_b0b2a3d8a3a2eff3f7be4bf0772cc5dc9c03bd991faf102a9573d2dc4e2131e7->leave($__internal_b0b2a3d8a3a2eff3f7be4bf0772cc5dc9c03bd991faf102a9573d2dc4e2131e7_prof);

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
