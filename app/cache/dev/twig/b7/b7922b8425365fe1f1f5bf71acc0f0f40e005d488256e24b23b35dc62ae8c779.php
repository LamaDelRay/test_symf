<?php

/* FOSUserBundle:Group:show_content.html.twig */
class __TwigTemplate_6a2a423f81d784302a85774f97f21aa906e8db17d8a732e7e684bce7aaad7a44 extends Twig_Template
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
        $__internal_9e97f2784ef2c49812f1414d921a78ee57d3e1d35252125a6e629654fd0b670f = $this->env->getExtension("native_profiler");
        $__internal_9e97f2784ef2c49812f1414d921a78ee57d3e1d35252125a6e629654fd0b670f->enter($__internal_9e97f2784ef2c49812f1414d921a78ee57d3e1d35252125a6e629654fd0b670f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show_content.html.twig"));

        // line 1
        echo "<div class=\"fos_user_group_show\">
    <p>";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("group.show.name", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "getName", array(), "method"), "html", null, true);
        echo "</p>
</div>
";
        
        $__internal_9e97f2784ef2c49812f1414d921a78ee57d3e1d35252125a6e629654fd0b670f->leave($__internal_9e97f2784ef2c49812f1414d921a78ee57d3e1d35252125a6e629654fd0b670f_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* <div class="fos_user_group_show">*/
/*     <p>{{ 'group.show.name'|trans([], 'FOSUserBundle') }}: {{ group.getName() }}</p>*/
/* </div>*/
/* */
