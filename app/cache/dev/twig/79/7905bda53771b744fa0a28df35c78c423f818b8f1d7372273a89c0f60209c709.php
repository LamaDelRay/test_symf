<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_8580e4aede021c72d1d7e895fd82914d119561384f40449991755acea0ec713f extends Twig_Template
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
        $__internal_f04ed59fcf6211630870179d0e8b7bbdf99254abab83a7f4d7e980c7ecdd0ecd = $this->env->getExtension("native_profiler");
        $__internal_f04ed59fcf6211630870179d0e8b7bbdf99254abab83a7f4d7e980c7ecdd0ecd->enter($__internal_f04ed59fcf6211630870179d0e8b7bbdf99254abab83a7f4d7e980c7ecdd0ecd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_f04ed59fcf6211630870179d0e8b7bbdf99254abab83a7f4d7e980c7ecdd0ecd->leave($__internal_f04ed59fcf6211630870179d0e8b7bbdf99254abab83a7f4d7e980c7ecdd0ecd_prof);

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
