<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_998136fe73f0858f8da50fba9fb69b2989ea76d1a8dd2cff3d283702b59e2430 extends Twig_Template
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
        $__internal_8163c2e457cd560e8848572e9be6105530747ded2cb68a82060ce282108b1ab0 = $this->env->getExtension("native_profiler");
        $__internal_8163c2e457cd560e8848572e9be6105530747ded2cb68a82060ce282108b1ab0->enter($__internal_8163c2e457cd560e8848572e9be6105530747ded2cb68a82060ce282108b1ab0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

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
        
        $__internal_8163c2e457cd560e8848572e9be6105530747ded2cb68a82060ce282108b1ab0->leave($__internal_8163c2e457cd560e8848572e9be6105530747ded2cb68a82060ce282108b1ab0_prof);

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
