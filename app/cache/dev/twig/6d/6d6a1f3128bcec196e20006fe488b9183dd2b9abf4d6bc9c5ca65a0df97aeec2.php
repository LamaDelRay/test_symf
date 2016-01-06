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
        $__internal_4db5350981b6d5b0d17b7d2f6b2a3d630883078b2d05323aa009c280e0453f3c = $this->env->getExtension("native_profiler");
        $__internal_4db5350981b6d5b0d17b7d2f6b2a3d630883078b2d05323aa009c280e0453f3c->enter($__internal_4db5350981b6d5b0d17b7d2f6b2a3d630883078b2d05323aa009c280e0453f3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_4db5350981b6d5b0d17b7d2f6b2a3d630883078b2d05323aa009c280e0453f3c->leave($__internal_4db5350981b6d5b0d17b7d2f6b2a3d630883078b2d05323aa009c280e0453f3c_prof);

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
