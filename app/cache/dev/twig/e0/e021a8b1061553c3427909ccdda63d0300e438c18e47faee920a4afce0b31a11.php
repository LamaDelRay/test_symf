<?php

/* FOSUserBundle:Registration:email.txt.twig */
class __TwigTemplate_b2bc79aafbab808c4c50c6d38e29b7978a9d494445108b45aa4c1e8ba37378d6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d35d20fa8dcfc874694767eed1f9c2db74b34b5ee032f5871a27c92d4e33b688 = $this->env->getExtension("native_profiler");
        $__internal_d35d20fa8dcfc874694767eed1f9c2db74b34b5ee032f5871a27c92d4e33b688->enter($__internal_d35d20fa8dcfc874694767eed1f9c2db74b34b5ee032f5871a27c92d4e33b688_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 1
        $this->displayBlock('subject', $context, $blocks);
        // line 6
        $this->displayBlock('body_text', $context, $blocks);
        // line 11
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_d35d20fa8dcfc874694767eed1f9c2db74b34b5ee032f5871a27c92d4e33b688->leave($__internal_d35d20fa8dcfc874694767eed1f9c2db74b34b5ee032f5871a27c92d4e33b688_prof);

    }

    // line 1
    public function block_subject($context, array $blocks = array())
    {
        $__internal_05e1d00e0a513146d070a703581f96aface66c50678cd52c15c1a2e067532796 = $this->env->getExtension("native_profiler");
        $__internal_05e1d00e0a513146d070a703581f96aface66c50678cd52c15c1a2e067532796->enter($__internal_05e1d00e0a513146d070a703581f96aface66c50678cd52c15c1a2e067532796_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 3
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_05e1d00e0a513146d070a703581f96aface66c50678cd52c15c1a2e067532796->leave($__internal_05e1d00e0a513146d070a703581f96aface66c50678cd52c15c1a2e067532796_prof);

    }

    // line 6
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_0f5fc740846da9fd6af73d1f2308c1781fa22e7b21d6149f14c04aa7d636c706 = $this->env->getExtension("native_profiler");
        $__internal_0f5fc740846da9fd6af73d1f2308c1781fa22e7b21d6149f14c04aa7d636c706->enter($__internal_0f5fc740846da9fd6af73d1f2308c1781fa22e7b21d6149f14c04aa7d636c706_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 8
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_0f5fc740846da9fd6af73d1f2308c1781fa22e7b21d6149f14c04aa7d636c706->leave($__internal_0f5fc740846da9fd6af73d1f2308c1781fa22e7b21d6149f14c04aa7d636c706_prof);

    }

    // line 11
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_df3bced6de94a0c43128ef9ef893f8a6c3215bddca15d7a0da361d426591f11c = $this->env->getExtension("native_profiler");
        $__internal_df3bced6de94a0c43128ef9ef893f8a6c3215bddca15d7a0da361d426591f11c->enter($__internal_df3bced6de94a0c43128ef9ef893f8a6c3215bddca15d7a0da361d426591f11c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_df3bced6de94a0c43128ef9ef893f8a6c3215bddca15d7a0da361d426591f11c->leave($__internal_df3bced6de94a0c43128ef9ef893f8a6c3215bddca15d7a0da361d426591f11c_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  66 => 11,  57 => 8,  51 => 6,  42 => 3,  36 => 1,  29 => 11,  27 => 6,  25 => 1,);
    }
}
/* {% block subject %}*/
/* {% autoescape false %}*/
/* {{ 'registration.email.subject'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}, 'FOSUserBundle') }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_text %}*/
/* {% autoescape false %}*/
/* {{ 'registration.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}, 'FOSUserBundle') }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_html %}{% endblock %}*/
/* */
