<?php

/* SonataUserBundle:Admin/Core:user_block.html.twig */
class __TwigTemplate_9327a9765caf8619e25f778977a6748c8ba37ac3c50c60c2c4fc0e9ece287fe4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'user_block' => array($this, 'block_user_block'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_73f4bf721753c78a6e312dbff480071b590c23e0377d2cec2daaf8a449f7eb04 = $this->env->getExtension("native_profiler");
        $__internal_73f4bf721753c78a6e312dbff480071b590c23e0377d2cec2daaf8a449f7eb04->enter($__internal_73f4bf721753c78a6e312dbff480071b590c23e0377d2cec2daaf8a449f7eb04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataUserBundle:Admin/Core:user_block.html.twig"));

        // line 1
        $this->displayBlock('user_block', $context, $blocks);
        
        $__internal_73f4bf721753c78a6e312dbff480071b590c23e0377d2cec2daaf8a449f7eb04->leave($__internal_73f4bf721753c78a6e312dbff480071b590c23e0377d2cec2daaf8a449f7eb04_prof);

    }

    public function block_user_block($context, array $blocks = array())
    {
        $__internal_3a3a19c32f1df9f5b6824f8d5c7285ea24f5cb1b4275a8e2fcb789f20d5c1f4b = $this->env->getExtension("native_profiler");
        $__internal_3a3a19c32f1df9f5b6824f8d5c7285ea24f5cb1b4275a8e2fcb789f20d5c1f4b->enter($__internal_3a3a19c32f1df9f5b6824f8d5c7285ea24f5cb1b4275a8e2fcb789f20d5c1f4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_block"));

        // line 2
        echo "    ";
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) {
            // line 3
            echo "        ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "html", null, true);
            echo "

        ";
            // line 5
            if (($this->env->getExtension('security')->isGranted("ROLE_PREVIOUS_ADMIN") && $this->getAttribute((isset($context["sonata_user"]) ? $context["sonata_user"] : $this->getContext($context, "sonata_user")), "impersonating", array()))) {
                // line 6
                echo "            <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl($this->getAttribute($this->getAttribute((isset($context["sonata_user"]) ? $context["sonata_user"] : $this->getContext($context, "sonata_user")), "impersonating", array()), "route", array()), twig_array_merge($this->getAttribute($this->getAttribute((isset($context["sonata_user"]) ? $context["sonata_user"] : $this->getContext($context, "sonata_user")), "impersonating", array()), "parameters", array()), array("_switch_user" => "_exit"))), "html", null, true);
                echo "\">(exit)</a>
        ";
            }
            // line 8
            echo "
        - <a href=\"";
            // line 9
            echo $this->env->getExtension('routing')->getUrl("sonata_user_admin_security_logout");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("user_block_logout", array(), "SonataUserBundle"), "html", null, true);
            echo "</a>
    ";
        }
        
        $__internal_3a3a19c32f1df9f5b6824f8d5c7285ea24f5cb1b4275a8e2fcb789f20d5c1f4b->leave($__internal_3a3a19c32f1df9f5b6824f8d5c7285ea24f5cb1b4275a8e2fcb789f20d5c1f4b_prof);

    }

    public function getTemplateName()
    {
        return "SonataUserBundle:Admin/Core:user_block.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  55 => 9,  52 => 8,  46 => 6,  44 => 5,  38 => 3,  35 => 2,  23 => 1,);
    }
}
/* {% block user_block %}*/
/*     {% if app.user %}*/
/*         {{ app.user }}*/
/* */
/*         {% if is_granted('ROLE_PREVIOUS_ADMIN') and sonata_user.impersonating %}*/
/*             <a href="{{ url(sonata_user.impersonating.route, sonata_user.impersonating.parameters| merge({'_switch_user': '_exit'})) }}">(exit)</a>*/
/*         {% endif %}*/
/* */
/*         - <a href="{{ url('sonata_user_admin_security_logout') }}">{{ 'user_block_logout'|trans({}, 'SonataUserBundle') }}</a>*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
