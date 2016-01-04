<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_061a56edef858bd112a3b3471aa4637c213d8a56df4c45272e3a81a8af4a5257 extends Twig_Template
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
        $__internal_b74fb63f853418fc2128598bdbf289fdc8f6b4f5f2867238cc9a5f09df30b471 = $this->env->getExtension("native_profiler");
        $__internal_b74fb63f853418fc2128598bdbf289fdc8f6b4f5f2867238cc9a5f09df30b471->enter($__internal_b74fb63f853418fc2128598bdbf289fdc8f6b4f5f2867238cc9a5f09df30b471_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code"));
        echo " ";
        echo (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_b74fb63f853418fc2128598bdbf289fdc8f6b4f5f2867238cc9a5f09df30b471->leave($__internal_b74fb63f853418fc2128598bdbf289fdc8f6b4f5f2867238cc9a5f09df30b471_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  22 => 1,);
    }
}
/* Oops! An Error Occurred*/
/* =======================*/
/* */
/* The server returned a "{{ status_code }} {{ status_text }}".*/
/* */
/* Something is broken. Please let us know what you were doing when this error occurred.*/
/* We will fix it as soon as possible. Sorry for any inconvenience caused.*/
/* */
