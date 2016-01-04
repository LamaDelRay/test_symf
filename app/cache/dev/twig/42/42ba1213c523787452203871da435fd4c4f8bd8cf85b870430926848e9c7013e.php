<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_3435977cda6c783c72ac8bd0262c4dc4c6947b9ba41064a26dec973fe3231db2 extends Twig_Template
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
        $__internal_d569047485c08483dce9d44151eb56b91dac2e552d74d97e696bac85ac47b001 = $this->env->getExtension("native_profiler");
        $__internal_d569047485c08483dce9d44151eb56b91dac2e552d74d97e696bac85ac47b001->enter($__internal_d569047485c08483dce9d44151eb56b91dac2e552d74d97e696bac85ac47b001_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_d569047485c08483dce9d44151eb56b91dac2e552d74d97e696bac85ac47b001->leave($__internal_d569047485c08483dce9d44151eb56b91dac2e552d74d97e696bac85ac47b001_prof);

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
