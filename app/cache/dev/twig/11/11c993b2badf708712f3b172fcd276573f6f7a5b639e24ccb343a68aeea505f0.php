<?php

/* knp_menu_base.html.twig */
class __TwigTemplate_d9f28b42a074a7396718ad35da9a92fe3272eb856f23a81692c6cec3b55ee692 extends Twig_Template
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
        $__internal_3daad5cb86b2168370fd021021f46072afe82c0fab7dc23a89b6b40b5c67f127 = $this->env->getExtension("native_profiler");
        $__internal_3daad5cb86b2168370fd021021f46072afe82c0fab7dc23a89b6b40b5c67f127->enter($__internal_3daad5cb86b2168370fd021021f46072afe82c0fab7dc23a89b6b40b5c67f127_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "knp_menu_base.html.twig"));

        // line 1
        if ($this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "compressed", array())) {
            $this->displayBlock("compressed_root", $context, $blocks);
        } else {
            $this->displayBlock("root", $context, $blocks);
        }
        
        $__internal_3daad5cb86b2168370fd021021f46072afe82c0fab7dc23a89b6b40b5c67f127->leave($__internal_3daad5cb86b2168370fd021021f46072afe82c0fab7dc23a89b6b40b5c67f127_prof);

    }

    public function getTemplateName()
    {
        return "knp_menu_base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% if options.compressed %}{{ block('compressed_root') }}{% else %}{{ block('root') }}{% endif %}*/
/* */
