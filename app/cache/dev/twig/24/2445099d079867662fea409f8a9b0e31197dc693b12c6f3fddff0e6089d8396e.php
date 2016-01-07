<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_a65ef961a3c5b77452e357bc87f1f631463460466dc9e809a0d4b1685e985a77 extends Twig_Template
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
        $__internal_63df21463b44ba14fde9dca6d2f9888339422b9213995d71dea52cc1dc67293f = $this->env->getExtension("native_profiler");
        $__internal_63df21463b44ba14fde9dca6d2f9888339422b9213995d71dea52cc1dc67293f->enter($__internal_63df21463b44ba14fde9dca6d2f9888339422b9213995d71dea52cc1dc67293f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_63df21463b44ba14fde9dca6d2f9888339422b9213995d71dea52cc1dc67293f->leave($__internal_63df21463b44ba14fde9dca6d2f9888339422b9213995d71dea52cc1dc67293f_prof);

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
