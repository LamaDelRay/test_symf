<?php

/* ::base.html.twig */
class __TwigTemplate_c3866ac7688085d2c6b392f3fd31fbbded4d7352c00544a93b65fe7f90cb4775 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d7d297532ae7da22ac1e679807e5b54780a1695b7c363f5c49a52ac459fa48a7 = $this->env->getExtension("native_profiler");
        $__internal_d7d297532ae7da22ac1e679807e5b54780a1695b7c363f5c49a52ac459fa48a7->enter($__internal_d7d297532ae7da22ac1e679807e5b54780a1695b7c363f5c49a52ac459fa48a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_d7d297532ae7da22ac1e679807e5b54780a1695b7c363f5c49a52ac459fa48a7->leave($__internal_d7d297532ae7da22ac1e679807e5b54780a1695b7c363f5c49a52ac459fa48a7_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_acdf590feddba551f00561c352c72cb5b4f53b036b9520c16b62a62a9e033353 = $this->env->getExtension("native_profiler");
        $__internal_acdf590feddba551f00561c352c72cb5b4f53b036b9520c16b62a62a9e033353->enter($__internal_acdf590feddba551f00561c352c72cb5b4f53b036b9520c16b62a62a9e033353_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_acdf590feddba551f00561c352c72cb5b4f53b036b9520c16b62a62a9e033353->leave($__internal_acdf590feddba551f00561c352c72cb5b4f53b036b9520c16b62a62a9e033353_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_8ef24b8ea0d3b98d580786f9a0c3d85419ea3dcd4c1e9f73618f68a5791c8df5 = $this->env->getExtension("native_profiler");
        $__internal_8ef24b8ea0d3b98d580786f9a0c3d85419ea3dcd4c1e9f73618f68a5791c8df5->enter($__internal_8ef24b8ea0d3b98d580786f9a0c3d85419ea3dcd4c1e9f73618f68a5791c8df5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_8ef24b8ea0d3b98d580786f9a0c3d85419ea3dcd4c1e9f73618f68a5791c8df5->leave($__internal_8ef24b8ea0d3b98d580786f9a0c3d85419ea3dcd4c1e9f73618f68a5791c8df5_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_86a65d620e64ff3fd6c1621ff016bad6073eee96a2214d9a1c24663779643b5a = $this->env->getExtension("native_profiler");
        $__internal_86a65d620e64ff3fd6c1621ff016bad6073eee96a2214d9a1c24663779643b5a->enter($__internal_86a65d620e64ff3fd6c1621ff016bad6073eee96a2214d9a1c24663779643b5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_86a65d620e64ff3fd6c1621ff016bad6073eee96a2214d9a1c24663779643b5a->leave($__internal_86a65d620e64ff3fd6c1621ff016bad6073eee96a2214d9a1c24663779643b5a_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_3045b3c108c76647777bf148ce2896b754811b7a47febfe961518bd5acfdc736 = $this->env->getExtension("native_profiler");
        $__internal_3045b3c108c76647777bf148ce2896b754811b7a47febfe961518bd5acfdc736->enter($__internal_3045b3c108c76647777bf148ce2896b754811b7a47febfe961518bd5acfdc736_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_3045b3c108c76647777bf148ce2896b754811b7a47febfe961518bd5acfdc736->leave($__internal_3045b3c108c76647777bf148ce2896b754811b7a47febfe961518bd5acfdc736_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
