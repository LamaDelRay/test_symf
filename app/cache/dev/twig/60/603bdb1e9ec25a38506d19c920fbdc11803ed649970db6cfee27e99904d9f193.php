<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_6fb6da9e5d19f415f94af572a714d13103858bec018b47e4185874c88bc2e4e8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a33997dd2f4ac34d125cd030aff184cfa5c44f4b5644dbd2994c70512264ffe8 = $this->env->getExtension("native_profiler");
        $__internal_a33997dd2f4ac34d125cd030aff184cfa5c44f4b5644dbd2994c70512264ffe8->enter($__internal_a33997dd2f4ac34d125cd030aff184cfa5c44f4b5644dbd2994c70512264ffe8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_a33997dd2f4ac34d125cd030aff184cfa5c44f4b5644dbd2994c70512264ffe8->leave($__internal_a33997dd2f4ac34d125cd030aff184cfa5c44f4b5644dbd2994c70512264ffe8_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}*/
/* */
