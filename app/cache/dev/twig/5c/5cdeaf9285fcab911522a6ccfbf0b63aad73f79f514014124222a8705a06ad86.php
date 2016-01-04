<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_0d986e2cc45f1acdb37e3c2f2e4fe0ef9f3f59f12073237d2fb06c125d397650 extends Twig_Template
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
        $__internal_a94c6b1539ffdf4e59b1fff72cd214471f731964370199016320729bbdd63e45 = $this->env->getExtension("native_profiler");
        $__internal_a94c6b1539ffdf4e59b1fff72cd214471f731964370199016320729bbdd63e45->enter($__internal_a94c6b1539ffdf4e59b1fff72cd214471f731964370199016320729bbdd63e45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_a94c6b1539ffdf4e59b1fff72cd214471f731964370199016320729bbdd63e45->leave($__internal_a94c6b1539ffdf4e59b1fff72cd214471f731964370199016320729bbdd63e45_prof);

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
