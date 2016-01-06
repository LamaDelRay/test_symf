<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_eb8d1329c6aca224063a4fab50cd90620404a279eebf08baf9c2599f06cf86e4 extends Twig_Template
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
        $__internal_4c1d71314f0fa4039fe4dbcd9d16745d9e5d73c7a3095efae489585c497ac918 = $this->env->getExtension("native_profiler");
        $__internal_4c1d71314f0fa4039fe4dbcd9d16745d9e5d73c7a3095efae489585c497ac918->enter($__internal_4c1d71314f0fa4039fe4dbcd9d16745d9e5d73c7a3095efae489585c497ac918_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_4c1d71314f0fa4039fe4dbcd9d16745d9e5d73c7a3095efae489585c497ac918->leave($__internal_4c1d71314f0fa4039fe4dbcd9d16745d9e5d73c7a3095efae489585c497ac918_prof);

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
