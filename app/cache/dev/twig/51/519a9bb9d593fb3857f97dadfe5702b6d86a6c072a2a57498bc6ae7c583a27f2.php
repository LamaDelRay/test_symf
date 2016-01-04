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
        $__internal_ce3179f192fe51afaab33ad8592f4cc0066162197e14269fb1bcb0d6f7228a05 = $this->env->getExtension("native_profiler");
        $__internal_ce3179f192fe51afaab33ad8592f4cc0066162197e14269fb1bcb0d6f7228a05->enter($__internal_ce3179f192fe51afaab33ad8592f4cc0066162197e14269fb1bcb0d6f7228a05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ce3179f192fe51afaab33ad8592f4cc0066162197e14269fb1bcb0d6f7228a05->leave($__internal_ce3179f192fe51afaab33ad8592f4cc0066162197e14269fb1bcb0d6f7228a05_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_bb2426955bcec8fe290aee3f14364c7a2feab524b2e3aefd95db258be1cb5271 = $this->env->getExtension("native_profiler");
        $__internal_bb2426955bcec8fe290aee3f14364c7a2feab524b2e3aefd95db258be1cb5271->enter($__internal_bb2426955bcec8fe290aee3f14364c7a2feab524b2e3aefd95db258be1cb5271_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_bb2426955bcec8fe290aee3f14364c7a2feab524b2e3aefd95db258be1cb5271->leave($__internal_bb2426955bcec8fe290aee3f14364c7a2feab524b2e3aefd95db258be1cb5271_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_0d26f60163a324f92adb11e84e198dd2a684f49f67cc1e3d03a4bc9fde6834a1 = $this->env->getExtension("native_profiler");
        $__internal_0d26f60163a324f92adb11e84e198dd2a684f49f67cc1e3d03a4bc9fde6834a1->enter($__internal_0d26f60163a324f92adb11e84e198dd2a684f49f67cc1e3d03a4bc9fde6834a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_0d26f60163a324f92adb11e84e198dd2a684f49f67cc1e3d03a4bc9fde6834a1->leave($__internal_0d26f60163a324f92adb11e84e198dd2a684f49f67cc1e3d03a4bc9fde6834a1_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_c6a93558bb78fcf4551d940416c83c4ca8a6587dfeec2a95abd310cf609843ac = $this->env->getExtension("native_profiler");
        $__internal_c6a93558bb78fcf4551d940416c83c4ca8a6587dfeec2a95abd310cf609843ac->enter($__internal_c6a93558bb78fcf4551d940416c83c4ca8a6587dfeec2a95abd310cf609843ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_c6a93558bb78fcf4551d940416c83c4ca8a6587dfeec2a95abd310cf609843ac->leave($__internal_c6a93558bb78fcf4551d940416c83c4ca8a6587dfeec2a95abd310cf609843ac_prof);

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
