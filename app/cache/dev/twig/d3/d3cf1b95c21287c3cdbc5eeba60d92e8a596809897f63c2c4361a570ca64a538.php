<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_fd5d43a9a99539bc438a6298764e01945763f2ee9aa06ee60ea23137bc9e5f6a extends Twig_Template
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
        $__internal_b57fb9dfa44efdc9cee90697e88bf827da890efedb1cafabfc081408c262cbf4 = $this->env->getExtension("native_profiler");
        $__internal_b57fb9dfa44efdc9cee90697e88bf827da890efedb1cafabfc081408c262cbf4->enter($__internal_b57fb9dfa44efdc9cee90697e88bf827da890efedb1cafabfc081408c262cbf4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_b57fb9dfa44efdc9cee90697e88bf827da890efedb1cafabfc081408c262cbf4->leave($__internal_b57fb9dfa44efdc9cee90697e88bf827da890efedb1cafabfc081408c262cbf4_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */
