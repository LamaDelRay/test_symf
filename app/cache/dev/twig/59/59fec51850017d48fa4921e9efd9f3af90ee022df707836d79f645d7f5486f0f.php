<?php

/* SonataUserBundle:Admin/Field:impersonating.html.twig */
class __TwigTemplate_2f93f987090c4facd4b17a37b4fa6b6ef3580602f8e5a9b6d7f0fc08618720b1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_list_field.html.twig", "SonataUserBundle:Admin/Field:impersonating.html.twig", 12);
        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_list_field.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a91d1b2933a33214f63beeb8987b9bdaf5f7420122b0cd3fe9fd5f911654bd04 = $this->env->getExtension("native_profiler");
        $__internal_a91d1b2933a33214f63beeb8987b9bdaf5f7420122b0cd3fe9fd5f911654bd04->enter($__internal_a91d1b2933a33214f63beeb8987b9bdaf5f7420122b0cd3fe9fd5f911654bd04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataUserBundle:Admin/Field:impersonating.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a91d1b2933a33214f63beeb8987b9bdaf5f7420122b0cd3fe9fd5f911654bd04->leave($__internal_a91d1b2933a33214f63beeb8987b9bdaf5f7420122b0cd3fe9fd5f911654bd04_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_0b61ad0b72709ce2cbf6d20eac1d34a44e746ba60690f2c78b0be97c6007b1c5 = $this->env->getExtension("native_profiler");
        $__internal_0b61ad0b72709ce2cbf6d20eac1d34a44e746ba60690f2c78b0be97c6007b1c5->enter($__internal_0b61ad0b72709ce2cbf6d20eac1d34a44e746ba60690f2c78b0be97c6007b1c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    ";
        if ((($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()) && ($this->getAttribute((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), "username", array()) != $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()))) && $this->getAttribute((isset($context["sonata_user"]) ? $context["sonata_user"] : $this->getContext($context, "sonata_user")), "impersonating", array()))) {
            // line 16
            echo "        <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl($this->getAttribute($this->getAttribute((isset($context["sonata_user"]) ? $context["sonata_user"] : $this->getContext($context, "sonata_user")), "impersonating", array()), "route", array()), twig_array_merge($this->getAttribute($this->getAttribute((isset($context["sonata_user"]) ? $context["sonata_user"] : $this->getContext($context, "sonata_user")), "impersonating", array()), "parameters", array()), array("_switch_user" => $this->getAttribute((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), "username", array())))), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("switch_user", array(), "SonataUserBundle"), "html", null, true);
            echo "\">
            <img src=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/sonataadmin/famfamfam/group_go.png"), "html", null, true);
            echo "\"  alt=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("switch_user", array(), "SonataUserBundle"), "html", null, true);
            echo "\" />
        </a>
    ";
        } else {
            // line 20
            echo "        -
    ";
        }
        
        $__internal_0b61ad0b72709ce2cbf6d20eac1d34a44e746ba60690f2c78b0be97c6007b1c5->leave($__internal_0b61ad0b72709ce2cbf6d20eac1d34a44e746ba60690f2c78b0be97c6007b1c5_prof);

    }

    public function getTemplateName()
    {
        return "SonataUserBundle:Admin/Field:impersonating.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 20,  50 => 17,  43 => 16,  40 => 15,  34 => 14,  11 => 12,);
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
/* {% extends 'SonataAdminBundle:CRUD:base_list_field.html.twig' %}*/
/* */
/* {% block field %}*/
/*     {% if app.user and object.username != app.user.username and sonata_user.impersonating %}*/
/*         <a href="{{ url(sonata_user.impersonating.route, sonata_user.impersonating.parameters | merge({'_switch_user': object.username})) }}" title="{{ 'switch_user'|trans({}, 'SonataUserBundle')}}">*/
/*             <img src="{{ asset('bundles/sonataadmin/famfamfam/group_go.png') }}"  alt="{{ 'switch_user'|trans({}, 'SonataUserBundle')}}" />*/
/*         </a>*/
/*     {% else %}*/
/*         -*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
