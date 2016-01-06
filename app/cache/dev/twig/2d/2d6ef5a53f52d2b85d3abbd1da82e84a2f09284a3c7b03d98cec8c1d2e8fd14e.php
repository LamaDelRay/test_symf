<?php

/* SonataAdminBundle:CRUD:list_array.html.twig */
class __TwigTemplate_952740734f5ed3dc19f9ba7145f4d2195e53af3c5d769dbe64a4d49db7d9ee3c extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list_array.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d976e2fbc3ca9cb554faa5334e5efc9f3d240ceaf3aadf39c5154d2b99256535 = $this->env->getExtension("native_profiler");
        $__internal_d976e2fbc3ca9cb554faa5334e5efc9f3d240ceaf3aadf39c5154d2b99256535->enter($__internal_d976e2fbc3ca9cb554faa5334e5efc9f3d240ceaf3aadf39c5154d2b99256535_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_array.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d976e2fbc3ca9cb554faa5334e5efc9f3d240ceaf3aadf39c5154d2b99256535->leave($__internal_d976e2fbc3ca9cb554faa5334e5efc9f3d240ceaf3aadf39c5154d2b99256535_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_9ef53e0579459b6e9e776c8d0b89caa61697bab37020eccddf5ddfa7c8bb3517 = $this->env->getExtension("native_profiler");
        $__internal_9ef53e0579459b6e9e776c8d0b89caa61697bab37020eccddf5ddfa7c8bb3517->enter($__internal_9ef53e0579459b6e9e776c8d0b89caa61697bab37020eccddf5ddfa7c8bb3517_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")));
        foreach ($context['_seq'] as $context["key"] => $context["val"]) {
            // line 16
            echo "        [";
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo " => ";
            echo twig_escape_filter($this->env, $context["val"], "html", null, true);
            echo "]
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['val'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_9ef53e0579459b6e9e776c8d0b89caa61697bab37020eccddf5ddfa7c8bb3517->leave($__internal_9ef53e0579459b6e9e776c8d0b89caa61697bab37020eccddf5ddfa7c8bb3517_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list_array.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 16,  39 => 15,  33 => 14,  18 => 12,);
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
/*     {% for key, val in value %}*/
/*         [{{ key }} => {{ val }}]*/
/*     {% endfor %}*/
/* {% endblock %}*/
/* */
