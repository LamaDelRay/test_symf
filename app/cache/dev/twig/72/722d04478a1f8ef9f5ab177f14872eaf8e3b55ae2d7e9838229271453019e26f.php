<?php

/* FOSUserBundle:Registration:checkEmail.html.twig */
class __TwigTemplate_e7d697b64d88a4d35812639bb86e618f3b0b9e1557bae8c771127dd3faf05a9b extends Twig_Template
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
        $__internal_5a405df0dbd6b2c8aaeca77c1d985185a37ce01e8ff75b0eab1f7770cb7fe59b = $this->env->getExtension("native_profiler");
        $__internal_5a405df0dbd6b2c8aaeca77c1d985185a37ce01e8ff75b0eab1f7770cb7fe59b->enter($__internal_5a405df0dbd6b2c8aaeca77c1d985185a37ce01e8ff75b0eab1f7770cb7fe59b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a405df0dbd6b2c8aaeca77c1d985185a37ce01e8ff75b0eab1f7770cb7fe59b->leave($__internal_5a405df0dbd6b2c8aaeca77c1d985185a37ce01e8ff75b0eab1f7770cb7fe59b_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_12b545c1160ca591723b406f256878c7831cb5e47d9ca1cc8ec020bf701c5a7c = $this->env->getExtension("native_profiler");
        $__internal_12b545c1160ca591723b406f256878c7831cb5e47d9ca1cc8ec020bf701c5a7c->enter($__internal_12b545c1160ca591723b406f256878c7831cb5e47d9ca1cc8ec020bf701c5a7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_12b545c1160ca591723b406f256878c7831cb5e47d9ca1cc8ec020bf701c5a7c->leave($__internal_12b545c1160ca591723b406f256878c7831cb5e47d9ca1cc8ec020bf701c5a7c_prof);

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
