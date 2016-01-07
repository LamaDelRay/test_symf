<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_02c0043541f6a152dafe267548e2cdfd82dbdd3708cb9a59fc72a971c7af04b0 extends Twig_Template
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
        $__internal_3acd5e90be84f2799ff1fe519d43d4071c39f84f7019e8d0dbdbdc861bd04afe = $this->env->getExtension("native_profiler");
        $__internal_3acd5e90be84f2799ff1fe519d43d4071c39f84f7019e8d0dbdbdc861bd04afe->enter($__internal_3acd5e90be84f2799ff1fe519d43d4071c39f84f7019e8d0dbdbdc861bd04afe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

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
        
        $__internal_3acd5e90be84f2799ff1fe519d43d4071c39f84f7019e8d0dbdbdc861bd04afe->leave($__internal_3acd5e90be84f2799ff1fe519d43d4071c39f84f7019e8d0dbdbdc861bd04afe_prof);

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
