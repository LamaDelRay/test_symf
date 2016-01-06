<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_160ad239d347c16e01c8cd5c8cf0e9dac6acc439edc27ab509685aa43824ffc3 extends Twig_Template
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
        $__internal_c0cbf9e494a5b8a8e92eb6e11bb65990e87ed91d257786cc1dd9661d5be96708 = $this->env->getExtension("native_profiler");
        $__internal_c0cbf9e494a5b8a8e92eb6e11bb65990e87ed91d257786cc1dd9661d5be96708->enter($__internal_c0cbf9e494a5b8a8e92eb6e11bb65990e87ed91d257786cc1dd9661d5be96708_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_c0cbf9e494a5b8a8e92eb6e11bb65990e87ed91d257786cc1dd9661d5be96708->leave($__internal_c0cbf9e494a5b8a8e92eb6e11bb65990e87ed91d257786cc1dd9661d5be96708_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="radio"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     value="<?php echo $view->escape($value) ?>"*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
