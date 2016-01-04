<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_83a67808116865e71454619d5a350eef06329090c6f2bf397a7586e82c49e616 extends Twig_Template
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
        $__internal_1bf681dd1b8144192e0c18cc991b2ef5cb839a218bf384fa4123635320c97ce1 = $this->env->getExtension("native_profiler");
        $__internal_1bf681dd1b8144192e0c18cc991b2ef5cb839a218bf384fa4123635320c97ce1->enter($__internal_1bf681dd1b8144192e0c18cc991b2ef5cb839a218bf384fa4123635320c97ce1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_1bf681dd1b8144192e0c18cc991b2ef5cb839a218bf384fa4123635320c97ce1->leave($__internal_1bf681dd1b8144192e0c18cc991b2ef5cb839a218bf384fa4123635320c97ce1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="checkbox"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     <?php if (strlen($value) > 0): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?>*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
