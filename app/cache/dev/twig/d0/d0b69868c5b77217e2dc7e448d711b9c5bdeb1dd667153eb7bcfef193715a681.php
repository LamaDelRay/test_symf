<?php

/* SonataBlockBundle:Block:block_base.html.twig */
class __TwigTemplate_b9a90db6f60fbb1a61a0d2cad270b53051d337d3534966ccc71fe2cdd2b2393a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'block' => array($this, 'block_block'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cd3369f9ab728fbe4ca62e33f029401be03f5ebcb5fc45d91d7f181ec24406ed = $this->env->getExtension("native_profiler");
        $__internal_cd3369f9ab728fbe4ca62e33f029401be03f5ebcb5fc45d91d7f181ec24406ed->enter($__internal_cd3369f9ab728fbe4ca62e33f029401be03f5ebcb5fc45d91d7f181ec24406ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_base.html.twig"));

        // line 11
        echo "<div id=\"cms-block-";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["block"]) ? $context["block"] : $this->getContext($context, "block")), "id", array()), "html", null, true);
        echo "\" class=\"cms-block cms-block-element\">
    ";
        // line 12
        $this->displayBlock('block', $context, $blocks);
        // line 13
        echo "</div>
";
        
        $__internal_cd3369f9ab728fbe4ca62e33f029401be03f5ebcb5fc45d91d7f181ec24406ed->leave($__internal_cd3369f9ab728fbe4ca62e33f029401be03f5ebcb5fc45d91d7f181ec24406ed_prof);

    }

    // line 12
    public function block_block($context, array $blocks = array())
    {
        $__internal_c757235ade6d6380eae885da50416f94ee8dc0926a9271ab5ee9de13ef9fe9e2 = $this->env->getExtension("native_profiler");
        $__internal_c757235ade6d6380eae885da50416f94ee8dc0926a9271ab5ee9de13ef9fe9e2->enter($__internal_c757235ade6d6380eae885da50416f94ee8dc0926a9271ab5ee9de13ef9fe9e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        echo "EMPTY CONTENT";
        
        $__internal_c757235ade6d6380eae885da50416f94ee8dc0926a9271ab5ee9de13ef9fe9e2->leave($__internal_c757235ade6d6380eae885da50416f94ee8dc0926a9271ab5ee9de13ef9fe9e2_prof);

    }

    public function getTemplateName()
    {
        return "SonataBlockBundle:Block:block_base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 12,  30 => 13,  28 => 12,  23 => 11,);
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
/* <div id="cms-block-{{ block.id }}" class="cms-block cms-block-element">*/
/*     {% block block %}EMPTY CONTENT{% endblock %}*/
/* </div>*/
/* */
