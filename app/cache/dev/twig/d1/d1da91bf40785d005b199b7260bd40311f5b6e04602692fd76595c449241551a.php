<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_5450ab04d26905fea1d011c4fa127b8df76ea26fca9ec29ae518b1d2e8cb24dc extends Twig_Template
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
        $__internal_76051a17853951eb765daa1c7a40304d77d1b2c37952c4e23499238772b7565a = $this->env->getExtension("native_profiler");
        $__internal_76051a17853951eb765daa1c7a40304d77d1b2c37952c4e23499238772b7565a->enter($__internal_76051a17853951eb765daa1c7a40304d77d1b2c37952c4e23499238772b7565a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_76051a17853951eb765daa1c7a40304d77d1b2c37952c4e23499238772b7565a->leave($__internal_76051a17853951eb765daa1c7a40304d77d1b2c37952c4e23499238772b7565a_prof);

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