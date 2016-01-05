<?php

/* TwigBundle:Exception:error404.html.twig */
class __TwigTemplate_cf4bcc94cd21a24d0ab56c3370135a7d97d9d9e7e31fb13c149c9fed6871dc1a extends Twig_Template
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
        $__internal_366f47142d7d3448ec93c2f4dbd98a0e6486af7a5ee4df69c6ac886e9a8537d3 = $this->env->getExtension("native_profiler");
        $__internal_366f47142d7d3448ec93c2f4dbd98a0e6486af7a5ee4df69c6ac886e9a8537d3->enter($__internal_366f47142d7d3448ec93c2f4dbd98a0e6486af7a5ee4df69c6ac886e9a8537d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error404.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
\t<head>
\t\t<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
\t\t<title>An Error Occurred: ";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "</title>
\t</head>
\t<body>
\t\t<h1>Oops! An Error Occurred</h1>
\t\t<h2>The server returned a \"";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\".</h2>

\t\t<div>
\t\t\tSomething is broken. Please e-mail us at [email] and let us know
\t\t\twhat you were doing when this error occurred. We will fix it as soon
\t\t\tas possible. Sorry for any inconvenience caused.
\t\t</div>
\t</body>
</html>";
        
        $__internal_366f47142d7d3448ec93c2f4dbd98a0e6486af7a5ee4df69c6ac886e9a8537d3->leave($__internal_366f47142d7d3448ec93c2f4dbd98a0e6486af7a5ee4df69c6ac886e9a8537d3_prof);

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
        return array (  35 => 9,  28 => 5,  22 => 1,);
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
