<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_2cb2115a2eb349906ae716d8b9e1d3cec62c39eff2b0f1f38094bf7d8482ae2c extends Twig_Template
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
        $__internal_e415016b8c1130bea15e393fd68d9d428f0a99b0666c304f57cc2e43ddaea6fc = $this->env->getExtension("native_profiler");
        $__internal_e415016b8c1130bea15e393fd68d9d428f0a99b0666c304f57cc2e43ddaea6fc->enter($__internal_e415016b8c1130bea15e393fd68d9d428f0a99b0666c304f57cc2e43ddaea6fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_e415016b8c1130bea15e393fd68d9d428f0a99b0666c304f57cc2e43ddaea6fc->leave($__internal_e415016b8c1130bea15e393fd68d9d428f0a99b0666c304f57cc2e43ddaea6fc_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($expanded): ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_expanded') ?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_collapsed') ?>*/
/* <?php endif ?>*/
/* */
