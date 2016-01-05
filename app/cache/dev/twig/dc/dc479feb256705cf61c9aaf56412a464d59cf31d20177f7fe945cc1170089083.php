<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_d5ca13e32d65f3b9a96f4e7845e80dcdf59fec25b4684ad4c889e57cae8bfff7 extends Twig_Template
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
        $__internal_4e2b5957fef77cd081102e9214e632ca446e0bb2f5557f57e206e9a5c9848193 = $this->env->getExtension("native_profiler");
        $__internal_4e2b5957fef77cd081102e9214e632ca446e0bb2f5557f57e206e9a5c9848193->enter($__internal_4e2b5957fef77cd081102e9214e632ca446e0bb2f5557f57e206e9a5c9848193_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_4e2b5957fef77cd081102e9214e632ca446e0bb2f5557f57e206e9a5c9848193->leave($__internal_4e2b5957fef77cd081102e9214e632ca446e0bb2f5557f57e206e9a5c9848193_prof);

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
