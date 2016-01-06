<?php

/* SonataBlockBundle:Block:block_exception.html.twig */
class __TwigTemplate_f5f6ba23ca61d1d563291b97b8f4207dc70da6d1a4c5c016d1057fffe1e35c58 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'block' => array($this, 'block_block'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate($this->getAttribute($this->getAttribute((isset($context["sonata_block"]) ? $context["sonata_block"] : $this->getContext($context, "sonata_block")), "templates", array()), "block_base", array()), "SonataBlockBundle:Block:block_exception.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e4e649918352bd55d06b6cac5665f98c0727f35db5d172580d674d38065844b8 = $this->env->getExtension("native_profiler");
        $__internal_e4e649918352bd55d06b6cac5665f98c0727f35db5d172580d674d38065844b8->enter($__internal_e4e649918352bd55d06b6cac5665f98c0727f35db5d172580d674d38065844b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_exception.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e4e649918352bd55d06b6cac5665f98c0727f35db5d172580d674d38065844b8->leave($__internal_e4e649918352bd55d06b6cac5665f98c0727f35db5d172580d674d38065844b8_prof);

    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        $__internal_e23ace9dba01c20fe1917dc979c0790346e7f48d2c55a9d9b8037ca355ed86ae = $this->env->getExtension("native_profiler");
        $__internal_e23ace9dba01c20fe1917dc979c0790346e7f48d2c55a9d9b8037ca355ed86ae->enter($__internal_e23ace9dba01c20fe1917dc979c0790346e7f48d2c55a9d9b8037ca355ed86ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 15
        echo "    <div class=\"cms-block-exception\">
        <h2>";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["block"]) ? $context["block"] : $this->getContext($context, "block")), "name", array()), "html", null, true);
        echo "</h2>
        <h3>";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo "</h3>
    </div>
";
        
        $__internal_e23ace9dba01c20fe1917dc979c0790346e7f48d2c55a9d9b8037ca355ed86ae->leave($__internal_e23ace9dba01c20fe1917dc979c0790346e7f48d2c55a9d9b8037ca355ed86ae_prof);

    }

    public function getTemplateName()
    {
        return "SonataBlockBundle:Block:block_exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 17,  42 => 16,  39 => 15,  33 => 14,  18 => 12,);
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
/* {% extends sonata_block.templates.block_base %}*/
/* */
/* {% block block %}*/
/*     <div class="cms-block-exception">*/
/*         <h2>{{ block.name }}</h2>*/
/*         <h3>{{ exception.message }}</h3>*/
/*     </div>*/
/* {% endblock %}*/
/* */
