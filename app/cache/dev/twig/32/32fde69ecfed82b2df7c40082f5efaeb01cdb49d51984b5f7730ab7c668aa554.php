<?php

/* FOSUserBundle:Group:show_content.html.twig */
class __TwigTemplate_ccc1d7c6b5589a8b8e85ccd37d61e2974d846652b837a0fba3525fd164427bc8 extends Twig_Template
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
        $__internal_f34295477bd94d8f0b9b5e09779a7e7990ee3928316b8828bb279f8d78a90d02 = $this->env->getExtension("native_profiler");
        $__internal_f34295477bd94d8f0b9b5e09779a7e7990ee3928316b8828bb279f8d78a90d02->enter($__internal_f34295477bd94d8f0b9b5e09779a7e7990ee3928316b8828bb279f8d78a90d02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show_content.html.twig"));

        // line 2
        echo "
<div class=\"fos_user_group_show\">
    <p>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("group.show.name", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "getName", array(), "method"), "html", null, true);
        echo "</p>
</div>
";
        
        $__internal_f34295477bd94d8f0b9b5e09779a7e7990ee3928316b8828bb279f8d78a90d02->leave($__internal_f34295477bd94d8f0b9b5e09779a7e7990ee3928316b8828bb279f8d78a90d02_prof);

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
        return array (  26 => 4,  22 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* <div class="fos_user_group_show">*/
/*     <p>{{ 'group.show.name'|trans }}: {{ group.getName() }}</p>*/
/* </div>*/
/* */
