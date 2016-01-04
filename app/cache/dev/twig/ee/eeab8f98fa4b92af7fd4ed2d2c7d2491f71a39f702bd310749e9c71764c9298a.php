<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_7555d3872f3bee9bb426961e07525626fef942e7d28f864b7cf10828b6e9c862 extends Twig_Template
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
        $__internal_597d5d388694900de29f75546122909f5c093be92d7107826192e501cd39f128 = $this->env->getExtension("native_profiler");
        $__internal_597d5d388694900de29f75546122909f5c093be92d7107826192e501cd39f128->enter($__internal_597d5d388694900de29f75546122909f5c093be92d7107826192e501cd39f128_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_597d5d388694900de29f75546122909f5c093be92d7107826192e501cd39f128->leave($__internal_597d5d388694900de29f75546122909f5c093be92d7107826192e501cd39f128_prof);

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
