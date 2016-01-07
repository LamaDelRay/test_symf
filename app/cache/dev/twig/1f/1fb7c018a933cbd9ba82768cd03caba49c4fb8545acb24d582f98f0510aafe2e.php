<?php

/* LamaDelRayPlatformBundle:Advert:translation.html.twig */
class __TwigTemplate_2431860d2f066421d857dd24dcf7f5ae4d2f736a9e0f457f71d0b236c3f470ae extends Twig_Template
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
        $__internal_0e43d797bad0aa5734c6527a875d944f1873ff04cd58443ab5237a4d6ee85d5d = $this->env->getExtension("native_profiler");
        $__internal_0e43d797bad0aa5734c6527a875d944f1873ff04cd58443ab5237a4d6ee85d5d->enter($__internal_0e43d797bad0aa5734c6527a875d944f1873ff04cd58443ab5237a4d6ee85d5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LamaDelRayPlatformBundle:Advert:translation.html.twig"));

        // line 1
        echo "<html>
\t<body>
\t\t";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Hello"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo "!
\t</body>
</html>";
        
        $__internal_0e43d797bad0aa5734c6527a875d944f1873ff04cd58443ab5237a4d6ee85d5d->leave($__internal_0e43d797bad0aa5734c6527a875d944f1873ff04cd58443ab5237a4d6ee85d5d_prof);

    }

    public function getTemplateName()
    {
        return "LamaDelRayPlatformBundle:Advert:translation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 3,  22 => 1,);
    }
}
/* <html>*/
/* 	<body>*/
/* 		{{ 'Hello'|trans }} {{ name }}!*/
/* 	</body>*/
/* </html>*/
