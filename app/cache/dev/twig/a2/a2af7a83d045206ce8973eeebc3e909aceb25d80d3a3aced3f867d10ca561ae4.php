<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_9867d9386fcf63633302ab6ff7014755b12692e2c65947d9efa5ac45e8f16dfb extends Twig_Template
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
        $__internal_7fd983d9f77416b8c95485ca68030ccc8e7841a2bc58f6e3303bdaf0dcf73a38 = $this->env->getExtension("native_profiler");
        $__internal_7fd983d9f77416b8c95485ca68030ccc8e7841a2bc58f6e3303bdaf0dcf73a38->enter($__internal_7fd983d9f77416b8c95485ca68030ccc8e7841a2bc58f6e3303bdaf0dcf73a38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

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
        
        $__internal_7fd983d9f77416b8c95485ca68030ccc8e7841a2bc58f6e3303bdaf0dcf73a38->leave($__internal_7fd983d9f77416b8c95485ca68030ccc8e7841a2bc58f6e3303bdaf0dcf73a38_prof);

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
