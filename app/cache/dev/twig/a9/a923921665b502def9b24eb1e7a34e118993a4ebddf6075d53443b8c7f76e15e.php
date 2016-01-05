<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_6448cab5496071a64fa13c0705d6c814dbbac9249408919a5ca2032d43d0ba42 extends Twig_Template
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
        $__internal_73aed1c8125259f2b9e88bf0a93c3b0f27a4505f2fe59cd26cc5b22e30e30013 = $this->env->getExtension("native_profiler");
        $__internal_73aed1c8125259f2b9e88bf0a93c3b0f27a4505f2fe59cd26cc5b22e30e30013->enter($__internal_73aed1c8125259f2b9e88bf0a93c3b0f27a4505f2fe59cd26cc5b22e30e30013_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_73aed1c8125259f2b9e88bf0a93c3b0f27a4505f2fe59cd26cc5b22e30e30013->leave($__internal_73aed1c8125259f2b9e88bf0a93c3b0f27a4505f2fe59cd26cc5b22e30e30013_prof);

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
