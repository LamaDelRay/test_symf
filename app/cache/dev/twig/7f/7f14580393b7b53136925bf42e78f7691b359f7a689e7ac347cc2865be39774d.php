<?php

/* SonataAdminBundle:CRUD:base_edit_form_macro.html.twig */
class __TwigTemplate_15db20c9045459923c08ebaa4e0a1dae205acc2d523d7d3e47ca9f2b0d733de0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c05a773847ab5ee285748a770dc70716264df40cf526c0a04bdbfde3f8dfc815 = $this->env->getExtension("native_profiler");
        $__internal_c05a773847ab5ee285748a770dc70716264df40cf526c0a04bdbfde3f8dfc815->enter($__internal_c05a773847ab5ee285748a770dc70716264df40cf526c0a04bdbfde3f8dfc815_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_edit_form_macro.html.twig"));

        
        $__internal_c05a773847ab5ee285748a770dc70716264df40cf526c0a04bdbfde3f8dfc815->leave($__internal_c05a773847ab5ee285748a770dc70716264df40cf526c0a04bdbfde3f8dfc815_prof);

    }

    // line 1
    public function getrender_groups($__admin__ = null, $__form__ = null, $__groups__ = null, $__has_tab__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "admin" => $__admin__,
            "form" => $__form__,
            "groups" => $__groups__,
            "has_tab" => $__has_tab__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_f65744017720c239a40e61663b9c466057266d0b7475218889b019d4e6499def = $this->env->getExtension("native_profiler");
            $__internal_f65744017720c239a40e61663b9c466057266d0b7475218889b019d4e6499def->enter($__internal_f65744017720c239a40e61663b9c466057266d0b7475218889b019d4e6499def_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "render_groups"));

            // line 2
            echo "    ";
            if ((isset($context["has_tab"]) ? $context["has_tab"] : $this->getContext($context, "has_tab"))) {
                echo "<div class=\"row\">";
            }
            // line 3
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["groups"]) ? $context["groups"] : $this->getContext($context, "groups")));
            foreach ($context['_seq'] as $context["_key"] => $context["code"]) {
                // line 4
                echo "        ";
                $context["form_group"] = $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "formgroups", array()), $context["code"], array(), "array");
                // line 5
                echo "        <div class=\"col-md-12 ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["form_group"]) ? $context["form_group"] : $this->getContext($context, "form_group")), "class", array()), "html", null, true);
                echo "\">
            <div class=\"box box-success\">
                <div class=\"box-header\">
                    <h4 class=\"box-title\">
                        ";
                // line 9
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "trans", array(0 => $this->getAttribute((isset($context["form_group"]) ? $context["form_group"] : $this->getContext($context, "form_group")), "name", array()), 1 => array(), 2 => $this->getAttribute((isset($context["form_group"]) ? $context["form_group"] : $this->getContext($context, "form_group")), "translation_domain", array())), "method"), "html", null, true);
                echo "
                    </h4>
                </div>
                ";
                // line 13
                echo "                <div class=\"box-body\">
                    <div class=\"sonata-ba-collapsed-fields\">
                        ";
                // line 15
                if (($this->getAttribute((isset($context["form_group"]) ? $context["form_group"] : $this->getContext($context, "form_group")), "description", array()) != false)) {
                    // line 16
                    echo "                            <p>";
                    echo $this->getAttribute((isset($context["form_group"]) ? $context["form_group"] : $this->getContext($context, "form_group")), "description", array());
                    echo "</p>
                        ";
                }
                // line 18
                echo "
                        ";
                // line 19
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form_group"]) ? $context["form_group"] : $this->getContext($context, "form_group")), "fields", array()));
                $context['_iterated'] = false;
                foreach ($context['_seq'] as $context["_key"] => $context["field_name"]) {
                    // line 20
                    echo "                            ";
                    if ($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "formfielddescriptions", array(), "any", false, true), $context["field_name"], array(), "array", true, true)) {
                        // line 21
                        echo "                                ";
                        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), $context["field_name"], array(), "array"), 'row');
                        echo "
                            ";
                    }
                    // line 23
                    echo "                        ";
                    $context['_iterated'] = true;
                }
                if (!$context['_iterated']) {
                    // line 24
                    echo "                            <em>";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("message_form_group_empty", array(), "SonataAdminBundle"), "html", null, true);
                    echo "</em>
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field_name'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 26
                echo "                    </div>
                </div>
                ";
                // line 29
                echo "            </div>
        </div>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['code'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 32
            echo "    ";
            if ((isset($context["has_tab"]) ? $context["has_tab"] : $this->getContext($context, "has_tab"))) {
                echo "</div>";
            }
            
            $__internal_f65744017720c239a40e61663b9c466057266d0b7475218889b019d4e6499def->leave($__internal_f65744017720c239a40e61663b9c466057266d0b7475218889b019d4e6499def_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_edit_form_macro.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 32,  119 => 29,  115 => 26,  106 => 24,  101 => 23,  95 => 21,  92 => 20,  87 => 19,  84 => 18,  78 => 16,  76 => 15,  72 => 13,  66 => 9,  58 => 5,  55 => 4,  50 => 3,  45 => 2,  27 => 1,);
    }
}
/* {% macro render_groups(admin, form, groups, has_tab) %}*/
/*     {% if has_tab %}<div class="row">{% endif %}*/
/*     {% for code in groups %}*/
/*         {% set form_group = admin.formgroups[code] %}*/
/*         <div class="col-md-12 {{ form_group.class }}">*/
/*             <div class="box box-success">*/
/*                 <div class="box-header">*/
/*                     <h4 class="box-title">*/
/*                         {{ admin.trans(form_group.name, {}, form_group.translation_domain) }}*/
/*                     </h4>*/
/*                 </div>*/
/*                 {#<div class="box{% if loop.first %} in{% endif %}" id="{{ admin.uniqid }}_{{ loop.index }}">#}*/
/*                 <div class="box-body">*/
/*                     <div class="sonata-ba-collapsed-fields">*/
/*                         {% if form_group.description != false %}*/
/*                             <p>{{ form_group.description|raw }}</p>*/
/*                         {% endif %}*/
/* */
/*                         {% for field_name in form_group.fields %}*/
/*                             {% if admin.formfielddescriptions[field_name] is defined %}*/
/*                                 {{ form_row(form[field_name])}}*/
/*                             {% endif %}*/
/*                         {% else %}*/
/*                             <em>{{ 'message_form_group_empty'|trans({}, 'SonataAdminBundle') }}</em>*/
/*                         {% endfor %}*/
/*                     </div>*/
/*                 </div>*/
/*                 {#</div>#}*/
/*             </div>*/
/*         </div>*/
/*     {% endfor %}*/
/*     {% if has_tab %}</div>{% endif %}*/
/* {% endmacro %}*/
/* */
