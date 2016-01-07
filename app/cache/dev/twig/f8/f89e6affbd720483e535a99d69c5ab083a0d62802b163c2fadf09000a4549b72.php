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
        $__internal_2d8fcae13afb909492a0850218313a5124a92c08b0a5e6e765adecfe3cf2c6cd = $this->env->getExtension("native_profiler");
        $__internal_2d8fcae13afb909492a0850218313a5124a92c08b0a5e6e765adecfe3cf2c6cd->enter($__internal_2d8fcae13afb909492a0850218313a5124a92c08b0a5e6e765adecfe3cf2c6cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_2d8fcae13afb909492a0850218313a5124a92c08b0a5e6e765adecfe3cf2c6cd->leave($__internal_2d8fcae13afb909492a0850218313a5124a92c08b0a5e6e765adecfe3cf2c6cd_prof);

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
