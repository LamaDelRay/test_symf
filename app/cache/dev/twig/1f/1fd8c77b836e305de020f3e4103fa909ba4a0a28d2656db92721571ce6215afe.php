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
        $__internal_fb9c6078be5a1a6f551a01a70d16454e7dede80b08049f1db31efb3c2fdb8700 = $this->env->getExtension("native_profiler");
        $__internal_fb9c6078be5a1a6f551a01a70d16454e7dede80b08049f1db31efb3c2fdb8700->enter($__internal_fb9c6078be5a1a6f551a01a70d16454e7dede80b08049f1db31efb3c2fdb8700_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:action.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fb9c6078be5a1a6f551a01a70d16454e7dede80b08049f1db31efb3c2fdb8700->leave($__internal_fb9c6078be5a1a6f551a01a70d16454e7dede80b08049f1db31efb3c2fdb8700_prof);

    }

    // line 14
    public function block_actions($context, array $blocks = array())
    {
        $__internal_7f265564dfa1991ccf2d48cdd643821b86619219e9f3b9b8584286209cdf5865 = $this->env->getExtension("native_profiler");
        $__internal_7f265564dfa1991ccf2d48cdd643821b86619219e9f3b9b8584286209cdf5865->enter($__internal_7f265564dfa1991ccf2d48cdd643821b86619219e9f3b9b8584286209cdf5865_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 15
        echo "    <li>";
        $this->loadTemplate("SonataAdminBundle:Button:create_button.html.twig", "SonataAdminBundle:CRUD:action.html.twig", 15)->display($context);
        echo "</li>
    <li>";
        // line 16
        $this->loadTemplate("SonataAdminBundle:Button:list_button.html.twig", "SonataAdminBundle:CRUD:action.html.twig", 16)->display($context);
        echo "</li>
";
        
        $__internal_7f265564dfa1991ccf2d48cdd643821b86619219e9f3b9b8584286209cdf5865->leave($__internal_7f265564dfa1991ccf2d48cdd643821b86619219e9f3b9b8584286209cdf5865_prof);

    }

    // line 19
    public function block_tab_menu($context, array $blocks = array())
    {
        $__internal_ff5ad0373d13148691b4b2ffeb128495db4329ec0e2151ef1ee418887d488376 = $this->env->getExtension("native_profiler");
        $__internal_ff5ad0373d13148691b4b2ffeb128495db4329ec0e2151ef1ee418887d488376->enter($__internal_ff5ad0373d13148691b4b2ffeb128495db4329ec0e2151ef1ee418887d488376_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tab_menu"));

        // line 20
        echo "    ";
        if (array_key_exists("action", $context)) {
            // line 21
            echo "        ";
            echo $this->env->getExtension('knp_menu')->render($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "sidemenu", array(0 => (isset($context["action"]) ? $context["action"] : $this->getContext($context, "action"))), "method"), array("currentClass" => "active", "template" => $this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : $this->getContext($context, "admin_pool")), "getTemplate", array(0 => "tab_menu_template"), "method")), "twig");
            echo "
    ";
        }
        
        $__internal_ff5ad0373d13148691b4b2ffeb128495db4329ec0e2151ef1ee418887d488376->leave($__internal_ff5ad0373d13148691b4b2ffeb128495db4329ec0e2151ef1ee418887d488376_prof);

    }

    // line 25
    public function block_content($context, array $blocks = array())
    {
        $__internal_c513c33b170e6578a89e2950ab3efb3ea4c580a5e2b00ec418cb73a7754f6153 = $this->env->getExtension("native_profiler");
        $__internal_c513c33b170e6578a89e2950ab3efb3ea4c580a5e2b00ec418cb73a7754f6153->enter($__internal_c513c33b170e6578a89e2950ab3efb3ea4c580a5e2b00ec418cb73a7754f6153_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 26
        echo "
    Redefine the content block in your action template

";
        
        $__internal_c513c33b170e6578a89e2950ab3efb3ea4c580a5e2b00ec418cb73a7754f6153->leave($__internal_c513c33b170e6578a89e2950ab3efb3ea4c580a5e2b00ec418cb73a7754f6153_prof);

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
