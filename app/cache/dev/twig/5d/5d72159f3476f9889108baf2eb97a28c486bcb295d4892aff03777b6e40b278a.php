<?php

/* SonataUserBundle:ChangePassword:changePassword_content.html.twig */
class __TwigTemplate_c0e7b7cbc6f78a5110b81708a84744485da3c261d34f233232eb429ce96defc0 extends Twig_Template
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
        $__internal_808951be8c36a765d05499adc9a200e7ddbc62a3038d7883e85475863c8a0580 = $this->env->getExtension("native_profiler");
        $__internal_808951be8c36a765d05499adc9a200e7ddbc62a3038d7883e85475863c8a0580->enter($__internal_808951be8c36a765d05499adc9a200e7ddbc62a3038d7883e85475863c8a0580_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataUserBundle:ChangePassword:changePassword_content.html.twig"));

        // line 1
        $this->env->getExtension('form')->renderer->setTheme((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), array(0 => "MopaBootstrapBundle:Form:fields.html.twig"));
        // line 2
        echo "<form action=\"";
        echo $this->env->getExtension('routing')->getPath("sonata_user_change_password");
        echo "\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " method=\"POST\" class=\"fos_user_change_password form-horizontal\">
    ";
        // line 3
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
    <button type=\"submit\" class=\"btn btn-danger pull-right\"><i class=\"icon-lock icon-white glyphicon glyphicon-lock\"></i>&nbsp;";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("change_password.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "</button>
</form>
";
        
        $__internal_808951be8c36a765d05499adc9a200e7ddbc62a3038d7883e85475863c8a0580->leave($__internal_808951be8c36a765d05499adc9a200e7ddbc62a3038d7883e85475863c8a0580_prof);

    }

    public function getTemplateName()
    {
        return "SonataUserBundle:ChangePassword:changePassword_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 4,  31 => 3,  24 => 2,  22 => 1,);
    }
}
/* {% form_theme form "MopaBootstrapBundle:Form:fields.html.twig" %}*/
/* <form action="{{ path('sonata_user_change_password') }}" {{ form_enctype(form) }} method="POST" class="fos_user_change_password form-horizontal">*/
/*     {{ form_widget(form) }}*/
/*     <button type="submit" class="btn btn-danger pull-right"><i class="icon-lock icon-white glyphicon glyphicon-lock"></i>&nbsp;{{ 'change_password.submit'|trans({}, 'FOSUserBundle') }}</button>*/
/* </form>*/
/* */
