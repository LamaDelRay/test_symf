<?php

/* SonataAdminBundle:CRUD:edit_text.html.twig */
class __TwigTemplate_2d4464a08c1d7d18f266059d51a506ad4e3a8fa2ac67285722eb71006afa6a23 extends Twig_Template
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
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "SonataAdminBundle:CRUD:edit_text.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8702d79379d449683c91035f50fc0c8ff1cf137fa23f3822383e51735ed40c05 = $this->env->getExtension("native_profiler");
        $__internal_8702d79379d449683c91035f50fc0c8ff1cf137fa23f3822383e51735ed40c05->enter($__internal_8702d79379d449683c91035f50fc0c8ff1cf137fa23f3822383e51735ed40c05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_text.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8702d79379d449683c91035f50fc0c8ff1cf137fa23f3822383e51735ed40c05->leave($__internal_8702d79379d449683c91035f50fc0c8ff1cf137fa23f3822383e51735ed40c05_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_613620c2ab48e39c37c607b8348e2ff8e14e19ce3a398d2f0fc83609dc607491 = $this->env->getExtension("native_profiler");
        $__internal_613620c2ab48e39c37c607b8348e2ff8e14e19ce3a398d2f0fc83609dc607491->enter($__internal_613620c2ab48e39c37c607b8348e2ff8e14e19ce3a398d2f0fc83609dc607491_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget', array("attr" => array("class" => "title")));
        
        $__internal_613620c2ab48e39c37c607b8348e2ff8e14e19ce3a398d2f0fc83609dc607491->leave($__internal_613620c2ab48e39c37c607b8348e2ff8e14e19ce3a398d2f0fc83609dc607491_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:edit_text.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 14,  18 => 12,);
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
/* {% block field %}{{ form_widget(field_element, {'attr': {'class' : 'title'}}) }}{% endblock %}*/
/* */
