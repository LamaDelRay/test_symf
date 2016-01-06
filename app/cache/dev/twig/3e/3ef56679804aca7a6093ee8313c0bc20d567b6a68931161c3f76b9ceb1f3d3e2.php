<?php

/* SonataAdminBundle:Core:search.html.twig */
class __TwigTemplate_0efe7012fb3d1cad3d5a52f5ad8ca86b0f74a10c602324ec1059871e1ca53792 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'breadcrumb' => array($this, 'block_breadcrumb'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "SonataAdminBundle:Core:search.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9b791101dd133f92721088c4474f2d24a1749b090bfe8bc1e3d7a3b836174f52 = $this->env->getExtension("native_profiler");
        $__internal_9b791101dd133f92721088c4474f2d24a1749b090bfe8bc1e3d7a3b836174f52->enter($__internal_9b791101dd133f92721088c4474f2d24a1749b090bfe8bc1e3d7a3b836174f52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Core:search.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9b791101dd133f92721088c4474f2d24a1749b090bfe8bc1e3d7a3b836174f52->leave($__internal_9b791101dd133f92721088c4474f2d24a1749b090bfe8bc1e3d7a3b836174f52_prof);

    }

    // line 14
    public function block_title($context, array $blocks = array())
    {
        $__internal_1cc51ca99a8d61a5e4c308fc66b4675399b0110a316338591b83f061bc30df18 = $this->env->getExtension("native_profiler");
        $__internal_1cc51ca99a8d61a5e4c308fc66b4675399b0110a316338591b83f061bc30df18->enter($__internal_1cc51ca99a8d61a5e4c308fc66b4675399b0110a316338591b83f061bc30df18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title_search_results", array("%query%" => (isset($context["query"]) ? $context["query"] : $this->getContext($context, "query"))), "SonataAdminBundle"), "html", null, true);
        
        $__internal_1cc51ca99a8d61a5e4c308fc66b4675399b0110a316338591b83f061bc30df18->leave($__internal_1cc51ca99a8d61a5e4c308fc66b4675399b0110a316338591b83f061bc30df18_prof);

    }

    // line 15
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_f6ae0657216fef5355350941434b404b3b438d9f352abb46b6bce66b46201d14 = $this->env->getExtension("native_profiler");
        $__internal_f6ae0657216fef5355350941434b404b3b438d9f352abb46b6bce66b46201d14->enter($__internal_f6ae0657216fef5355350941434b404b3b438d9f352abb46b6bce66b46201d14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        
        $__internal_f6ae0657216fef5355350941434b404b3b438d9f352abb46b6bce66b46201d14->leave($__internal_f6ae0657216fef5355350941434b404b3b438d9f352abb46b6bce66b46201d14_prof);

    }

    // line 16
    public function block_content($context, array $blocks = array())
    {
        $__internal_c46861def7f1af8ef8aeeca53dd92bcb8ee0094059fef931931520ff464b0c35 = $this->env->getExtension("native_profiler");
        $__internal_c46861def7f1af8ef8aeeca53dd92bcb8ee0094059fef931931520ff464b0c35->enter($__internal_c46861def7f1af8ef8aeeca53dd92bcb8ee0094059fef931931520ff464b0c35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 17
        echo "    <!--
    <div class=\"row\">
        <form action=\"";
        // line 19
        echo $this->env->getExtension('routing')->getUrl("sonata_admin_search");
        echo "\" method=\"GET\"  class=\"form-search\">
            <div class=\"input-append\">
                <input type=\"text\" name=\"q\" value=\"";
        // line 21
        echo twig_escape_filter($this->env, (isset($context["query"]) ? $context["query"] : $this->getContext($context, "query")), "html", null, true);
        echo "\" class=\"input-large search-query\">
                <button type=\"submit\" class=\"btn\">Search</button>
            </div>
        </form>
    </div>
    -->

    <h1>";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title_search_results", array("%query%" => (isset($context["query"]) ? $context["query"] : $this->getContext($context, "query"))), "SonataAdminBundle"), "html", null, true);
        echo "</h1>

    ";
        // line 30
        if ((array_key_exists("query", $context) &&  !((isset($context["query"]) ? $context["query"] : $this->getContext($context, "query")) === false))) {
            // line 31
            echo "        ";
            $context["count"] = 0;
            // line 32
            echo "        <div class=\"row\">

            ";
            // line 34
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["groups"]) ? $context["groups"] : $this->getContext($context, "groups")));
            foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
                // line 35
                echo "                ";
                $context["display"] = (twig_test_empty($this->getAttribute($context["group"], "roles", array())) || $this->env->getExtension('security')->isGranted("ROLE_SUPER_ADMIN"));
                // line 36
                echo "                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["group"], "roles", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
                    if ( !(isset($context["display"]) ? $context["display"] : $this->getContext($context, "display"))) {
                        // line 37
                        echo "                    ";
                        $context["display"] = $this->env->getExtension('security')->isGranted($context["role"]);
                        // line 38
                        echo "                ";
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 39
                echo "
                ";
                // line 40
                if ((isset($context["display"]) ? $context["display"] : $this->getContext($context, "display"))) {
                    // line 41
                    echo "                    ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["group"], "items", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["admin"]) {
                        // line 42
                        echo "                        ";
                        if ((((isset($context["count"]) ? $context["count"] : $this->getContext($context, "count")) % 3) == 0)) {
                            // line 43
                            echo "                            </div><div class=\"row\">
                        ";
                        }
                        // line 45
                        echo "
                        ";
                        // line 46
                        $context["count"] = ((isset($context["count"]) ? $context["count"] : $this->getContext($context, "count")) + 1);
                        // line 47
                        echo "                        ";
                        if ((($this->getAttribute($context["admin"], "hasroute", array(0 => "create"), "method") && $this->getAttribute($context["admin"], "isGranted", array(0 => "CREATE"), "method")) || ($this->getAttribute($context["admin"], "hasroute", array(0 => "list"), "method") && $this->getAttribute($context["admin"], "isGranted", array(0 => "LIST"), "method")))) {
                            // line 48
                            echo "                            ";
                            echo call_user_func_array($this->env->getFunction('sonata_block_render')->getCallable(), array(array("type" => "sonata.admin.block.search_result"), array("query" =>                             // line 51
(isset($context["query"]) ? $context["query"] : $this->getContext($context, "query")), "admin_code" => $this->getAttribute(                            // line 52
$context["admin"], "code", array()), "page" => 0, "per_page" => 10)));
                            // line 55
                            echo "
                        ";
                        }
                        // line 57
                        echo "                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['admin'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 58
                    echo "                ";
                }
                // line 59
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 60
            echo "        </div>
    ";
        }
        // line 62
        echo "
";
        
        $__internal_c46861def7f1af8ef8aeeca53dd92bcb8ee0094059fef931931520ff464b0c35->leave($__internal_c46861def7f1af8ef8aeeca53dd92bcb8ee0094059fef931931520ff464b0c35_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Core:search.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  173 => 62,  169 => 60,  163 => 59,  160 => 58,  154 => 57,  150 => 55,  148 => 52,  147 => 51,  145 => 48,  142 => 47,  140 => 46,  137 => 45,  133 => 43,  130 => 42,  125 => 41,  123 => 40,  120 => 39,  113 => 38,  110 => 37,  104 => 36,  101 => 35,  97 => 34,  93 => 32,  90 => 31,  88 => 30,  83 => 28,  73 => 21,  68 => 19,  64 => 17,  58 => 16,  47 => 15,  35 => 14,  20 => 12,);
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
/* {% block title %}{{ 'title_search_results'|trans({'%query%': query}, 'SonataAdminBundle') }}{% endblock%}*/
/* {% block breadcrumb %}{% endblock %}*/
/* {% block content %}*/
/*     <!--*/
/*     <div class="row">*/
/*         <form action="{{ url('sonata_admin_search') }}" method="GET"  class="form-search">*/
/*             <div class="input-append">*/
/*                 <input type="text" name="q" value="{{ query }}" class="input-large search-query">*/
/*                 <button type="submit" class="btn">Search</button>*/
/*             </div>*/
/*         </form>*/
/*     </div>*/
/*     -->*/
/* */
/*     <h1>{{ 'title_search_results'|trans({'%query%': query}, 'SonataAdminBundle') }}</h1>*/
/* */
/*     {% if query is defined and query is not same as(false) %}*/
/*         {% set count = 0 %}*/
/*         <div class="row">*/
/* */
/*             {% for group in groups %}*/
/*                 {% set display = (group.roles is empty or is_granted('ROLE_SUPER_ADMIN') ) %}*/
/*                 {% for role in group.roles if not display %}*/
/*                     {% set display = is_granted(role)%}*/
/*                 {% endfor %}*/
/* */
/*                 {% if display %}*/
/*                     {% for admin in group.items %}*/
/*                         {% if count % 3 == 0 %}*/
/*                             </div><div class="row">*/
/*                         {% endif %}*/
/* */
/*                         {% set count = count + 1 %}*/
/*                         {% if admin.hasroute('create') and admin.isGranted('CREATE') or admin.hasroute('list') and admin.isGranted('LIST') %}*/
/*                             {{ sonata_block_render({*/
/*                                 'type': 'sonata.admin.block.search_result'*/
/*                             }, {*/
/*                                 'query': query,*/
/*                                 'admin_code': admin.code,*/
/*                                 'page': 0,*/
/*                                 'per_page': 10*/
/*                             }) }}*/
/*                         {% endif %}*/
/*                     {% endfor %}*/
/*                 {% endif %}*/
/*             {% endfor %}*/
/*         </div>*/
/*     {% endif %}*/
/* */
/* {% endblock %}*/
/* */
