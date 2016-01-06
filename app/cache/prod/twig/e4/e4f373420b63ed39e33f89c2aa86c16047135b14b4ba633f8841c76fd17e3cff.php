<?php

/* TwigBundle:Exception:error404.html.twig */
class __TwigTemplate_36c62e9a0cc9a11a7e20930ae91c4df596fd4780275232ba8b77751815e8a3b5 extends Twig_Template
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
        echo "<!DOCTYPE html>
<html>
\t<head>
\t\t<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
\t\t<title>An Error Occurred: ";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : null), "html", null, true);
        echo "</title>
\t</head>
\t<body>
\t\t<h1>Oops! An Error Occurred</h1>
\t\t<h2>The server returned a \"";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : null), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : null), "html", null, true);
        echo "\".</h2>

\t\t<div>
\t\t\tSomething is broken. Please e-mail us at [email] and let us know
\t\t\twhat you were doing when this error occurred. We will fix it as soon
\t\t\tas possible. Sorry for any inconvenience caused.
\t\t</div>
\t</body>
</html>";
    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error404.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  32 => 9,  25 => 5,  19 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/* 	<head>*/
/* 		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />*/
/* 		<title>An Error Occurred: {{ status_text }}</title>*/
/* 	</head>*/
/* 	<body>*/
/* 		<h1>Oops! An Error Occurred</h1>*/
/* 		<h2>The server returned a "{{ status_code }} {{ status_text }}".</h2>*/
/* */
/* 		<div>*/
/* 			Something is broken. Please e-mail us at [email] and let us know*/
/* 			what you were doing when this error occurred. We will fix it as soon*/
/* 			as possible. Sorry for any inconvenience caused.*/
/* 		</div>*/
/* 	</body>*/
/* </html>*/
