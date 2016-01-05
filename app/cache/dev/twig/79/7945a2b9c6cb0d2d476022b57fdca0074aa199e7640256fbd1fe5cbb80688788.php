<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_29e2e0153afe975aea3854dbfc9f87a952a803641739c16b620f46bd0ccaa664 extends Twig_Template
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
        $__internal_0eb12bac88fd7e7aa623f5c5a30f0b56ba343d55a44f70d2b63652b6a9b5f0c6 = $this->env->getExtension("native_profiler");
        $__internal_0eb12bac88fd7e7aa623f5c5a30f0b56ba343d55a44f70d2b63652b6a9b5f0c6->enter($__internal_0eb12bac88fd7e7aa623f5c5a30f0b56ba343d55a44f70d2b63652b6a9b5f0c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_0eb12bac88fd7e7aa623f5c5a30f0b56ba343d55a44f70d2b63652b6a9b5f0c6->leave($__internal_0eb12bac88fd7e7aa623f5c5a30f0b56ba343d55a44f70d2b63652b6a9b5f0c6_prof);

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
