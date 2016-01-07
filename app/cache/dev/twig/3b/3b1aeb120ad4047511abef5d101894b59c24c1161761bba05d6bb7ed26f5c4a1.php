<?php

/* SonataUserBundle:Admin/Security:login.html.twig */
class __TwigTemplate_db9f04cea27289cb1e3db70411e69b81d33b6ef6f648905d4f4a4316fdf33772 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "SonataUserBundle:Admin/Security:login.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_53da1aa281095eff81635f33fc0a6b3865a057c76775f4193807897107a4f752 = $this->env->getExtension("native_profiler");
        $__internal_53da1aa281095eff81635f33fc0a6b3865a057c76775f4193807897107a4f752->enter($__internal_53da1aa281095eff81635f33fc0a6b3865a057c76775f4193807897107a4f752_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataUserBundle:Admin/Security:login.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_53da1aa281095eff81635f33fc0a6b3865a057c76775f4193807897107a4f752->leave($__internal_53da1aa281095eff81635f33fc0a6b3865a057c76775f4193807897107a4f752_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_b008e3e48ce9c78cfd3544100465b7e4538541da802b5d726ec59e50bc8bec91 = $this->env->getExtension("native_profiler");
        $__internal_b008e3e48ce9c78cfd3544100465b7e4538541da802b5d726ec59e50bc8bec91->enter($__internal_b008e3e48ce9c78cfd3544100465b7e4538541da802b5d726ec59e50bc8bec91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "    <div class=\"connection\">
        <form action=\"";
        // line 5
        echo $this->env->getExtension('routing')->getPath("sonata_user_admin_security_check");
        echo "\" method=\"post\">

            ";
        // line 7
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 8
            echo "                <div class=\"alert alert-error\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), array(), "SonataUserBundle"), "html", null, true);
            echo "</div>
            ";
        }
        // line 10
        echo "
            <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
        echo "\" />

            <div class=\"control-group\">
                <label for=\"username\">";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.username", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>

                <div class=\"controls\">
                    <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 17
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" class=\"big sonata-medium\"/>
                </div>
            </div>

            <div class=\"control-group\">
                <label for=\"password\">";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.password", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>

                <div class=\"controls\">
                    <input type=\"password\" id=\"password\" name=\"_password\" class=\"big sonata-medium\" />
                </div>
            </div>

            <div class=\"control-group\">
                <label for=\"remember_me\">
                    <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
                    ";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.remember_me", array(), "FOSUserBundle"), "html", null, true);
        echo "
                </label>
            </div>

            <div class=\"form-actions\">
                <input type=\"submit\" class=\"btn btn-primary\" id=\"_submit\" name=\"_submit\" value=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
            </div>
        </form>
    </div>
";
        
        $__internal_b008e3e48ce9c78cfd3544100465b7e4538541da802b5d726ec59e50bc8bec91->leave($__internal_b008e3e48ce9c78cfd3544100465b7e4538541da802b5d726ec59e50bc8bec91_prof);

    }

    public function getTemplateName()
    {
        return "SonataUserBundle:Admin/Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 37,  91 => 32,  78 => 22,  70 => 17,  64 => 14,  58 => 11,  55 => 10,  49 => 8,  47 => 7,  42 => 5,  39 => 4,  33 => 3,  18 => 1,);
    }
}
/* {% extends base_template %}*/
/* */
/* {% block content %}*/
/*     <div class="connection">*/
/*         <form action="{{ path("sonata_user_admin_security_check") }}" method="post">*/
/* */
/*             {% if error %}*/
/*                 <div class="alert alert-error">{{ error|trans({}, 'SonataUserBundle') }}</div>*/
/*             {% endif %}*/
/* */
/*             <input type="hidden" name="_csrf_token" value="{{ csrf_token }}" />*/
/* */
/*             <div class="control-group">*/
/*                 <label for="username">{{ 'security.login.username'|trans({}, 'FOSUserBundle') }}</label>*/
/* */
/*                 <div class="controls">*/
/*                     <input type="text" id="username" name="_username" value="{{ last_username }}" class="big sonata-medium"/>*/
/*                 </div>*/
/*             </div>*/
/* */
/*             <div class="control-group">*/
/*                 <label for="password">{{ 'security.login.password'|trans({}, 'FOSUserBundle') }}</label>*/
/* */
/*                 <div class="controls">*/
/*                     <input type="password" id="password" name="_password" class="big sonata-medium" />*/
/*                 </div>*/
/*             </div>*/
/* */
/*             <div class="control-group">*/
/*                 <label for="remember_me">*/
/*                     <input type="checkbox" id="remember_me" name="_remember_me" value="on" />*/
/*                     {{ 'security.login.remember_me'|trans({}, 'FOSUserBundle') }}*/
/*                 </label>*/
/*             </div>*/
/* */
/*             <div class="form-actions">*/
/*                 <input type="submit" class="btn btn-primary" id="_submit" name="_submit" value="{{ 'security.login.submit'|trans({}, 'FOSUserBundle') }}" />*/
/*             </div>*/
/*         </form>*/
/*     </div>*/
/* {% endblock content %}*/
/* */
