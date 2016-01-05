<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_1b963dcd56f09ef3964d381738178b2220b936de82aa9b09ed4335e051563a2a extends Twig_Template
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
        $__internal_96468bf691624135fe7af0a95e56e1a31d3285292a1bdce72d25b294029f2cc5 = $this->env->getExtension("native_profiler");
        $__internal_96468bf691624135fe7af0a95e56e1a31d3285292a1bdce72d25b294029f2cc5->enter($__internal_96468bf691624135fe7af0a95e56e1a31d3285292a1bdce72d25b294029f2cc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_96468bf691624135fe7af0a95e56e1a31d3285292a1bdce72d25b294029f2cc5->leave($__internal_96468bf691624135fe7af0a95e56e1a31d3285292a1bdce72d25b294029f2cc5_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 3,  22 => 1,);
    }
}
/* <?xml version="1.0" encoding="{{ _charset }}" ?>*/
/* */
/* <error code="{{ status_code }}" message="{{ status_text }}" />*/
/* */
