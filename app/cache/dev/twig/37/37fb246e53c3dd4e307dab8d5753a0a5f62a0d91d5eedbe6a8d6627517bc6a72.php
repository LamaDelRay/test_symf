<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_54719f0013826d831f40a5cb9f9fbbf8c989697558493873b98f4581204e19a7 extends Twig_Template
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
        $__internal_84bcff7b3b70d1f2a90f263fc79531c51856651c410e5e064a78e88326465355 = $this->env->getExtension("native_profiler");
        $__internal_84bcff7b3b70d1f2a90f263fc79531c51856651c410e5e064a78e88326465355->enter($__internal_84bcff7b3b70d1f2a90f263fc79531c51856651c410e5e064a78e88326465355_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_84bcff7b3b70d1f2a90f263fc79531c51856651c410e5e064a78e88326465355->leave($__internal_84bcff7b3b70d1f2a90f263fc79531c51856651c410e5e064a78e88326465355_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="checkbox"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     <?php if (strlen($value) > 0): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?>*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
