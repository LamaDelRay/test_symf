<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_4ad7197a2c475923551b0a78fa70913ccfa8b8e916b68fec86d766618c1495e8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:edit.html.twig", 1);
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
        $__internal_5b8388d7530c36e4177d02e29bcdc87a2c0e5e688530cfc70ab3ceb0e25a7045 = $this->env->getExtension("native_profiler");
        $__internal_5b8388d7530c36e4177d02e29bcdc87a2c0e5e688530cfc70ab3ceb0e25a7045->enter($__internal_5b8388d7530c36e4177d02e29bcdc87a2c0e5e688530cfc70ab3ceb0e25a7045_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5b8388d7530c36e4177d02e29bcdc87a2c0e5e688530cfc70ab3ceb0e25a7045->leave($__internal_5b8388d7530c36e4177d02e29bcdc87a2c0e5e688530cfc70ab3ceb0e25a7045_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_65e76e35f89fa17e8ede95f27d438721cfb7e942db681dd93ec9519591a03d04 = $this->env->getExtension("native_profiler");
        $__internal_65e76e35f89fa17e8ede95f27d438721cfb7e942db681dd93ec9519591a03d04->enter($__internal_65e76e35f89fa17e8ede95f27d438721cfb7e942db681dd93ec9519591a03d04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_65e76e35f89fa17e8ede95f27d438721cfb7e942db681dd93ec9519591a03d04->leave($__internal_65e76e35f89fa17e8ede95f27d438721cfb7e942db681dd93ec9519591a03d04_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/* {% include "FOSUserBundle:Profile:edit_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
