<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_839e08a7b237490d68826540ccd8481da190654ded679c7243193930031951d0 extends Twig_Template
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
        $__internal_b0d9f0d7c62c8ba9716d60cf493db9004dcdedec943a6b7eee6253c994fd789a = $this->env->getExtension("native_profiler");
        $__internal_b0d9f0d7c62c8ba9716d60cf493db9004dcdedec943a6b7eee6253c994fd789a->enter($__internal_b0d9f0d7c62c8ba9716d60cf493db9004dcdedec943a6b7eee6253c994fd789a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_b0d9f0d7c62c8ba9716d60cf493db9004dcdedec943a6b7eee6253c994fd789a->leave($__internal_b0d9f0d7c62c8ba9716d60cf493db9004dcdedec943a6b7eee6253c994fd789a_prof);

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
