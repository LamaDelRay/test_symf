<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_9117afce4656a38a1e89af679b922103b3e5b93d0b6cc2aa82415c5c96917453 extends Twig_Template
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
        $__internal_9871c0ecc1c6d08674234b62c14f915729ea27b1d3a93d8085a64a41dba6e8c0 = $this->env->getExtension("native_profiler");
        $__internal_9871c0ecc1c6d08674234b62c14f915729ea27b1d3a93d8085a64a41dba6e8c0->enter($__internal_9871c0ecc1c6d08674234b62c14f915729ea27b1d3a93d8085a64a41dba6e8c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_9871c0ecc1c6d08674234b62c14f915729ea27b1d3a93d8085a64a41dba6e8c0->leave($__internal_9871c0ecc1c6d08674234b62c14f915729ea27b1d3a93d8085a64a41dba6e8c0_prof);

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
