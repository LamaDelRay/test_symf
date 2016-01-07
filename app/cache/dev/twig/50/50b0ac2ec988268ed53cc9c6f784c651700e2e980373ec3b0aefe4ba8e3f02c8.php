<?php

/* SonataAdminBundle::empty_layout.html.twig */
class __TwigTemplate_0715cf6b9a0420b53d4665bb922315f5dff4f9c834d179b6a2a2320bd51e8704 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle::standard_layout.html.twig", "SonataAdminBundle::empty_layout.html.twig", 12);
        $this->blocks = array(
            'sonata_header' => array($this, 'block_sonata_header'),
            'sonata_left_side' => array($this, 'block_sonata_left_side'),
            'sonata_nav' => array($this, 'block_sonata_nav'),
            'sonata_breadcrumb' => array($this, 'block_sonata_breadcrumb'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'sonata_wrapper' => array($this, 'block_sonata_wrapper'),
            'sonata_page_content' => array($this, 'block_sonata_page_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle::standard_layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b67cadebd78a48f73abf12d67d0f7c981edfc55513b60dc66a685932f7eebb68 = $this->env->getExtension("native_profiler");
        $__internal_b67cadebd78a48f73abf12d67d0f7c981edfc55513b60dc66a685932f7eebb68->enter($__internal_b67cadebd78a48f73abf12d67d0f7c981edfc55513b60dc66a685932f7eebb68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle::empty_layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b67cadebd78a48f73abf12d67d0f7c981edfc55513b60dc66a685932f7eebb68->leave($__internal_b67cadebd78a48f73abf12d67d0f7c981edfc55513b60dc66a685932f7eebb68_prof);

    }

    // line 14
    public function block_sonata_header($context, array $blocks = array())
    {
        $__internal_d94bb49b70928cfbf31f170c0bdb3b554634c336cc86fa861cc0e3b891468003 = $this->env->getExtension("native_profiler");
        $__internal_d94bb49b70928cfbf31f170c0bdb3b554634c336cc86fa861cc0e3b891468003->enter($__internal_d94bb49b70928cfbf31f170c0bdb3b554634c336cc86fa861cc0e3b891468003_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_header"));

        
        $__internal_d94bb49b70928cfbf31f170c0bdb3b554634c336cc86fa861cc0e3b891468003->leave($__internal_d94bb49b70928cfbf31f170c0bdb3b554634c336cc86fa861cc0e3b891468003_prof);

    }

    // line 15
    public function block_sonata_left_side($context, array $blocks = array())
    {
        $__internal_e174c1a0d1201f01e5dbb9e5d83fdc3583975dfda8fa9cc702f3297551e83b28 = $this->env->getExtension("native_profiler");
        $__internal_e174c1a0d1201f01e5dbb9e5d83fdc3583975dfda8fa9cc702f3297551e83b28->enter($__internal_e174c1a0d1201f01e5dbb9e5d83fdc3583975dfda8fa9cc702f3297551e83b28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_left_side"));

        
        $__internal_e174c1a0d1201f01e5dbb9e5d83fdc3583975dfda8fa9cc702f3297551e83b28->leave($__internal_e174c1a0d1201f01e5dbb9e5d83fdc3583975dfda8fa9cc702f3297551e83b28_prof);

    }

    // line 16
    public function block_sonata_nav($context, array $blocks = array())
    {
        $__internal_24ab5813ed00d161c5aa602438976da58ecf51fa22b251641ffec0f75a90decc = $this->env->getExtension("native_profiler");
        $__internal_24ab5813ed00d161c5aa602438976da58ecf51fa22b251641ffec0f75a90decc->enter($__internal_24ab5813ed00d161c5aa602438976da58ecf51fa22b251641ffec0f75a90decc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_nav"));

        
        $__internal_24ab5813ed00d161c5aa602438976da58ecf51fa22b251641ffec0f75a90decc->leave($__internal_24ab5813ed00d161c5aa602438976da58ecf51fa22b251641ffec0f75a90decc_prof);

    }

    // line 17
    public function block_sonata_breadcrumb($context, array $blocks = array())
    {
        $__internal_ff6dda741ebd7ff136027946f4c6281d3d51abab44dd9a5e43e9b2734777be03 = $this->env->getExtension("native_profiler");
        $__internal_ff6dda741ebd7ff136027946f4c6281d3d51abab44dd9a5e43e9b2734777be03->enter($__internal_ff6dda741ebd7ff136027946f4c6281d3d51abab44dd9a5e43e9b2734777be03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_breadcrumb"));

        
        $__internal_ff6dda741ebd7ff136027946f4c6281d3d51abab44dd9a5e43e9b2734777be03->leave($__internal_ff6dda741ebd7ff136027946f4c6281d3d51abab44dd9a5e43e9b2734777be03_prof);

    }

    // line 19
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_aca80287f722a83060057621898ff77fd526a47daf83907e35ae366589322b40 = $this->env->getExtension("native_profiler");
        $__internal_aca80287f722a83060057621898ff77fd526a47daf83907e35ae366589322b40->enter($__internal_aca80287f722a83060057621898ff77fd526a47daf83907e35ae366589322b40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 20
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "

    <style>
        .content {
            margin: 0px;
            padding: 0px;
        }
    </style>

";
        
        $__internal_aca80287f722a83060057621898ff77fd526a47daf83907e35ae366589322b40->leave($__internal_aca80287f722a83060057621898ff77fd526a47daf83907e35ae366589322b40_prof);

    }

    // line 31
    public function block_sonata_wrapper($context, array $blocks = array())
    {
        $__internal_71f919c43a5e5a04b1ab1aa66357a55fea429fe5cabd02a98e3187b6da81a435 = $this->env->getExtension("native_profiler");
        $__internal_71f919c43a5e5a04b1ab1aa66357a55fea429fe5cabd02a98e3187b6da81a435->enter($__internal_71f919c43a5e5a04b1ab1aa66357a55fea429fe5cabd02a98e3187b6da81a435_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_wrapper"));

        // line 32
        echo "    ";
        $this->displayBlock('sonata_page_content', $context, $blocks);
        
        $__internal_71f919c43a5e5a04b1ab1aa66357a55fea429fe5cabd02a98e3187b6da81a435->leave($__internal_71f919c43a5e5a04b1ab1aa66357a55fea429fe5cabd02a98e3187b6da81a435_prof);

    }

    public function block_sonata_page_content($context, array $blocks = array())
    {
        $__internal_c85caeb637730beb811068f9ed5ee58d6b6bc95939020e0869b448aa5156c219 = $this->env->getExtension("native_profiler");
        $__internal_c85caeb637730beb811068f9ed5ee58d6b6bc95939020e0869b448aa5156c219->enter($__internal_c85caeb637730beb811068f9ed5ee58d6b6bc95939020e0869b448aa5156c219_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_page_content"));

        // line 33
        echo "        ";
        $this->displayParentBlock("sonata_page_content", $context, $blocks);
        echo "
    ";
        
        $__internal_c85caeb637730beb811068f9ed5ee58d6b6bc95939020e0869b448aa5156c219->leave($__internal_c85caeb637730beb811068f9ed5ee58d6b6bc95939020e0869b448aa5156c219_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle::empty_layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 33,  114 => 32,  108 => 31,  90 => 20,  84 => 19,  73 => 17,  62 => 16,  51 => 15,  40 => 14,  11 => 12,);
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
/* {% extends 'SonataAdminBundle::standard_layout.html.twig' %}*/
/* */
/* {% block sonata_header %}{% endblock %}*/
/* {% block sonata_left_side %}{% endblock %}*/
/* {% block sonata_nav %}{% endblock %}*/
/* {% block sonata_breadcrumb %}{% endblock %}*/
/* */
/* {% block stylesheets %}*/
/*     {{ parent() }}*/
/* */
/*     <style>*/
/*         .content {*/
/*             margin: 0px;*/
/*             padding: 0px;*/
/*         }*/
/*     </style>*/
/* */
/* {% endblock %}*/
/* */
/* {% block sonata_wrapper %}*/
/*     {% block sonata_page_content %}*/
/*         {{ parent() }}*/
/*     {% endblock %}*/
/* {% endblock %}*/
