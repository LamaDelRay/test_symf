<?php

/* SonataAdminBundle:CRUD:action.html.twig */
class __TwigTemplate_c91e20a0e2de03c95403c1a4c76fbdd2a61d963bad260113054fd16723683069 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'actions' => array($this, 'block_actions'),
            'tab_menu' => array($this, 'block_tab_menu'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "SonataAdminBundle:CRUD:action.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ee739744eae7e25131bbd7728145d130cdb82da00de64c68917ced3f095a5284 = $this->env->getExtension("native_profiler");
        $__internal_ee739744eae7e25131bbd7728145d130cdb82da00de64c68917ced3f095a5284->enter($__internal_ee739744eae7e25131bbd7728145d130cdb82da00de64c68917ced3f095a5284_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:action.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ee739744eae7e25131bbd7728145d130cdb82da00de64c68917ced3f095a5284->leave($__internal_ee739744eae7e25131bbd7728145d130cdb82da00de64c68917ced3f095a5284_prof);

    }

    // line 14
    public function block_actions($context, array $blocks = array())
    {
        $__internal_b44ad4278ffe7c9daa3c4b3821048de1c5f23ed7e5c9b67942ee414752f9aba7 = $this->env->getExtension("native_profiler");
        $__internal_b44ad4278ffe7c9daa3c4b3821048de1c5f23ed7e5c9b67942ee414752f9aba7->enter($__internal_b44ad4278ffe7c9daa3c4b3821048de1c5f23ed7e5c9b67942ee414752f9aba7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 15
        echo "    <li>";
        $this->loadTemplate("SonataAdminBundle:Button:create_button.html.twig", "SonataAdminBundle:CRUD:action.html.twig", 15)->display($context);
        echo "</li>
    <li>";
        // line 16
        $this->loadTemplate("SonataAdminBundle:Button:list_button.html.twig", "SonataAdminBundle:CRUD:action.html.twig", 16)->display($context);
        echo "</li>
";
        
        $__internal_b44ad4278ffe7c9daa3c4b3821048de1c5f23ed7e5c9b67942ee414752f9aba7->leave($__internal_b44ad4278ffe7c9daa3c4b3821048de1c5f23ed7e5c9b67942ee414752f9aba7_prof);

    }

    // line 19
    public function block_tab_menu($context, array $blocks = array())
    {
        $__internal_9f719c3e4729f31605fe887e70b5c467b3c7288a87296dd93577a455becd9d3f = $this->env->getExtension("native_profiler");
        $__internal_9f719c3e4729f31605fe887e70b5c467b3c7288a87296dd93577a455becd9d3f->enter($__internal_9f719c3e4729f31605fe887e70b5c467b3c7288a87296dd93577a455becd9d3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tab_menu"));

        // line 20
        echo "    ";
        if (array_key_exists("action", $context)) {
            // line 21
            echo "        ";
            echo $this->env->getExtension('knp_menu')->render($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "sidemenu", array(0 => (isset($context["action"]) ? $context["action"] : $this->getContext($context, "action"))), "method"), array("currentClass" => "active", "template" => $this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : $this->getContext($context, "admin_pool")), "getTemplate", array(0 => "tab_menu_template"), "method")), "twig");
            echo "
    ";
        }
        
        $__internal_9f719c3e4729f31605fe887e70b5c467b3c7288a87296dd93577a455becd9d3f->leave($__internal_9f719c3e4729f31605fe887e70b5c467b3c7288a87296dd93577a455becd9d3f_prof);

    }

    // line 25
    public function block_content($context, array $blocks = array())
    {
        $__internal_66cbddef614994e7c6e0baacaf43d552a79b94860b08cb741bc97700d7283da6 = $this->env->getExtension("native_profiler");
        $__internal_66cbddef614994e7c6e0baacaf43d552a79b94860b08cb741bc97700d7283da6->enter($__internal_66cbddef614994e7c6e0baacaf43d552a79b94860b08cb741bc97700d7283da6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 26
        echo "
    Redefine the content block in your action template

";
        
        $__internal_66cbddef614994e7c6e0baacaf43d552a79b94860b08cb741bc97700d7283da6->leave($__internal_66cbddef614994e7c6e0baacaf43d552a79b94860b08cb741bc97700d7283da6_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:action.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 26,  75 => 25,  64 => 21,  61 => 20,  55 => 19,  46 => 16,  41 => 15,  35 => 14,  20 => 12,);
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
/* {% extends base_template %}*/
/* */
/* {% block actions %}*/
/*     <li>{% include 'SonataAdminBundle:Button:create_button.html.twig' %}</li>*/
/*     <li>{% include 'SonataAdminBundle:Button:list_button.html.twig' %}</li>*/
/* {% endblock %}*/
/* */
/* {% block tab_menu %}*/
/*     {% if action is defined %}*/
/*         {{ knp_menu_render(admin.sidemenu(action), {'currentClass' : 'active', 'template': admin_pool.getTemplate('tab_menu_template')}, 'twig') }}*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
/* {% block content %}*/
/* */
/*     Redefine the content block in your action template*/
/* */
/* {% endblock %}*/
/* */
