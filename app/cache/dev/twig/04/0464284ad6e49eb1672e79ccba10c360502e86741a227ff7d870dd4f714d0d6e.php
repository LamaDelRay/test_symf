<?php

/* FOSUserBundle:Group:list_content.html.twig */
class __TwigTemplate_21b4ae18fb8e59348cfea7f97ee29a6bed8b48344f25ee2d44b2fc9d63af622a extends Twig_Template
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
        $__internal_11c449137047d4ee04b0a77a0e830e85bf875bef7dbc640fe77abdf92788a81a = $this->env->getExtension("native_profiler");
        $__internal_11c449137047d4ee04b0a77a0e830e85bf875bef7dbc640fe77abdf92788a81a->enter($__internal_11c449137047d4ee04b0a77a0e830e85bf875bef7dbc640fe77abdf92788a81a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list_content.html.twig"));

        // line 1
        echo "<div class=\"fos_user_group_list\">
    <ul>
    ";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["groups"]) ? $context["groups"] : $this->getContext($context, "groups")));
        foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
            // line 4
            echo "        <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fos_user_group_show", array("groupname" => $this->getAttribute($context["group"], "getName", array(), "method"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["group"], "getName", array(), "method"), "html", null, true);
            echo "</a></li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 6
        echo "    </ul>
</div>
";
        
        $__internal_11c449137047d4ee04b0a77a0e830e85bf875bef7dbc640fe77abdf92788a81a->leave($__internal_11c449137047d4ee04b0a77a0e830e85bf875bef7dbc640fe77abdf92788a81a_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 6,  30 => 4,  26 => 3,  22 => 1,);
    }
}
/* <div class="fos_user_group_list">*/
/*     <ul>*/
/*     {% for group in groups %}*/
/*         <li><a href="{{ path('fos_user_group_show', {'groupname': group.getName()} ) }}">{{ group.getName() }}</a></li>*/
/*     {% endfor %}*/
/*     </ul>*/
/* </div>*/
/* */
