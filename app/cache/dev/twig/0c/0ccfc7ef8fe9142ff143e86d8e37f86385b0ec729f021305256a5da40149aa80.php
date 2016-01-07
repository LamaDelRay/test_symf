<?php

/* SonataAdminBundle::ajax_layout.html.twig */
class __TwigTemplate_64706635f277c658dd4e847db9b9982ba70487c33e80d4a308a5d8742d92217e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'preview' => array($this, 'block_preview'),
            'form' => array($this, 'block_form'),
            'list' => array($this, 'block_list'),
            'show' => array($this, 'block_show'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a37663186945d0a367666c81a4161766d51f88cca74af881c4f97264085e26e4 = $this->env->getExtension("native_profiler");
        $__internal_a37663186945d0a367666c81a4161766d51f88cca74af881c4f97264085e26e4->enter($__internal_a37663186945d0a367666c81a4161766d51f88cca74af881c4f97264085e26e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle::ajax_layout.html.twig"));

        // line 11
        echo "
";
        // line 12
        $this->displayBlock('content', $context, $blocks);
        
        $__internal_a37663186945d0a367666c81a4161766d51f88cca74af881c4f97264085e26e4->leave($__internal_a37663186945d0a367666c81a4161766d51f88cca74af881c4f97264085e26e4_prof);

    }

    public function block_content($context, array $blocks = array())
    {
        $__internal_210777b41a55612f7a27efcb1acae23c4ed129f609fe751d0302d45a9136d3da = $this->env->getExtension("native_profiler");
        $__internal_210777b41a55612f7a27efcb1acae23c4ed129f609fe751d0302d45a9136d3da->enter($__internal_210777b41a55612f7a27efcb1acae23c4ed129f609fe751d0302d45a9136d3da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 13
        echo "    ";
        $context["_list_table"] = trim($this->renderBlock("list_table", $context, $blocks));
        // line 14
        echo "    ";
        $context["_list_filters"] = trim($this->renderBlock("list_filters", $context, $blocks));
        // line 15
        echo "
    ";
        // line 16
        $this->displayBlock('preview', $context, $blocks);
        // line 17
        echo "    ";
        $this->displayBlock('form', $context, $blocks);
        // line 18
        echo "    ";
        $this->displayBlock('list', $context, $blocks);
        // line 19
        echo "    ";
        $this->displayBlock('show', $context, $blocks);
        // line 20
        echo "
    ";
        // line 21
        if (((twig_length_filter($this->env, (isset($context["_list_table"]) ? $context["_list_table"] : $this->getContext($context, "_list_table"))) > 0) || (twig_length_filter($this->env, (isset($context["_list_filters"]) ? $context["_list_filters"] : $this->getContext($context, "_list_filters"))) > 0))) {
            // line 22
            echo "        <div class=\"row\">
            <div class=\"sonata-ba-list ";
            // line 23
            if ((isset($context["_list_filters"]) ? $context["_list_filters"] : $this->getContext($context, "_list_filters"))) {
                echo "col-md-10";
            } else {
                echo "col-md-12";
            }
            echo "\">
                ";
            // line 24
            echo (isset($context["_list_table"]) ? $context["_list_table"] : $this->getContext($context, "_list_table"));
            echo "
            </div>
            ";
            // line 26
            if ((isset($context["_list_filters"]) ? $context["_list_filters"] : $this->getContext($context, "_list_filters"))) {
                // line 27
                echo "                <div class=\"sonata-ba-filter col-md-2\">
                    ";
                // line 28
                echo (isset($context["_list_filters"]) ? $context["_list_filters"] : $this->getContext($context, "_list_filters"));
                echo "
                </div>
            ";
            }
            // line 31
            echo "        </div>
    ";
        }
        // line 33
        echo "
";
        
        $__internal_210777b41a55612f7a27efcb1acae23c4ed129f609fe751d0302d45a9136d3da->leave($__internal_210777b41a55612f7a27efcb1acae23c4ed129f609fe751d0302d45a9136d3da_prof);

    }

    // line 16
    public function block_preview($context, array $blocks = array())
    {
        $__internal_7cbbdaad7c36e9cc429780df16f75ccff2e9f77ee7cd563219b81c9009d0b006 = $this->env->getExtension("native_profiler");
        $__internal_7cbbdaad7c36e9cc429780df16f75ccff2e9f77ee7cd563219b81c9009d0b006->enter($__internal_7cbbdaad7c36e9cc429780df16f75ccff2e9f77ee7cd563219b81c9009d0b006_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "preview"));

        
        $__internal_7cbbdaad7c36e9cc429780df16f75ccff2e9f77ee7cd563219b81c9009d0b006->leave($__internal_7cbbdaad7c36e9cc429780df16f75ccff2e9f77ee7cd563219b81c9009d0b006_prof);

    }

    // line 17
    public function block_form($context, array $blocks = array())
    {
        $__internal_f1517b4b8d25d9fe00dc2c218e51b4bc7e6324a5e13843d995ab184dbed776e5 = $this->env->getExtension("native_profiler");
        $__internal_f1517b4b8d25d9fe00dc2c218e51b4bc7e6324a5e13843d995ab184dbed776e5->enter($__internal_f1517b4b8d25d9fe00dc2c218e51b4bc7e6324a5e13843d995ab184dbed776e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        
        $__internal_f1517b4b8d25d9fe00dc2c218e51b4bc7e6324a5e13843d995ab184dbed776e5->leave($__internal_f1517b4b8d25d9fe00dc2c218e51b4bc7e6324a5e13843d995ab184dbed776e5_prof);

    }

    // line 18
    public function block_list($context, array $blocks = array())
    {
        $__internal_eba6adc869cd3d545fef4212b6858f0eafa40d0909a3ccaed3175ac82475ca1d = $this->env->getExtension("native_profiler");
        $__internal_eba6adc869cd3d545fef4212b6858f0eafa40d0909a3ccaed3175ac82475ca1d->enter($__internal_eba6adc869cd3d545fef4212b6858f0eafa40d0909a3ccaed3175ac82475ca1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "list"));

        
        $__internal_eba6adc869cd3d545fef4212b6858f0eafa40d0909a3ccaed3175ac82475ca1d->leave($__internal_eba6adc869cd3d545fef4212b6858f0eafa40d0909a3ccaed3175ac82475ca1d_prof);

    }

    // line 19
    public function block_show($context, array $blocks = array())
    {
        $__internal_e17b775ec27706dd41840539ee2d0b47d0fa5681f0e23106cd26d8a4cdda1344 = $this->env->getExtension("native_profiler");
        $__internal_e17b775ec27706dd41840539ee2d0b47d0fa5681f0e23106cd26d8a4cdda1344->enter($__internal_e17b775ec27706dd41840539ee2d0b47d0fa5681f0e23106cd26d8a4cdda1344_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "show"));

        
        $__internal_e17b775ec27706dd41840539ee2d0b47d0fa5681f0e23106cd26d8a4cdda1344->leave($__internal_e17b775ec27706dd41840539ee2d0b47d0fa5681f0e23106cd26d8a4cdda1344_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle::ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  139 => 19,  128 => 18,  117 => 17,  106 => 16,  98 => 33,  94 => 31,  88 => 28,  85 => 27,  83 => 26,  78 => 24,  70 => 23,  67 => 22,  65 => 21,  62 => 20,  59 => 19,  56 => 18,  53 => 17,  51 => 16,  48 => 15,  45 => 14,  42 => 13,  30 => 12,  27 => 11,);
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
/* {% block content %}*/
/*     {% set _list_table   = block('list_table')|trim %}*/
/*     {% set _list_filters = block('list_filters')|trim %}*/
/* */
/*     {% block preview %}{% endblock %}*/
/*     {% block form %}{% endblock %}*/
/*     {% block list %}{% endblock %}*/
/*     {% block show %}{% endblock %}*/
/* */
/*     {% if _list_table|length > 0 or _list_filters|length > 0 %}*/
/*         <div class="row">*/
/*             <div class="sonata-ba-list {% if _list_filters %}col-md-10{% else %}col-md-12{% endif %}">*/
/*                 {{ _list_table|raw }}*/
/*             </div>*/
/*             {% if _list_filters %}*/
/*                 <div class="sonata-ba-filter col-md-2">*/
/*                     {{ _list_filters|raw }}*/
/*                 </div>*/
/*             {% endif %}*/
/*         </div>*/
/*     {% endif %}*/
/* */
/* {% endblock %}*/
/* */
