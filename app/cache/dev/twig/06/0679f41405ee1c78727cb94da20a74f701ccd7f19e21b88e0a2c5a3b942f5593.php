<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_989b3876c8bc6cac881099a8b52239b5bb9182d3dfa5d84b673c23326f128c2a extends Twig_Template
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
        $__internal_7225236e701cb6bc4d56b88a8299ba43ff2f7e23bf9d649b26ce9d84675e6c16 = $this->env->getExtension("native_profiler");
        $__internal_7225236e701cb6bc4d56b88a8299ba43ff2f7e23bf9d649b26ce9d84675e6c16->enter($__internal_7225236e701cb6bc4d56b88a8299ba43ff2f7e23bf9d649b26ce9d84675e6c16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

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
        
        $__internal_7225236e701cb6bc4d56b88a8299ba43ff2f7e23bf9d649b26ce9d84675e6c16->leave($__internal_7225236e701cb6bc4d56b88a8299ba43ff2f7e23bf9d649b26ce9d84675e6c16_prof);

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
