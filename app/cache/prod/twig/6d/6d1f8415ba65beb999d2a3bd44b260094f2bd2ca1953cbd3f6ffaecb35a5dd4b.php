<?php

/* SonataUserBundle:Admin/Core:user_block.html.twig */
class __TwigTemplate_ef816721aa60e09c6d7cafe5cbd8c1bb438954d481d752db865b06dd87d7dba0 extends Twig_Template
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
        $__internal_9384361f612ce8f6624ce77175afc61adeee85794a5f4d7f74b8c3f22d304572 = $this->env->getExtension("native_profiler");
        $__internal_9384361f612ce8f6624ce77175afc61adeee85794a5f4d7f74b8c3f22d304572->enter($__internal_9384361f612ce8f6624ce77175afc61adeee85794a5f4d7f74b8c3f22d304572_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataUserBundle:Admin/Core:user_block.html.twig"));

        // line 1
        $this->displayBlock('user_block', $context, $blocks);
        
        $__internal_9384361f612ce8f6624ce77175afc61adeee85794a5f4d7f74b8c3f22d304572->leave($__internal_9384361f612ce8f6624ce77175afc61adeee85794a5f4d7f74b8c3f22d304572_prof);

    }

    public function block_user_block($context, array $blocks = array())
    {
        $__internal_2e82b8561b6709514040b7a04b08ecdc92951d24c44dcf2ed2ea84529f4066dc = $this->env->getExtension("native_profiler");
        $__internal_2e82b8561b6709514040b7a04b08ecdc92951d24c44dcf2ed2ea84529f4066dc->enter($__internal_2e82b8561b6709514040b7a04b08ecdc92951d24c44dcf2ed2ea84529f4066dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_block"));

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
        
        $__internal_2e82b8561b6709514040b7a04b08ecdc92951d24c44dcf2ed2ea84529f4066dc->leave($__internal_2e82b8561b6709514040b7a04b08ecdc92951d24c44dcf2ed2ea84529f4066dc_prof);

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
