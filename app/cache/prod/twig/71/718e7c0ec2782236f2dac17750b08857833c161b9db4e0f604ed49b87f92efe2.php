<?php

/* SonataBlockBundle:Block:block_base.html.twig */
class __TwigTemplate_d44141a9eef8c44d529fd7f8585686221e31d8bffc07e82db67a75094b008758 extends Twig_Template
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
        $__internal_e3dd83a04635f787f53c56835f66c67378880a8b554d359e58f53d8434d7f092 = $this->env->getExtension("native_profiler");
        $__internal_e3dd83a04635f787f53c56835f66c67378880a8b554d359e58f53d8434d7f092->enter($__internal_e3dd83a04635f787f53c56835f66c67378880a8b554d359e58f53d8434d7f092_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_base.html.twig"));

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
        
        $__internal_e3dd83a04635f787f53c56835f66c67378880a8b554d359e58f53d8434d7f092->leave($__internal_e3dd83a04635f787f53c56835f66c67378880a8b554d359e58f53d8434d7f092_prof);

    }

    // line 12
    public function block_block($context, array $blocks = array())
    {
        $__internal_e8ee03973a3b078c9d35c37ca53e17d7be965fa200fa1316178b3bb1f1582383 = $this->env->getExtension("native_profiler");
        $__internal_e8ee03973a3b078c9d35c37ca53e17d7be965fa200fa1316178b3bb1f1582383->enter($__internal_e8ee03973a3b078c9d35c37ca53e17d7be965fa200fa1316178b3bb1f1582383_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        echo "EMPTY CONTENT";
        
        $__internal_e8ee03973a3b078c9d35c37ca53e17d7be965fa200fa1316178b3bb1f1582383->leave($__internal_e8ee03973a3b078c9d35c37ca53e17d7be965fa200fa1316178b3bb1f1582383_prof);

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
