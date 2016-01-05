<?php

/* ::base.html.twig */
class __TwigTemplate_6c561b8e18f0ca15e1f42bb7c8b745a0d15f52fe0c5c2ac31179a1637cb9fa0d extends Twig_Template
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
        $__internal_1149c8a3706775da63db6f4d08d228436789f31e2ce629b6eba7346c1803c519 = $this->env->getExtension("native_profiler");
        $__internal_1149c8a3706775da63db6f4d08d228436789f31e2ce629b6eba7346c1803c519->enter($__internal_1149c8a3706775da63db6f4d08d228436789f31e2ce629b6eba7346c1803c519_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_1149c8a3706775da63db6f4d08d228436789f31e2ce629b6eba7346c1803c519->leave($__internal_1149c8a3706775da63db6f4d08d228436789f31e2ce629b6eba7346c1803c519_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_8222aa1c666efb7715ff473fd67f5f37531a75196b47b03349ff81fedb1f4d1c = $this->env->getExtension("native_profiler");
        $__internal_8222aa1c666efb7715ff473fd67f5f37531a75196b47b03349ff81fedb1f4d1c->enter($__internal_8222aa1c666efb7715ff473fd67f5f37531a75196b47b03349ff81fedb1f4d1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_8222aa1c666efb7715ff473fd67f5f37531a75196b47b03349ff81fedb1f4d1c->leave($__internal_8222aa1c666efb7715ff473fd67f5f37531a75196b47b03349ff81fedb1f4d1c_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_41f52089b15491f3a70147a1bd70c1021d1895b3f48adfcc710721f5a5b4948c = $this->env->getExtension("native_profiler");
        $__internal_41f52089b15491f3a70147a1bd70c1021d1895b3f48adfcc710721f5a5b4948c->enter($__internal_41f52089b15491f3a70147a1bd70c1021d1895b3f48adfcc710721f5a5b4948c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_41f52089b15491f3a70147a1bd70c1021d1895b3f48adfcc710721f5a5b4948c->leave($__internal_41f52089b15491f3a70147a1bd70c1021d1895b3f48adfcc710721f5a5b4948c_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_cf498ad50139158c187a6edec520abf0348ee8a98ec33c2d41f6d3c2344225d6 = $this->env->getExtension("native_profiler");
        $__internal_cf498ad50139158c187a6edec520abf0348ee8a98ec33c2d41f6d3c2344225d6->enter($__internal_cf498ad50139158c187a6edec520abf0348ee8a98ec33c2d41f6d3c2344225d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_cf498ad50139158c187a6edec520abf0348ee8a98ec33c2d41f6d3c2344225d6->leave($__internal_cf498ad50139158c187a6edec520abf0348ee8a98ec33c2d41f6d3c2344225d6_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_52e89e32261514a54d6a1b1005c3c711198f169f608b735da90c23355a31d3d1 = $this->env->getExtension("native_profiler");
        $__internal_52e89e32261514a54d6a1b1005c3c711198f169f608b735da90c23355a31d3d1->enter($__internal_52e89e32261514a54d6a1b1005c3c711198f169f608b735da90c23355a31d3d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_52e89e32261514a54d6a1b1005c3c711198f169f608b735da90c23355a31d3d1->leave($__internal_52e89e32261514a54d6a1b1005c3c711198f169f608b735da90c23355a31d3d1_prof);

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
