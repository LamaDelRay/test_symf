<?php

/* SonataBlockBundle:Block:block_core_text.html.twig */
class __TwigTemplate_4867cacb6f2da22f58f2b392ec2b012368fb01dd003e325a321adfc8396e7e17 extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute($this->getAttribute((isset($context["sonata_block"]) ? $context["sonata_block"] : $this->getContext($context, "sonata_block")), "templates", array()), "block_base", array()), "SonataBlockBundle:Block:block_core_text.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1bba39afadcdb987369b5216c7b25b5d25948f3b76a6f9061140149cbaa4ed76 = $this->env->getExtension("native_profiler");
        $__internal_1bba39afadcdb987369b5216c7b25b5d25948f3b76a6f9061140149cbaa4ed76->enter($__internal_1bba39afadcdb987369b5216c7b25b5d25948f3b76a6f9061140149cbaa4ed76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_core_text.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1bba39afadcdb987369b5216c7b25b5d25948f3b76a6f9061140149cbaa4ed76->leave($__internal_1bba39afadcdb987369b5216c7b25b5d25948f3b76a6f9061140149cbaa4ed76_prof);

    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        $__internal_7634941721bb569679d66539704d7fd9e97912ae9fff2888104082969375d390 = $this->env->getExtension("native_profiler");
        $__internal_7634941721bb569679d66539704d7fd9e97912ae9fff2888104082969375d390->enter($__internal_7634941721bb569679d66539704d7fd9e97912ae9fff2888104082969375d390_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 15
        echo "    ";
        echo $this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "content", array());
        echo "
";
        
        $__internal_7634941721bb569679d66539704d7fd9e97912ae9fff2888104082969375d390->leave($__internal_7634941721bb569679d66539704d7fd9e97912ae9fff2888104082969375d390_prof);

    }

    public function getTemplateName()
    {
        return "SonataBlockBundle:Block:block_core_text.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 15,  33 => 14,  18 => 12,);
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
/*     {{ settings.content|raw }}*/
/* {% endblock %}*/
/* */
