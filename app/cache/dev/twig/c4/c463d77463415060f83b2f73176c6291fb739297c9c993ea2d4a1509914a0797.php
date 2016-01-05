<?php

/* LamaDelRayPlatformBundle:Advert:translation.html.twig */
class __TwigTemplate_ed8cfcee5aa38c8b3b795330f6c29a1e500c1de9c72ec3f07d9929efb925eb37 extends Twig_Template
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
        $__internal_88783b205ea5b944e34b3571b0ba99aa46aed9e3969f2580cd7131c68a523792 = $this->env->getExtension("native_profiler");
        $__internal_88783b205ea5b944e34b3571b0ba99aa46aed9e3969f2580cd7131c68a523792->enter($__internal_88783b205ea5b944e34b3571b0ba99aa46aed9e3969f2580cd7131c68a523792_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LamaDelRayPlatformBundle:Advert:translation.html.twig"));

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
        
        $__internal_88783b205ea5b944e34b3571b0ba99aa46aed9e3969f2580cd7131c68a523792->leave($__internal_88783b205ea5b944e34b3571b0ba99aa46aed9e3969f2580cd7131c68a523792_prof);

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
