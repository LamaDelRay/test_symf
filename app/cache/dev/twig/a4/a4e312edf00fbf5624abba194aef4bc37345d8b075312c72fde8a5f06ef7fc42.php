<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_f0ffd28b4bfd23c0f55ba1f2335df6b14476d4fd47fa91114b8df7b1cac03677 extends Twig_Template
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
        $__internal_542e0fb1ade80dc94fb1e5cf40cedd0633df876b1b87c0e90cb468f779f0275a = $this->env->getExtension("native_profiler");
        $__internal_542e0fb1ade80dc94fb1e5cf40cedd0633df876b1b87c0e90cb468f779f0275a->enter($__internal_542e0fb1ade80dc94fb1e5cf40cedd0633df876b1b87c0e90cb468f779f0275a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_542e0fb1ade80dc94fb1e5cf40cedd0633df876b1b87c0e90cb468f779f0275a->leave($__internal_542e0fb1ade80dc94fb1e5cf40cedd0633df876b1b87c0e90cb468f779f0275a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </div>*/
/* */
