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
        $__internal_fab7255d5c310d44e6e6e94897ca6f1f6a6bcbcab24de5316ab56c7e2fe543ea = $this->env->getExtension("native_profiler");
        $__internal_fab7255d5c310d44e6e6e94897ca6f1f6a6bcbcab24de5316ab56c7e2fe543ea->enter($__internal_fab7255d5c310d44e6e6e94897ca6f1f6a6bcbcab24de5316ab56c7e2fe543ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_fab7255d5c310d44e6e6e94897ca6f1f6a6bcbcab24de5316ab56c7e2fe543ea->leave($__internal_fab7255d5c310d44e6e6e94897ca6f1f6a6bcbcab24de5316ab56c7e2fe543ea_prof);

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
