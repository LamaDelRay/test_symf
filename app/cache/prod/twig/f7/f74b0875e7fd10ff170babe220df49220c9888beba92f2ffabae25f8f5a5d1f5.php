<?php

/* LamaDelRayPlatformBundle:Advert:translation.html.twig */
class __TwigTemplate_e60d0bf3469c151fc5342e37033bf4fb7944340b4c97abe09cfc5194753c3038 extends Twig_Template
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
        // line 1
        echo "<html>
\t<body>
\t\t";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Hello"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
        echo "!
\t</body>
</html>";
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
        return array (  23 => 3,  19 => 1,);
    }
}
/* <html>*/
/* 	<body>*/
/* 		{{ 'Hello'|trans }} {{ name }}!*/
/* 	</body>*/
/* </html>*/
