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
        $__internal_d0e060573d11365c53be6a6fb29aa8983b46b53d1bc3764f9e1f7a7d9da0f458 = $this->env->getExtension("native_profiler");
        $__internal_d0e060573d11365c53be6a6fb29aa8983b46b53d1bc3764f9e1f7a7d9da0f458->enter($__internal_d0e060573d11365c53be6a6fb29aa8983b46b53d1bc3764f9e1f7a7d9da0f458_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_core_menu.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d0e060573d11365c53be6a6fb29aa8983b46b53d1bc3764f9e1f7a7d9da0f458->leave($__internal_d0e060573d11365c53be6a6fb29aa8983b46b53d1bc3764f9e1f7a7d9da0f458_prof);

    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        $__internal_b0948998728017c5bb710e463e10f0cb96e67d69b9a2f1dc86ae2c7fd01ef808 = $this->env->getExtension("native_profiler");
        $__internal_b0948998728017c5bb710e463e10f0cb96e67d69b9a2f1dc86ae2c7fd01ef808->enter($__internal_b0948998728017c5bb710e463e10f0cb96e67d69b9a2f1dc86ae2c7fd01ef808_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 15
        echo "    ";
        echo $this->env->getExtension('knp_menu')->render((isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu")), (isset($context["menu_options"]) ? $context["menu_options"] : $this->getContext($context, "menu_options")));
        echo "
";
        
        $__internal_b0948998728017c5bb710e463e10f0cb96e67d69b9a2f1dc86ae2c7fd01ef808->leave($__internal_b0948998728017c5bb710e463e10f0cb96e67d69b9a2f1dc86ae2c7fd01ef808_prof);

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
