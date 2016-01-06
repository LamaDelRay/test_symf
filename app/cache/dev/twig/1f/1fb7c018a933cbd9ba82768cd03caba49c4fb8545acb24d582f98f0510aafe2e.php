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
        $__internal_84b5a28fcd2cf3d9acfd5100d33538cbe70f207900e223c19d595efb485fa3b0 = $this->env->getExtension("native_profiler");
        $__internal_84b5a28fcd2cf3d9acfd5100d33538cbe70f207900e223c19d595efb485fa3b0->enter($__internal_84b5a28fcd2cf3d9acfd5100d33538cbe70f207900e223c19d595efb485fa3b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LamaDelRayPlatformBundle:Advert:translation.html.twig"));

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
        
        $__internal_84b5a28fcd2cf3d9acfd5100d33538cbe70f207900e223c19d595efb485fa3b0->leave($__internal_84b5a28fcd2cf3d9acfd5100d33538cbe70f207900e223c19d595efb485fa3b0_prof);

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
