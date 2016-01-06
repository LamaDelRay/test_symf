<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_70b75edcee61b25d66ead73cbbb16de3d587a3a327a2a6f43d84f208e2e01b10 extends Twig_Template
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
        $__internal_3259102240c305e27bb9a9b449209d489221b006c5b1bc33cacd2d4f13e5834c = $this->env->getExtension("native_profiler");
        $__internal_3259102240c305e27bb9a9b449209d489221b006c5b1bc33cacd2d4f13e5834c->enter($__internal_3259102240c305e27bb9a9b449209d489221b006c5b1bc33cacd2d4f13e5834c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_3259102240c305e27bb9a9b449209d489221b006c5b1bc33cacd2d4f13e5834c->leave($__internal_3259102240c305e27bb9a9b449209d489221b006c5b1bc33cacd2d4f13e5834c_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}*/
/* *//* */
/* */
