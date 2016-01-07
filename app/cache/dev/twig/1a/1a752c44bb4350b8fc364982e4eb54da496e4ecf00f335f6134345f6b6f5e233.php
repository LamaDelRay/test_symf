<?php

/* SonataBlockBundle:Block:block_core_action.html.twig */
class __TwigTemplate_fbf2d86b9d0e529416f1da27d4bd25dd87efaf092e303c894c300a68e6524295 extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute($this->getAttribute((isset($context["sonata_block"]) ? $context["sonata_block"] : $this->getContext($context, "sonata_block")), "templates", array()), "block_base", array()), "SonataBlockBundle:Block:block_core_action.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c35b2981dc2982331deffc7d873e6a6de56b63168e94c6db7f3d874fe8213201 = $this->env->getExtension("native_profiler");
        $__internal_c35b2981dc2982331deffc7d873e6a6de56b63168e94c6db7f3d874fe8213201->enter($__internal_c35b2981dc2982331deffc7d873e6a6de56b63168e94c6db7f3d874fe8213201_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_core_action.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c35b2981dc2982331deffc7d873e6a6de56b63168e94c6db7f3d874fe8213201->leave($__internal_c35b2981dc2982331deffc7d873e6a6de56b63168e94c6db7f3d874fe8213201_prof);

    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        $__internal_60ff950ddcd400aa07144267544cc0b0e463168b22ce4dd80f9ea818be88f881 = $this->env->getExtension("native_profiler");
        $__internal_60ff950ddcd400aa07144267544cc0b0e463168b22ce4dd80f9ea818be88f881->enter($__internal_60ff950ddcd400aa07144267544cc0b0e463168b22ce4dd80f9ea818be88f881_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 15
        echo "    ";
        echo (isset($context["content"]) ? $context["content"] : $this->getContext($context, "content"));
        echo "
";
        
        $__internal_60ff950ddcd400aa07144267544cc0b0e463168b22ce4dd80f9ea818be88f881->leave($__internal_60ff950ddcd400aa07144267544cc0b0e463168b22ce4dd80f9ea818be88f881_prof);

    }

    public function getTemplateName()
    {
        return "SonataBlockBundle:Block:block_core_action.html.twig";
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
/*     {{ content|raw }}*/
/* {% endblock %}*/
/* */
