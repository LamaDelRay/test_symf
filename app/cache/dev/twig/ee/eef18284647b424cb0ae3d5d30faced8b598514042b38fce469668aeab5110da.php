<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_2894ed09235a451e3eaa702a1a6317b0d17478628df12c826c02d6294f44ce8f extends Twig_Template
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
        $__internal_3264cfdd63905e2618acd6f384bfbab02f5800420d97d94492dc9460ed09112f = $this->env->getExtension("native_profiler");
        $__internal_3264cfdd63905e2618acd6f384bfbab02f5800420d97d94492dc9460ed09112f->enter($__internal_3264cfdd63905e2618acd6f384bfbab02f5800420d97d94492dc9460ed09112f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_3264cfdd63905e2618acd6f384bfbab02f5800420d97d94492dc9460ed09112f->leave($__internal_3264cfdd63905e2618acd6f384bfbab02f5800420d97d94492dc9460ed09112f_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}*/
/* */
