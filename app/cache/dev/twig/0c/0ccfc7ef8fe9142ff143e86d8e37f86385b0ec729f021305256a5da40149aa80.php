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
        $__internal_23a9e3f58ac81a04b83596a0218df040dae4cea2f6034be12cb68cb81b082ebe = $this->env->getExtension("native_profiler");
        $__internal_23a9e3f58ac81a04b83596a0218df040dae4cea2f6034be12cb68cb81b082ebe->enter($__internal_23a9e3f58ac81a04b83596a0218df040dae4cea2f6034be12cb68cb81b082ebe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle::ajax_layout.html.twig"));

        // line 11
        echo "
";
        // line 12
        $this->displayBlock('content', $context, $blocks);
        
        $__internal_23a9e3f58ac81a04b83596a0218df040dae4cea2f6034be12cb68cb81b082ebe->leave($__internal_23a9e3f58ac81a04b83596a0218df040dae4cea2f6034be12cb68cb81b082ebe_prof);

    }

    public function block_content($context, array $blocks = array())
    {
        $__internal_da4e74181f17eaa6e82e01d825f016e0851bd220c37a5f8b9b77c0a4bfe7316e = $this->env->getExtension("native_profiler");
        $__internal_da4e74181f17eaa6e82e01d825f016e0851bd220c37a5f8b9b77c0a4bfe7316e->enter($__internal_da4e74181f17eaa6e82e01d825f016e0851bd220c37a5f8b9b77c0a4bfe7316e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_da4e74181f17eaa6e82e01d825f016e0851bd220c37a5f8b9b77c0a4bfe7316e->leave($__internal_da4e74181f17eaa6e82e01d825f016e0851bd220c37a5f8b9b77c0a4bfe7316e_prof);

    }

    // line 16
    public function block_preview($context, array $blocks = array())
    {
        $__internal_2b899232efb1a44a0bcbf515aab7a3394fa74063c41ba654f941fa0de81e8a6b = $this->env->getExtension("native_profiler");
        $__internal_2b899232efb1a44a0bcbf515aab7a3394fa74063c41ba654f941fa0de81e8a6b->enter($__internal_2b899232efb1a44a0bcbf515aab7a3394fa74063c41ba654f941fa0de81e8a6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "preview"));

        
        $__internal_2b899232efb1a44a0bcbf515aab7a3394fa74063c41ba654f941fa0de81e8a6b->leave($__internal_2b899232efb1a44a0bcbf515aab7a3394fa74063c41ba654f941fa0de81e8a6b_prof);

    }

    // line 17
    public function block_form($context, array $blocks = array())
    {
        $__internal_93ca2f13820fce2c3a33adfeaa6df652b276f170f161d197cc006a8231986670 = $this->env->getExtension("native_profiler");
        $__internal_93ca2f13820fce2c3a33adfeaa6df652b276f170f161d197cc006a8231986670->enter($__internal_93ca2f13820fce2c3a33adfeaa6df652b276f170f161d197cc006a8231986670_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        
        $__internal_93ca2f13820fce2c3a33adfeaa6df652b276f170f161d197cc006a8231986670->leave($__internal_93ca2f13820fce2c3a33adfeaa6df652b276f170f161d197cc006a8231986670_prof);

    }

    // line 18
    public function block_list($context, array $blocks = array())
    {
        $__internal_30af717d5ce1a3b97396348d58d604ef0471c217b4f0831b9b718298d937135f = $this->env->getExtension("native_profiler");
        $__internal_30af717d5ce1a3b97396348d58d604ef0471c217b4f0831b9b718298d937135f->enter($__internal_30af717d5ce1a3b97396348d58d604ef0471c217b4f0831b9b718298d937135f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "list"));

        
        $__internal_30af717d5ce1a3b97396348d58d604ef0471c217b4f0831b9b718298d937135f->leave($__internal_30af717d5ce1a3b97396348d58d604ef0471c217b4f0831b9b718298d937135f_prof);

    }

    // line 19
    public function block_show($context, array $blocks = array())
    {
        $__internal_c937552590b063e34c1e901437dbd2782146fa52939e392dc51b4e1f8405cff4 = $this->env->getExtension("native_profiler");
        $__internal_c937552590b063e34c1e901437dbd2782146fa52939e392dc51b4e1f8405cff4->enter($__internal_c937552590b063e34c1e901437dbd2782146fa52939e392dc51b4e1f8405cff4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "show"));

        
        $__internal_c937552590b063e34c1e901437dbd2782146fa52939e392dc51b4e1f8405cff4->leave($__internal_c937552590b063e34c1e901437dbd2782146fa52939e392dc51b4e1f8405cff4_prof);

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
