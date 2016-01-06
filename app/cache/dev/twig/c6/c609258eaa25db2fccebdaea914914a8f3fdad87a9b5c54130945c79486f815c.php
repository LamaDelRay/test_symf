<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_73645ccc3f4d988da5c8471c1bf5391a45ebec0ac2129793ac09227c0b33dc9d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
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
        $__internal_68289065abb956782a3938c5c244f59a10cbb6df8fb010ffc50456deea568548 = $this->env->getExtension("native_profiler");
        $__internal_68289065abb956782a3938c5c244f59a10cbb6df8fb010ffc50456deea568548->enter($__internal_68289065abb956782a3938c5c244f59a10cbb6df8fb010ffc50456deea568548_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_68289065abb956782a3938c5c244f59a10cbb6df8fb010ffc50456deea568548->leave($__internal_68289065abb956782a3938c5c244f59a10cbb6df8fb010ffc50456deea568548_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_30686087b02900c7c2ce12c60915b7bd72d4a1f1e6d6867f67c2a0099921c345 = $this->env->getExtension("native_profiler");
        $__internal_30686087b02900c7c2ce12c60915b7bd72d4a1f1e6d6867f67c2a0099921c345->enter($__internal_30686087b02900c7c2ce12c60915b7bd72d4a1f1e6d6867f67c2a0099921c345_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_30686087b02900c7c2ce12c60915b7bd72d4a1f1e6d6867f67c2a0099921c345->leave($__internal_30686087b02900c7c2ce12c60915b7bd72d4a1f1e6d6867f67c2a0099921c345_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_9d8c7d7a032c277c6116d776e71fdad2800aa389e4960a318b03e2227c47b519 = $this->env->getExtension("native_profiler");
        $__internal_9d8c7d7a032c277c6116d776e71fdad2800aa389e4960a318b03e2227c47b519->enter($__internal_9d8c7d7a032c277c6116d776e71fdad2800aa389e4960a318b03e2227c47b519_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_9d8c7d7a032c277c6116d776e71fdad2800aa389e4960a318b03e2227c47b519->leave($__internal_9d8c7d7a032c277c6116d776e71fdad2800aa389e4960a318b03e2227c47b519_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_e17bfb88b70cb7abbc9a36da8966126f4f3e83a694d9819ac249e1fc99c75844 = $this->env->getExtension("native_profiler");
        $__internal_e17bfb88b70cb7abbc9a36da8966126f4f3e83a694d9819ac249e1fc99c75844->enter($__internal_e17bfb88b70cb7abbc9a36da8966126f4f3e83a694d9819ac249e1fc99c75844_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_e17bfb88b70cb7abbc9a36da8966126f4f3e83a694d9819ac249e1fc99c75844->leave($__internal_e17bfb88b70cb7abbc9a36da8966126f4f3e83a694d9819ac249e1fc99c75844_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
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
