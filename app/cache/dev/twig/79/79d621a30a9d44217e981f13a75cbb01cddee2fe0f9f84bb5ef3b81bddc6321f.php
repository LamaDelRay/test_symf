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
        $__internal_a7f1810b23ec2d93ab9205b81e1e0854ec372a4899190374172412b51ae0fe2b = $this->env->getExtension("native_profiler");
        $__internal_a7f1810b23ec2d93ab9205b81e1e0854ec372a4899190374172412b51ae0fe2b->enter($__internal_a7f1810b23ec2d93ab9205b81e1e0854ec372a4899190374172412b51ae0fe2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_a7f1810b23ec2d93ab9205b81e1e0854ec372a4899190374172412b51ae0fe2b->leave($__internal_a7f1810b23ec2d93ab9205b81e1e0854ec372a4899190374172412b51ae0fe2b_prof);

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
