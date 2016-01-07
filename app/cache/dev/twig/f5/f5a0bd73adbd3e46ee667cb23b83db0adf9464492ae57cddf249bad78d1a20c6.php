<?php

/* SonataAdminBundle:Core:user_block.html.twig */
class __TwigTemplate_393b931b1534b3f76a4ab1218dd97322c42edc5591a6176b2543cb28ba825848 extends Twig_Template
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
        $__internal_e7f8d3f2721611075ee9ae1dc69b99eee05cbfd8b53de2506229c05fee3edbf2 = $this->env->getExtension("native_profiler");
        $__internal_e7f8d3f2721611075ee9ae1dc69b99eee05cbfd8b53de2506229c05fee3edbf2->enter($__internal_e7f8d3f2721611075ee9ae1dc69b99eee05cbfd8b53de2506229c05fee3edbf2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Core:user_block.html.twig"));

        // line 1
        $this->displayBlock('user_block', $context, $blocks);
        
        $__internal_e7f8d3f2721611075ee9ae1dc69b99eee05cbfd8b53de2506229c05fee3edbf2->leave($__internal_e7f8d3f2721611075ee9ae1dc69b99eee05cbfd8b53de2506229c05fee3edbf2_prof);

    }

    public function block_user_block($context, array $blocks = array())
    {
        $__internal_77ea29ff440c85235a4dbfa5f22dc90363fb5441fcc073ee249b89660ad7176e = $this->env->getExtension("native_profiler");
        $__internal_77ea29ff440c85235a4dbfa5f22dc90363fb5441fcc073ee249b89660ad7176e->enter($__internal_77ea29ff440c85235a4dbfa5f22dc90363fb5441fcc073ee249b89660ad7176e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_block"));

        
        $__internal_77ea29ff440c85235a4dbfa5f22dc90363fb5441fcc073ee249b89660ad7176e->leave($__internal_77ea29ff440c85235a4dbfa5f22dc90363fb5441fcc073ee249b89660ad7176e_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Core:user_block.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block user_block %}{# Customize this value #}{% endblock %}*/
/* */
