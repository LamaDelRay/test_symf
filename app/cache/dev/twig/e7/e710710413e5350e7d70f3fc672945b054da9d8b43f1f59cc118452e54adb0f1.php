<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_39c134c51f554f62fe9932135c9c81e2f8dbc1406fd935a82e7d4a381553e80e extends Twig_Template
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
        $__internal_d03df72c6fbba06acb3e074ae9cee2d697703dc635d0283a22b92829f82d27cc = $this->env->getExtension("native_profiler");
        $__internal_d03df72c6fbba06acb3e074ae9cee2d697703dc635d0283a22b92829f82d27cc->enter($__internal_d03df72c6fbba06acb3e074ae9cee2d697703dc635d0283a22b92829f82d27cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

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
        
        $__internal_d03df72c6fbba06acb3e074ae9cee2d697703dc635d0283a22b92829f82d27cc->leave($__internal_d03df72c6fbba06acb3e074ae9cee2d697703dc635d0283a22b92829f82d27cc_prof);

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
