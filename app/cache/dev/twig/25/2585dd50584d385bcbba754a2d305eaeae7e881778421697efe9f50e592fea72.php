<?php

/* SonataAdminBundle:CRUD:list__action.html.twig */
class __TwigTemplate_07913308b4a25b4428d49c47784c9f4681a83d5a0f87683fd0e3c5e560c5b7cd extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list__action.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e7e3bdd0f287a4a2c2d57bb03175f5d9fc3c4bbc51aff231aa023752718ebedc = $this->env->getExtension("native_profiler");
        $__internal_e7e3bdd0f287a4a2c2d57bb03175f5d9fc3c4bbc51aff231aa023752718ebedc->enter($__internal_e7e3bdd0f287a4a2c2d57bb03175f5d9fc3c4bbc51aff231aa023752718ebedc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list__action.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e7e3bdd0f287a4a2c2d57bb03175f5d9fc3c4bbc51aff231aa023752718ebedc->leave($__internal_e7e3bdd0f287a4a2c2d57bb03175f5d9fc3c4bbc51aff231aa023752718ebedc_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_b22f5e205e287073f652c86553960f7b70c8ab70458d62e4e6c5a8863f7341ee = $this->env->getExtension("native_profiler");
        $__internal_b22f5e205e287073f652c86553960f7b70c8ab70458d62e4e6c5a8863f7341ee->enter($__internal_b22f5e205e287073f652c86553960f7b70c8ab70458d62e4e6c5a8863f7341ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    <div class=\"btn-group\">
        ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options", array()), "actions", array()));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["actions"]) {
            // line 17
            echo "            ";
            $this->loadTemplate($this->getAttribute($context["actions"], "template", array()), "SonataAdminBundle:CRUD:list__action.html.twig", 17)->display($context);
            // line 18
            echo "        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['actions'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "    </div>
";
        
        $__internal_b22f5e205e287073f652c86553960f7b70c8ab70458d62e4e6c5a8863f7341ee->leave($__internal_b22f5e205e287073f652c86553960f7b70c8ab70458d62e4e6c5a8863f7341ee_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list__action.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 19,  62 => 18,  59 => 17,  42 => 16,  39 => 15,  33 => 14,  18 => 12,);
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
/*     <div class="btn-group">*/
/*         {% for actions in field_description.options.actions %}*/
/*             {% include actions.template %}*/
/*         {% endfor %}*/
/*     </div>*/
/* {% endblock %}*/
