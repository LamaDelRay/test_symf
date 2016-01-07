<?php

/* SonataBlockBundle:Block:block_core_menu.html.twig */
class __TwigTemplate_12c143ffda8d46f9873a35ad25d372bdef0275581f98caa110ae6408ab2dc091 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'block' => array($this, 'block_block'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate($this->getAttribute($this->getAttribute((isset($context["sonata_block"]) ? $context["sonata_block"] : $this->getContext($context, "sonata_block")), "templates", array()), "block_base", array()), "SonataBlockBundle:Block:block_core_menu.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5f68ab7291b04b18d1bd5c924cc1fdc44e545e02760567f0bc08def786d00895 = $this->env->getExtension("native_profiler");
        $__internal_5f68ab7291b04b18d1bd5c924cc1fdc44e545e02760567f0bc08def786d00895->enter($__internal_5f68ab7291b04b18d1bd5c924cc1fdc44e545e02760567f0bc08def786d00895_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_core_menu.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5f68ab7291b04b18d1bd5c924cc1fdc44e545e02760567f0bc08def786d00895->leave($__internal_5f68ab7291b04b18d1bd5c924cc1fdc44e545e02760567f0bc08def786d00895_prof);

    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        $__internal_59e96a940ac256473caa49c4d8814d6bd0dd355ba9a4378609d3a428baa3364c = $this->env->getExtension("native_profiler");
        $__internal_59e96a940ac256473caa49c4d8814d6bd0dd355ba9a4378609d3a428baa3364c->enter($__internal_59e96a940ac256473caa49c4d8814d6bd0dd355ba9a4378609d3a428baa3364c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 15
        echo "    ";
        echo $this->env->getExtension('knp_menu')->render((isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu")), (isset($context["menu_options"]) ? $context["menu_options"] : $this->getContext($context, "menu_options")));
        echo "
";
        
        $__internal_59e96a940ac256473caa49c4d8814d6bd0dd355ba9a4378609d3a428baa3364c->leave($__internal_59e96a940ac256473caa49c4d8814d6bd0dd355ba9a4378609d3a428baa3364c_prof);

    }

    public function getTemplateName()
    {
        return "SonataBlockBundle:Block:block_core_menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 15,  33 => 14,  18 => 12,);
    }
}
/* {#*/
/* */
/* This file is part of the Sonata package.*/
/* */
/* (c) Thomas Rabaix <thomas.rabaix@sonata-project.org>*/
/* */
/* For the full copyright and license information, please view the LICENSE*/
/* file that was distributed with this source code.*/
/* */
/* #}*/
/* */
/* {% extends sonata_block.templates.block_base %}*/
/* */
/* {% block block %}*/
/*     {{ knp_menu_render(menu, menu_options) }}*/
/* {% endblock %}*/
/* */
