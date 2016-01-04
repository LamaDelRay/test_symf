<?php

/* ::base.html.twig */
class __TwigTemplate_8209542ad53a38eb436af85b26dc7ad035dd08b282e7cc2a15cc48dd93a0195b extends Twig_Template
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
        $__internal_c9ef2b50713620a266669d09137057d44ad13bea00daeab815cff9da8c9e50ba = $this->env->getExtension("native_profiler");
        $__internal_c9ef2b50713620a266669d09137057d44ad13bea00daeab815cff9da8c9e50ba->enter($__internal_c9ef2b50713620a266669d09137057d44ad13bea00daeab815cff9da8c9e50ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_c9ef2b50713620a266669d09137057d44ad13bea00daeab815cff9da8c9e50ba->leave($__internal_c9ef2b50713620a266669d09137057d44ad13bea00daeab815cff9da8c9e50ba_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_ea43fb56f583aa58e7131ca8e83b55ef13e2db8ed49c696d6da626e8a8105e87 = $this->env->getExtension("native_profiler");
        $__internal_ea43fb56f583aa58e7131ca8e83b55ef13e2db8ed49c696d6da626e8a8105e87->enter($__internal_ea43fb56f583aa58e7131ca8e83b55ef13e2db8ed49c696d6da626e8a8105e87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_ea43fb56f583aa58e7131ca8e83b55ef13e2db8ed49c696d6da626e8a8105e87->leave($__internal_ea43fb56f583aa58e7131ca8e83b55ef13e2db8ed49c696d6da626e8a8105e87_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_08ca6d4e296f7e15e154ec5aa4c9f5369892f3df33209826c2d4eb663849ed6b = $this->env->getExtension("native_profiler");
        $__internal_08ca6d4e296f7e15e154ec5aa4c9f5369892f3df33209826c2d4eb663849ed6b->enter($__internal_08ca6d4e296f7e15e154ec5aa4c9f5369892f3df33209826c2d4eb663849ed6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_08ca6d4e296f7e15e154ec5aa4c9f5369892f3df33209826c2d4eb663849ed6b->leave($__internal_08ca6d4e296f7e15e154ec5aa4c9f5369892f3df33209826c2d4eb663849ed6b_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_fe2a3fd33ddcd3a4f32f25253518f4f697c535bce1d31d7fdd8625911f42f41c = $this->env->getExtension("native_profiler");
        $__internal_fe2a3fd33ddcd3a4f32f25253518f4f697c535bce1d31d7fdd8625911f42f41c->enter($__internal_fe2a3fd33ddcd3a4f32f25253518f4f697c535bce1d31d7fdd8625911f42f41c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_fe2a3fd33ddcd3a4f32f25253518f4f697c535bce1d31d7fdd8625911f42f41c->leave($__internal_fe2a3fd33ddcd3a4f32f25253518f4f697c535bce1d31d7fdd8625911f42f41c_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_f0d6486e6009b7cc83eb312798f48b0ef2aec2feaf3fbceeea03a9393018bdb9 = $this->env->getExtension("native_profiler");
        $__internal_f0d6486e6009b7cc83eb312798f48b0ef2aec2feaf3fbceeea03a9393018bdb9->enter($__internal_f0d6486e6009b7cc83eb312798f48b0ef2aec2feaf3fbceeea03a9393018bdb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_f0d6486e6009b7cc83eb312798f48b0ef2aec2feaf3fbceeea03a9393018bdb9->leave($__internal_f0d6486e6009b7cc83eb312798f48b0ef2aec2feaf3fbceeea03a9393018bdb9_prof);

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
