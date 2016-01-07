<?php

/* SonataUserBundle:Registration:register_content.html.twig */
class __TwigTemplate_9e4037bfaf9777785e2e9dcb79ad309ddba42cf347893fae817a4c293c0ce1fa extends Twig_Template
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
        $__internal_d3fe3a16fd4af7e48e8bbe52cc6ddb6e6392236073b2e39e747fb61ada9914df = $this->env->getExtension("native_profiler");
        $__internal_d3fe3a16fd4af7e48e8bbe52cc6ddb6e6392236073b2e39e747fb61ada9914df->enter($__internal_d3fe3a16fd4af7e48e8bbe52cc6ddb6e6392236073b2e39e747fb61ada9914df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataUserBundle:Registration:register_content.html.twig"));

        // line 1
        echo "<div class=\"panel panel-success\">
    <div class=\"panel-heading\">
        <h2 class=\"panel-title\">";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title_user_registration", array(), "SonataUserBundle"), "html", null, true);
        echo "</h2>
    </div>
    <div class=\"panel-body\">
        <form action=\"";
        // line 6
        echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
        echo "\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " method=\"POST\" class=\"fos_user_registration_register form-horizontal\">
            ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
            <div class=\"form-actions\">
                <input type=\"submit\" value=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" class=\"btn btn-success pull-right\" />
            </div>
        </form>
    </div>
</div>";
        
        $__internal_d3fe3a16fd4af7e48e8bbe52cc6ddb6e6392236073b2e39e747fb61ada9914df->leave($__internal_d3fe3a16fd4af7e48e8bbe52cc6ddb6e6392236073b2e39e747fb61ada9914df_prof);

    }

    public function getTemplateName()
    {
        return "SonataUserBundle:Registration:register_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 9,  38 => 7,  32 => 6,  26 => 3,  22 => 1,);
    }
}
/* <div class="panel panel-success">*/
/*     <div class="panel-heading">*/
/*         <h2 class="panel-title">{{ 'title_user_registration'|trans({}, 'SonataUserBundle') }}</h2>*/
/*     </div>*/
/*     <div class="panel-body">*/
/*         <form action="{{ path('fos_user_registration_register') }}" {{ form_enctype(form) }} method="POST" class="fos_user_registration_register form-horizontal">*/
/*             {{ form_widget(form) }}*/
/*             <div class="form-actions">*/
/*                 <input type="submit" value="{{ 'registration.submit'|trans({}, 'FOSUserBundle') }}" class="btn btn-success pull-right" />*/
/*             </div>*/
/*         </form>*/
/*     </div>*/
/* </div>*/
