<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_ade182f91e9118835fbdd2b3126e56ea7cb87a48d3a6fcd14200ad6def779829 extends Twig_Template
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
        $__internal_411358f18ceb01ff3334fb5ccf2e1833b9ea94d7143c1b3b0826b1cf2067fa6b = $this->env->getExtension("native_profiler");
        $__internal_411358f18ceb01ff3334fb5ccf2e1833b9ea94d7143c1b3b0826b1cf2067fa6b->enter($__internal_411358f18ceb01ff3334fb5ccf2e1833b9ea94d7143c1b3b0826b1cf2067fa6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_411358f18ceb01ff3334fb5ccf2e1833b9ea94d7143c1b3b0826b1cf2067fa6b->leave($__internal_411358f18ceb01ff3334fb5ccf2e1833b9ea94d7143c1b3b0826b1cf2067fa6b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="<?php echo isset($type) ? $view->escape($type) : 'text' ?>" <?php echo $view['form']->block($form, 'widget_attributes') ?><?php if (!empty($value) || is_numeric($value)): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?> />*/
/* */
