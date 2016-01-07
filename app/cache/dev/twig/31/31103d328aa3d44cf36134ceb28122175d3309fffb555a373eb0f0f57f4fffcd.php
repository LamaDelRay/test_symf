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
        $__internal_c4d7a6787a781c1f1ec944868543b3d44e192ac60df40d7d341688b74860c313 = $this->env->getExtension("native_profiler");
        $__internal_c4d7a6787a781c1f1ec944868543b3d44e192ac60df40d7d341688b74860c313->enter($__internal_c4d7a6787a781c1f1ec944868543b3d44e192ac60df40d7d341688b74860c313_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_c4d7a6787a781c1f1ec944868543b3d44e192ac60df40d7d341688b74860c313->leave($__internal_c4d7a6787a781c1f1ec944868543b3d44e192ac60df40d7d341688b74860c313_prof);

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
