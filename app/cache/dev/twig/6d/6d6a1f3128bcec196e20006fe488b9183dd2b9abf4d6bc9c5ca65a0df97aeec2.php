<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_60e133fafb4a5cc93a69a89e8ea57d0f2078338c7a21f97b9e992e3d71db29fe extends Twig_Template
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
        $__internal_2ba481982b3687f07654d3c6df8b3c76cbea26ec18d8505bc9f56e5dab805aec = $this->env->getExtension("native_profiler");
        $__internal_2ba481982b3687f07654d3c6df8b3c76cbea26ec18d8505bc9f56e5dab805aec->enter($__internal_2ba481982b3687f07654d3c6df8b3c76cbea26ec18d8505bc9f56e5dab805aec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_2ba481982b3687f07654d3c6df8b3c76cbea26ec18d8505bc9f56e5dab805aec->leave($__internal_2ba481982b3687f07654d3c6df8b3c76cbea26ec18d8505bc9f56e5dab805aec_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($compound): ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_compound')?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_simple')?>*/
/* <?php endif ?>*/
/* */
