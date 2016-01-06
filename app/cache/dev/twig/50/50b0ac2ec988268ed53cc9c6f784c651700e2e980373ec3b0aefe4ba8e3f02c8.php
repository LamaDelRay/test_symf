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
        $__internal_5ee7639c45b3ad94844e73c51f60ee9e78d1af367c464753237669916a9015b8 = $this->env->getExtension("native_profiler");
        $__internal_5ee7639c45b3ad94844e73c51f60ee9e78d1af367c464753237669916a9015b8->enter($__internal_5ee7639c45b3ad94844e73c51f60ee9e78d1af367c464753237669916a9015b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle::empty_layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5ee7639c45b3ad94844e73c51f60ee9e78d1af367c464753237669916a9015b8->leave($__internal_5ee7639c45b3ad94844e73c51f60ee9e78d1af367c464753237669916a9015b8_prof);

    }

    // line 14
    public function block_sonata_header($context, array $blocks = array())
    {
        $__internal_622a9fa1aa5abd381ad58f7758391dc8f505cc946669e30c3ecd38d8a110c561 = $this->env->getExtension("native_profiler");
        $__internal_622a9fa1aa5abd381ad58f7758391dc8f505cc946669e30c3ecd38d8a110c561->enter($__internal_622a9fa1aa5abd381ad58f7758391dc8f505cc946669e30c3ecd38d8a110c561_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_header"));

        
        $__internal_622a9fa1aa5abd381ad58f7758391dc8f505cc946669e30c3ecd38d8a110c561->leave($__internal_622a9fa1aa5abd381ad58f7758391dc8f505cc946669e30c3ecd38d8a110c561_prof);

    }

    // line 15
    public function block_sonata_left_side($context, array $blocks = array())
    {
        $__internal_beef6dbcf05b4a8c7f96d73137ecee11ebd560603e5b05814bc8770d03a31c7c = $this->env->getExtension("native_profiler");
        $__internal_beef6dbcf05b4a8c7f96d73137ecee11ebd560603e5b05814bc8770d03a31c7c->enter($__internal_beef6dbcf05b4a8c7f96d73137ecee11ebd560603e5b05814bc8770d03a31c7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_left_side"));

        
        $__internal_beef6dbcf05b4a8c7f96d73137ecee11ebd560603e5b05814bc8770d03a31c7c->leave($__internal_beef6dbcf05b4a8c7f96d73137ecee11ebd560603e5b05814bc8770d03a31c7c_prof);

    }

    // line 16
    public function block_sonata_nav($context, array $blocks = array())
    {
        $__internal_c0965e33a10f6d04834901d18fbc38072b35cd2eb240583fa1faf64d47686ce1 = $this->env->getExtension("native_profiler");
        $__internal_c0965e33a10f6d04834901d18fbc38072b35cd2eb240583fa1faf64d47686ce1->enter($__internal_c0965e33a10f6d04834901d18fbc38072b35cd2eb240583fa1faf64d47686ce1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_nav"));

        
        $__internal_c0965e33a10f6d04834901d18fbc38072b35cd2eb240583fa1faf64d47686ce1->leave($__internal_c0965e33a10f6d04834901d18fbc38072b35cd2eb240583fa1faf64d47686ce1_prof);

    }

    // line 17
    public function block_sonata_breadcrumb($context, array $blocks = array())
    {
        $__internal_ab469c355ff327511963df11c3600d9a845629bb4a84f0c5ee1d3da2df1ef389 = $this->env->getExtension("native_profiler");
        $__internal_ab469c355ff327511963df11c3600d9a845629bb4a84f0c5ee1d3da2df1ef389->enter($__internal_ab469c355ff327511963df11c3600d9a845629bb4a84f0c5ee1d3da2df1ef389_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_breadcrumb"));

        
        $__internal_ab469c355ff327511963df11c3600d9a845629bb4a84f0c5ee1d3da2df1ef389->leave($__internal_ab469c355ff327511963df11c3600d9a845629bb4a84f0c5ee1d3da2df1ef389_prof);

    }

    // line 19
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_3c6a40479d0304f3cecfd0e6b0671fe8e1cd6abda87ceec057762e66f1695fc2 = $this->env->getExtension("native_profiler");
        $__internal_3c6a40479d0304f3cecfd0e6b0671fe8e1cd6abda87ceec057762e66f1695fc2->enter($__internal_3c6a40479d0304f3cecfd0e6b0671fe8e1cd6abda87ceec057762e66f1695fc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_3c6a40479d0304f3cecfd0e6b0671fe8e1cd6abda87ceec057762e66f1695fc2->leave($__internal_3c6a40479d0304f3cecfd0e6b0671fe8e1cd6abda87ceec057762e66f1695fc2_prof);

    }

    // line 31
    public function block_sonata_wrapper($context, array $blocks = array())
    {
        $__internal_ada683c531d27cac576cd478182283f712d4534438bd96e0340dadc9a07cbc4e = $this->env->getExtension("native_profiler");
        $__internal_ada683c531d27cac576cd478182283f712d4534438bd96e0340dadc9a07cbc4e->enter($__internal_ada683c531d27cac576cd478182283f712d4534438bd96e0340dadc9a07cbc4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_wrapper"));

        // line 32
        echo "    ";
        $this->displayBlock('sonata_page_content', $context, $blocks);
        
        $__internal_ada683c531d27cac576cd478182283f712d4534438bd96e0340dadc9a07cbc4e->leave($__internal_ada683c531d27cac576cd478182283f712d4534438bd96e0340dadc9a07cbc4e_prof);

    }

    public function block_sonata_page_content($context, array $blocks = array())
    {
        $__internal_12a113f06efea84c9e6e16ef8673408a4bf2f759fc1333253cf501692b9c1127 = $this->env->getExtension("native_profiler");
        $__internal_12a113f06efea84c9e6e16ef8673408a4bf2f759fc1333253cf501692b9c1127->enter($__internal_12a113f06efea84c9e6e16ef8673408a4bf2f759fc1333253cf501692b9c1127_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_page_content"));

        // line 33
        echo "        ";
        $this->displayParentBlock("sonata_page_content", $context, $blocks);
        echo "
    ";
        
        $__internal_12a113f06efea84c9e6e16ef8673408a4bf2f759fc1333253cf501692b9c1127->leave($__internal_12a113f06efea84c9e6e16ef8673408a4bf2f759fc1333253cf501692b9c1127_prof);

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
