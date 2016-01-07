<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_0ba3bfd4f0c9ae055ee0410e86de1321448c832829dff7384f6e850247f55c5c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6c778b54d78d5fa40aa30bbd20e54976f21e33493ff1cc7019fd4b73a3c10153 = $this->env->getExtension("native_profiler");
        $__internal_6c778b54d78d5fa40aa30bbd20e54976f21e33493ff1cc7019fd4b73a3c10153->enter($__internal_6c778b54d78d5fa40aa30bbd20e54976f21e33493ff1cc7019fd4b73a3c10153_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6c778b54d78d5fa40aa30bbd20e54976f21e33493ff1cc7019fd4b73a3c10153->leave($__internal_6c778b54d78d5fa40aa30bbd20e54976f21e33493ff1cc7019fd4b73a3c10153_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_0ae3befeca1eccc6332b0f1cef1f6f09cc1658dc8c65d2fbaff1be90be5fbb48 = $this->env->getExtension("native_profiler");
        $__internal_0ae3befeca1eccc6332b0f1cef1f6f09cc1658dc8c65d2fbaff1be90be5fbb48->enter($__internal_0ae3befeca1eccc6332b0f1cef1f6f09cc1658dc8c65d2fbaff1be90be5fbb48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_0ae3befeca1eccc6332b0f1cef1f6f09cc1658dc8c65d2fbaff1be90be5fbb48->leave($__internal_0ae3befeca1eccc6332b0f1cef1f6f09cc1658dc8c65d2fbaff1be90be5fbb48_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_635498e96ab4a0a28d1397f5e24192f7735e3693aefa9b0bc40dff1ac7609fc3 = $this->env->getExtension("native_profiler");
        $__internal_635498e96ab4a0a28d1397f5e24192f7735e3693aefa9b0bc40dff1ac7609fc3->enter($__internal_635498e96ab4a0a28d1397f5e24192f7735e3693aefa9b0bc40dff1ac7609fc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_635498e96ab4a0a28d1397f5e24192f7735e3693aefa9b0bc40dff1ac7609fc3->leave($__internal_635498e96ab4a0a28d1397f5e24192f7735e3693aefa9b0bc40dff1ac7609fc3_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_ac9d34f657d7888d09902c3d2780338dd66ce24eda9a23e251fa0a2ee321e87d = $this->env->getExtension("native_profiler");
        $__internal_ac9d34f657d7888d09902c3d2780338dd66ce24eda9a23e251fa0a2ee321e87d->enter($__internal_ac9d34f657d7888d09902c3d2780338dd66ce24eda9a23e251fa0a2ee321e87d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_ac9d34f657d7888d09902c3d2780338dd66ce24eda9a23e251fa0a2ee321e87d->leave($__internal_ac9d34f657d7888d09902c3d2780338dd66ce24eda9a23e251fa0a2ee321e87d_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
