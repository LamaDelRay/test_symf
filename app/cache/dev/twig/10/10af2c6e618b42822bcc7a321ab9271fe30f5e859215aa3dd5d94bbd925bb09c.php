<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_a1cf6780dbd449088722ad4612d0b598fdd4e3941ac6a866416df0dc27313fd4 extends Twig_Template
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
        $__internal_96718d6f6b8606699899596e1a0016726b0b3616b5ee00017d96a2d662444a67 = $this->env->getExtension("native_profiler");
        $__internal_96718d6f6b8606699899596e1a0016726b0b3616b5ee00017d96a2d662444a67->enter($__internal_96718d6f6b8606699899596e1a0016726b0b3616b5ee00017d96a2d662444a67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_96718d6f6b8606699899596e1a0016726b0b3616b5ee00017d96a2d662444a67->leave($__internal_96718d6f6b8606699899596e1a0016726b0b3616b5ee00017d96a2d662444a67_prof);

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
