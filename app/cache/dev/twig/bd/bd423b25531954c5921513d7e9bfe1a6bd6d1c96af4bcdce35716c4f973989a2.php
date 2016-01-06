<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_79c10820cdf585858cfec50fad702687e47ef47ca4a13b21ee16f420530666f8 extends Twig_Template
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
        $__internal_4d320b5139bca242ddeb636ec852942c918412bc3c0b4d9b27b96cc98f3a5050 = $this->env->getExtension("native_profiler");
        $__internal_4d320b5139bca242ddeb636ec852942c918412bc3c0b4d9b27b96cc98f3a5050->enter($__internal_4d320b5139bca242ddeb636ec852942c918412bc3c0b4d9b27b96cc98f3a5050_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_4d320b5139bca242ddeb636ec852942c918412bc3c0b4d9b27b96cc98f3a5050->leave($__internal_4d320b5139bca242ddeb636ec852942c918412bc3c0b4d9b27b96cc98f3a5050_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
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
