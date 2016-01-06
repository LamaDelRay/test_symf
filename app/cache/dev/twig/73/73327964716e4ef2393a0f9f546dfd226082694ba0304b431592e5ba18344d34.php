<?php

/* FOSUserBundle:Profile:show_content.html.twig */
class __TwigTemplate_8fb5b50d35049060683750b96f3050f5541044c2248aa5999d18107b32f49673 extends Twig_Template
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
        $__internal_207160e64ac6eb50b7a0aaa2eaec2523456538df1c9ae60d324ab20dd8bcfd1a = $this->env->getExtension("native_profiler");
        $__internal_207160e64ac6eb50b7a0aaa2eaec2523456538df1c9ae60d324ab20dd8bcfd1a->enter($__internal_207160e64ac6eb50b7a0aaa2eaec2523456538df1c9ae60d324ab20dd8bcfd1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show_content.html.twig"));

        // line 1
        echo "<div class=\"fos_user_user_show\">
    <p>";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("profile.show.username", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "html", null, true);
        echo "</p>
    <p>";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("profile.show.email", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array()), "html", null, true);
        echo "</p>
</div>
";
        
        $__internal_207160e64ac6eb50b7a0aaa2eaec2523456538df1c9ae60d324ab20dd8bcfd1a->leave($__internal_207160e64ac6eb50b7a0aaa2eaec2523456538df1c9ae60d324ab20dd8bcfd1a_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  25 => 2,  22 => 1,);
    }
}
/* <div class="fos_user_user_show">*/
/*     <p>{{ 'profile.show.username'|trans({}, 'FOSUserBundle') }}: {{ user.username }}</p>*/
/*     <p>{{ 'profile.show.email'|trans({}, 'FOSUserBundle') }}: {{ user.email }}</p>*/
/* </div>*/
/* */
