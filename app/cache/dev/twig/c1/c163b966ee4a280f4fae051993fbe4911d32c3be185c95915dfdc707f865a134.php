<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_a4ea65f3a8fbfab3b0d2dc2804ebf525c08c0afd79f0a45ad1010d2d50731c61 extends Twig_Template
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
        $__internal_68de3400f0c2304df40ce48a46f292ec75b50a960d99b8866817326b73204d0b = $this->env->getExtension("native_profiler");
        $__internal_68de3400f0c2304df40ce48a46f292ec75b50a960d99b8866817326b73204d0b->enter($__internal_68de3400f0c2304df40ce48a46f292ec75b50a960d99b8866817326b73204d0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_68de3400f0c2304df40ce48a46f292ec75b50a960d99b8866817326b73204d0b->leave($__internal_68de3400f0c2304df40ce48a46f292ec75b50a960d99b8866817326b73204d0b_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}*/
/* */
