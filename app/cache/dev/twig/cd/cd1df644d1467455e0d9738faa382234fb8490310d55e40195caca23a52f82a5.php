<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_abf209829e5afae44f47bf5b6be78b9d8515d8a16f5f5c299b43b6f008727702 extends Twig_Template
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
        $__internal_1d06f429602478910d47f9423cc178a539a15e4768f8e560746b7e545979c6dc = $this->env->getExtension("native_profiler");
        $__internal_1d06f429602478910d47f9423cc178a539a15e4768f8e560746b7e545979c6dc->enter($__internal_1d06f429602478910d47f9423cc178a539a15e4768f8e560746b7e545979c6dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

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
        
        $__internal_1d06f429602478910d47f9423cc178a539a15e4768f8e560746b7e545979c6dc->leave($__internal_1d06f429602478910d47f9423cc178a539a15e4768f8e560746b7e545979c6dc_prof);

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
