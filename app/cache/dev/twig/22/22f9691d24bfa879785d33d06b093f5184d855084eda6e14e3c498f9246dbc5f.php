<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_2bc8f8f7985c02edddb298248b70f921b30c7edfffa2ae1d517884333a356280 extends Twig_Template
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
        $__internal_cdc15610c510743f269dd3499c23699438ed03d0d4ea02b5f1505ad7f1530a72 = $this->env->getExtension("native_profiler");
        $__internal_cdc15610c510743f269dd3499c23699438ed03d0d4ea02b5f1505ad7f1530a72->enter($__internal_cdc15610c510743f269dd3499c23699438ed03d0d4ea02b5f1505ad7f1530a72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_cdc15610c510743f269dd3499c23699438ed03d0d4ea02b5f1505ad7f1530a72->leave($__internal_cdc15610c510743f269dd3499c23699438ed03d0d4ea02b5f1505ad7f1530a72_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <table <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <tr>*/
/*         <td colspan="2">*/
/*             <?php echo $view['form']->errors($form) ?>*/
/*         </td>*/
/*     </tr>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </table>*/
/* */
