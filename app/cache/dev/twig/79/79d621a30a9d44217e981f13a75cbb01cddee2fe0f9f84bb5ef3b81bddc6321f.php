<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_0f02f8a4a3f16bfed98b01d1ed97bd41066580be8595d895d60d65b14e092efe extends Twig_Template
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
        $__internal_b9885aa9269a81de3b52eb099a03a61329691dffa42be713585256304b679af2 = $this->env->getExtension("native_profiler");
        $__internal_b9885aa9269a81de3b52eb099a03a61329691dffa42be713585256304b679af2->enter($__internal_b9885aa9269a81de3b52eb099a03a61329691dffa42be713585256304b679af2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_b9885aa9269a81de3b52eb099a03a61329691dffa42be713585256304b679af2->leave($__internal_b9885aa9269a81de3b52eb099a03a61329691dffa42be713585256304b679af2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($widget == 'single_text'): ?>*/
/*     <?php echo $view['form']->block($form, 'form_widget_simple'); ?>*/
/* <?php else: ?>*/
/*     <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*         <?php echo $view['form']->widget($form['date']).' '.$view['form']->widget($form['time']) ?>*/
/*     </div>*/
/* <?php endif ?>*/
/* */
