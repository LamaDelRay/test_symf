<?php

/* FOSUserBundle:Registration:checkEmail.html.twig */
class __TwigTemplate_059b4195b06c752a282aee18b7155990de96252e9308b4c22825c8dd90e4da05 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:checkEmail.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ee601112034cc4f46f0f0028366581edd1e51e8aea7575cb253a2e226abfc97f = $this->env->getExtension("native_profiler");
        $__internal_ee601112034cc4f46f0f0028366581edd1e51e8aea7575cb253a2e226abfc97f->enter($__internal_ee601112034cc4f46f0f0028366581edd1e51e8aea7575cb253a2e226abfc97f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ee601112034cc4f46f0f0028366581edd1e51e8aea7575cb253a2e226abfc97f->leave($__internal_ee601112034cc4f46f0f0028366581edd1e51e8aea7575cb253a2e226abfc97f_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_44b559db3b2e4d76b3530faa463d174071e1a221d70a0d5e9b7aeee9ca8ae0cb = $this->env->getExtension("native_profiler");
        $__internal_44b559db3b2e4d76b3530faa463d174071e1a221d70a0d5e9b7aeee9ca8ae0cb->enter($__internal_44b559db3b2e4d76b3530faa463d174071e1a221d70a0d5e9b7aeee9ca8ae0cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_44b559db3b2e4d76b3530faa463d174071e1a221d70a0d5e9b7aeee9ca8ae0cb->leave($__internal_44b559db3b2e4d76b3530faa463d174071e1a221d70a0d5e9b7aeee9ca8ae0cb_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:checkEmail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/*     <p>{{ 'registration.check_email'|trans({'%email%': user.email}) }}</p>*/
/* {% endblock fos_user_content %}*/
/* */
