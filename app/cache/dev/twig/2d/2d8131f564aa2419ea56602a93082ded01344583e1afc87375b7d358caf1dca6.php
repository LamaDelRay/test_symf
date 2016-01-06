<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_7c14558b4777c7dbe38b47b285cfa6c01b6f85028b003ca837a5398569ac3418 extends Twig_Template
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
        $__internal_0f70ecb4b711d58c4ba7ead2c22ab0d4ddfb841e36a1695fe33241be82539be7 = $this->env->getExtension("native_profiler");
        $__internal_0f70ecb4b711d58c4ba7ead2c22ab0d4ddfb841e36a1695fe33241be82539be7->enter($__internal_0f70ecb4b711d58c4ba7ead2c22ab0d4ddfb841e36a1695fe33241be82539be7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

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
        
        $__internal_0f70ecb4b711d58c4ba7ead2c22ab0d4ddfb841e36a1695fe33241be82539be7->leave($__internal_0f70ecb4b711d58c4ba7ead2c22ab0d4ddfb841e36a1695fe33241be82539be7_prof);

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
