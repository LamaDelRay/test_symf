<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_b9000f38ce49e9a0a676a3e4d99bc711a0f1270aa58e52bc3db18b58c5f61ad5 extends Twig_Template
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
        $__internal_eba165c8c3140d154a92c4f063d346be7edb79eeca1f37729dda8b6a0c18fb87 = $this->env->getExtension("native_profiler");
        $__internal_eba165c8c3140d154a92c4f063d346be7edb79eeca1f37729dda8b6a0c18fb87->enter($__internal_eba165c8c3140d154a92c4f063d346be7edb79eeca1f37729dda8b6a0c18fb87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_eba165c8c3140d154a92c4f063d346be7edb79eeca1f37729dda8b6a0c18fb87->leave($__internal_eba165c8c3140d154a92c4f063d346be7edb79eeca1f37729dda8b6a0c18fb87_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
