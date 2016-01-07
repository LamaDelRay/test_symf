<?php

/* SonataAdminBundle:CRUD:list_percent.html.twig */
class __TwigTemplate_3a745185ddb9551c80c9828dca698f9a5a2db9c9c92e9a8f9f443590883b5dd5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list_percent.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b5d65fda1325d16a8852fca706db4ba8c54d0ca1f208df56b09948cd89a25d92 = $this->env->getExtension("native_profiler");
        $__internal_b5d65fda1325d16a8852fca706db4ba8c54d0ca1f208df56b09948cd89a25d92->enter($__internal_b5d65fda1325d16a8852fca706db4ba8c54d0ca1f208df56b09948cd89a25d92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_percent.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b5d65fda1325d16a8852fca706db4ba8c54d0ca1f208df56b09948cd89a25d92->leave($__internal_b5d65fda1325d16a8852fca706db4ba8c54d0ca1f208df56b09948cd89a25d92_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_1d76817af41a6736dd43a0db82176d90d228c364dded1a6defa5199bc3c000ad = $this->env->getExtension("native_profiler");
        $__internal_1d76817af41a6736dd43a0db82176d90d228c364dded1a6defa5199bc3c000ad->enter($__internal_1d76817af41a6736dd43a0db82176d90d228c364dded1a6defa5199bc3c000ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    ";
        $context["value"] = ((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")) * 100);
        // line 16
        echo "    ";
        echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
        echo " %
";
        
        $__internal_1d76817af41a6736dd43a0db82176d90d228c364dded1a6defa5199bc3c000ad->leave($__internal_1d76817af41a6736dd43a0db82176d90d228c364dded1a6defa5199bc3c000ad_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list_percent.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 16,  39 => 15,  33 => 14,  18 => 12,);
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
/* {% extends admin.getTemplate('base_list_field') %}*/
/* */
/* {% block field %}*/
/*     {% set value = value * 100 %}*/
/*     {{ value }} %*/
/* {% endblock %}*/
/* */
