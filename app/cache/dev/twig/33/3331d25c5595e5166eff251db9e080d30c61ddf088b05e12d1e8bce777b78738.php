<?php

/* SonataAdminBundle:CRUD:list__select.html.twig */
class __TwigTemplate_0bcb3f4300afad63ddd82c4e6dae47e72fa1a1ca81c0d3268deea2c8172682c2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list__select.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6debaf8de64a734f797c72dfc03fbca41ec2677aa2cf67a945c74fb0280f1141 = $this->env->getExtension("native_profiler");
        $__internal_6debaf8de64a734f797c72dfc03fbca41ec2677aa2cf67a945c74fb0280f1141->enter($__internal_6debaf8de64a734f797c72dfc03fbca41ec2677aa2cf67a945c74fb0280f1141_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list__select.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6debaf8de64a734f797c72dfc03fbca41ec2677aa2cf67a945c74fb0280f1141->leave($__internal_6debaf8de64a734f797c72dfc03fbca41ec2677aa2cf67a945c74fb0280f1141_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_7daf046082c5386b2a6905b2c4aa9d528c1615b97165d810c7b49521278f0b5f = $this->env->getExtension("native_profiler");
        $__internal_7daf046082c5386b2a6905b2c4aa9d528c1615b97165d810c7b49521278f0b5f->enter($__internal_7daf046082c5386b2a6905b2c4aa9d528c1615b97165d810c7b49521278f0b5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    <a class=\"btn btn-default\" href=\"#\">
        <i class=\"glyphicon glyphicon-arrow-right\"></i>
        ";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("list_select", array(), "SonataAdminBundle"), "html", null, true);
        echo "
    </a>
";
        
        $__internal_7daf046082c5386b2a6905b2c4aa9d528c1615b97165d810c7b49521278f0b5f->leave($__internal_7daf046082c5386b2a6905b2c4aa9d528c1615b97165d810c7b49521278f0b5f_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list__select.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 17,  39 => 15,  33 => 14,  18 => 12,);
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
/* {% extends admin.getTemplate('base_list_field') %}*/
/* */
/* {% block field %}*/
/*     <a class="btn btn-default" href="#">*/
/*         <i class="glyphicon glyphicon-arrow-right"></i>*/
/*         {{ 'list_select'|trans({}, 'SonataAdminBundle') }}*/
/*     </a>*/
/* {% endblock %}*/
/* */
