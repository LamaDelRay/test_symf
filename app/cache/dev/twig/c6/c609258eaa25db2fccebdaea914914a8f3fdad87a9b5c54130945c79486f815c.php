<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_73645ccc3f4d988da5c8471c1bf5391a45ebec0ac2129793ac09227c0b33dc9d extends Twig_Template
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
        $__internal_49b262ab9d5af16400bc1dac00be4192f931333efe7013766f10c4392c81db43 = $this->env->getExtension("native_profiler");
        $__internal_49b262ab9d5af16400bc1dac00be4192f931333efe7013766f10c4392c81db43->enter($__internal_49b262ab9d5af16400bc1dac00be4192f931333efe7013766f10c4392c81db43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_49b262ab9d5af16400bc1dac00be4192f931333efe7013766f10c4392c81db43->leave($__internal_49b262ab9d5af16400bc1dac00be4192f931333efe7013766f10c4392c81db43_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_1db9e10a33376608fe1cd9c12cae13b77f5ac28027b8847730dfb583481ebc7d = $this->env->getExtension("native_profiler");
        $__internal_1db9e10a33376608fe1cd9c12cae13b77f5ac28027b8847730dfb583481ebc7d->enter($__internal_1db9e10a33376608fe1cd9c12cae13b77f5ac28027b8847730dfb583481ebc7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_1db9e10a33376608fe1cd9c12cae13b77f5ac28027b8847730dfb583481ebc7d->leave($__internal_1db9e10a33376608fe1cd9c12cae13b77f5ac28027b8847730dfb583481ebc7d_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_0c7ca4953eb2dd6a5c7b86981fa3528b106489fbf2a00c9fd813dc20a9eaf40c = $this->env->getExtension("native_profiler");
        $__internal_0c7ca4953eb2dd6a5c7b86981fa3528b106489fbf2a00c9fd813dc20a9eaf40c->enter($__internal_0c7ca4953eb2dd6a5c7b86981fa3528b106489fbf2a00c9fd813dc20a9eaf40c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_0c7ca4953eb2dd6a5c7b86981fa3528b106489fbf2a00c9fd813dc20a9eaf40c->leave($__internal_0c7ca4953eb2dd6a5c7b86981fa3528b106489fbf2a00c9fd813dc20a9eaf40c_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_8f999f6f2879aa279c8484e0335d8938ba129659308513c62b84927bd07d674d = $this->env->getExtension("native_profiler");
        $__internal_8f999f6f2879aa279c8484e0335d8938ba129659308513c62b84927bd07d674d->enter($__internal_8f999f6f2879aa279c8484e0335d8938ba129659308513c62b84927bd07d674d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_8f999f6f2879aa279c8484e0335d8938ba129659308513c62b84927bd07d674d->leave($__internal_8f999f6f2879aa279c8484e0335d8938ba129659308513c62b84927bd07d674d_prof);

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
