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
        $__internal_3576c30edf3b4c62a70e959e799ce6281db668cd60d7f0b4068017949a1c409f = $this->env->getExtension("native_profiler");
        $__internal_3576c30edf3b4c62a70e959e799ce6281db668cd60d7f0b4068017949a1c409f->enter($__internal_3576c30edf3b4c62a70e959e799ce6281db668cd60d7f0b4068017949a1c409f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3576c30edf3b4c62a70e959e799ce6281db668cd60d7f0b4068017949a1c409f->leave($__internal_3576c30edf3b4c62a70e959e799ce6281db668cd60d7f0b4068017949a1c409f_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_b90aa6cb40866f3ef0e2e61ee859af9b31d7db07f15c2e5b4df7a9c8e8723818 = $this->env->getExtension("native_profiler");
        $__internal_b90aa6cb40866f3ef0e2e61ee859af9b31d7db07f15c2e5b4df7a9c8e8723818->enter($__internal_b90aa6cb40866f3ef0e2e61ee859af9b31d7db07f15c2e5b4df7a9c8e8723818_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_b90aa6cb40866f3ef0e2e61ee859af9b31d7db07f15c2e5b4df7a9c8e8723818->leave($__internal_b90aa6cb40866f3ef0e2e61ee859af9b31d7db07f15c2e5b4df7a9c8e8723818_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_9ab87f37fefa3084e5245cc59c8eff0fff1a359d427cd351cb862036348f28ea = $this->env->getExtension("native_profiler");
        $__internal_9ab87f37fefa3084e5245cc59c8eff0fff1a359d427cd351cb862036348f28ea->enter($__internal_9ab87f37fefa3084e5245cc59c8eff0fff1a359d427cd351cb862036348f28ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_9ab87f37fefa3084e5245cc59c8eff0fff1a359d427cd351cb862036348f28ea->leave($__internal_9ab87f37fefa3084e5245cc59c8eff0fff1a359d427cd351cb862036348f28ea_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_59988620d2e610b5ad5984970a6ca08aacf7c8d4958e5e45fb2fc9de0f124fb4 = $this->env->getExtension("native_profiler");
        $__internal_59988620d2e610b5ad5984970a6ca08aacf7c8d4958e5e45fb2fc9de0f124fb4->enter($__internal_59988620d2e610b5ad5984970a6ca08aacf7c8d4958e5e45fb2fc9de0f124fb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_59988620d2e610b5ad5984970a6ca08aacf7c8d4958e5e45fb2fc9de0f124fb4->leave($__internal_59988620d2e610b5ad5984970a6ca08aacf7c8d4958e5e45fb2fc9de0f124fb4_prof);

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
