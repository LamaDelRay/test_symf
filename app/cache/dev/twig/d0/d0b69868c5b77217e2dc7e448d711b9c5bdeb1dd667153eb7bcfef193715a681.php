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
        $__internal_e6fb7ebadbc49101bc418d1943b9a0092555dc52518cba9d3815c198a23ef0e1 = $this->env->getExtension("native_profiler");
        $__internal_e6fb7ebadbc49101bc418d1943b9a0092555dc52518cba9d3815c198a23ef0e1->enter($__internal_e6fb7ebadbc49101bc418d1943b9a0092555dc52518cba9d3815c198a23ef0e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_base.html.twig"));

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
        
        $__internal_e6fb7ebadbc49101bc418d1943b9a0092555dc52518cba9d3815c198a23ef0e1->leave($__internal_e6fb7ebadbc49101bc418d1943b9a0092555dc52518cba9d3815c198a23ef0e1_prof);

    }

    // line 12
    public function block_block($context, array $blocks = array())
    {
        $__internal_eb01a41502e75f552e11141e07878af71ae19c91b95df88bfacece47d91976de = $this->env->getExtension("native_profiler");
        $__internal_eb01a41502e75f552e11141e07878af71ae19c91b95df88bfacece47d91976de->enter($__internal_eb01a41502e75f552e11141e07878af71ae19c91b95df88bfacece47d91976de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        echo "EMPTY CONTENT";
        
        $__internal_eb01a41502e75f552e11141e07878af71ae19c91b95df88bfacece47d91976de->leave($__internal_eb01a41502e75f552e11141e07878af71ae19c91b95df88bfacece47d91976de_prof);

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
