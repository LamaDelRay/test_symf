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
        $__internal_13e70a09a2742d5641f7ab252c9b8dff6df9dd57bd240f7862c627e66bed21f6 = $this->env->getExtension("native_profiler");
        $__internal_13e70a09a2742d5641f7ab252c9b8dff6df9dd57bd240f7862c627e66bed21f6->enter($__internal_13e70a09a2742d5641f7ab252c9b8dff6df9dd57bd240f7862c627e66bed21f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Core:user_block.html.twig"));

        // line 1
        $this->displayBlock('user_block', $context, $blocks);
        
        $__internal_13e70a09a2742d5641f7ab252c9b8dff6df9dd57bd240f7862c627e66bed21f6->leave($__internal_13e70a09a2742d5641f7ab252c9b8dff6df9dd57bd240f7862c627e66bed21f6_prof);

    }

    public function block_user_block($context, array $blocks = array())
    {
        $__internal_7b6c79d04bfade25bcf4a4eb0e808e4b8ca1ae6f984cbd7d0fc4f7b62bab411f = $this->env->getExtension("native_profiler");
        $__internal_7b6c79d04bfade25bcf4a4eb0e808e4b8ca1ae6f984cbd7d0fc4f7b62bab411f->enter($__internal_7b6c79d04bfade25bcf4a4eb0e808e4b8ca1ae6f984cbd7d0fc4f7b62bab411f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_block"));

        
        $__internal_7b6c79d04bfade25bcf4a4eb0e808e4b8ca1ae6f984cbd7d0fc4f7b62bab411f->leave($__internal_7b6c79d04bfade25bcf4a4eb0e808e4b8ca1ae6f984cbd7d0fc4f7b62bab411f_prof);

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
