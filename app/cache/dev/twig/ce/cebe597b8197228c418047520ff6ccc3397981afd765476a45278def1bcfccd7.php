<?php

/* FOSUserBundle:Resetting:reset_content.html.twig */
class __TwigTemplate_6561e48d71d28f488bf8f5fd261da0748ad3dc0c1d8d34c937fbfe931f236071 extends Twig_Template
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
        $__internal_c3f3c05ba28dd272d7ff2e39cf6c8f039ed0d27cbfbfe5ecd4ad4c2b4382910f = $this->env->getExtension("native_profiler");
        $__internal_c3f3c05ba28dd272d7ff2e39cf6c8f039ed0d27cbfbfe5ecd4ad4c2b4382910f->enter($__internal_c3f3c05ba28dd272d7ff2e39cf6c8f039ed0d27cbfbfe5ecd4ad4c2b4382910f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset_content.html.twig"));

        // line 1
        echo "<form action=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fos_user_resetting_reset", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))), "html", null, true);
        echo "\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " method=\"POST\" class=\"fos_user_resetting_reset\">
    ";
        // line 2
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
    <div>
        <input type=\"submit\" value=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.reset.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    </div>
</form>
";
        
        $__internal_c3f3c05ba28dd272d7ff2e39cf6c8f039ed0d27cbfbfe5ecd4ad4c2b4382910f->leave($__internal_c3f3c05ba28dd272d7ff2e39cf6c8f039ed0d27cbfbfe5ecd4ad4c2b4382910f_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:reset_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 4,  29 => 2,  22 => 1,);
    }
}
/* <form action="{{ path('fos_user_resetting_reset', {'token': token}) }}" {{ form_enctype(form) }} method="POST" class="fos_user_resetting_reset">*/
/*     {{ form_widget(form) }}*/
/*     <div>*/
/*         <input type="submit" value="{{ 'resetting.reset.submit'|trans({}, 'FOSUserBundle') }}" />*/
/*     </div>*/
/* </form>*/
/* */
