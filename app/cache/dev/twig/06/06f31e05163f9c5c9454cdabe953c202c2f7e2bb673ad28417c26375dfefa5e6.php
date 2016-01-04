<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_49eda11751c783948b70e6efa4051f8f2e229c7851d6fb94966e3a0060cdc4ec extends Twig_Template
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
        $__internal_d726e528b5e4bf1fa50fedba955d9c6c72f36fdcf8b41a3b54019472dd82be49 = $this->env->getExtension("native_profiler");
        $__internal_d726e528b5e4bf1fa50fedba955d9c6c72f36fdcf8b41a3b54019472dd82be49->enter($__internal_d726e528b5e4bf1fa50fedba955d9c6c72f36fdcf8b41a3b54019472dd82be49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_d726e528b5e4bf1fa50fedba955d9c6c72f36fdcf8b41a3b54019472dd82be49->leave($__internal_d726e528b5e4bf1fa50fedba955d9c6c72f36fdcf8b41a3b54019472dd82be49_prof);

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
