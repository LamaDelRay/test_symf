<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_27e639bed4021ce0479b7f5d6580ef8e44ded0d62edc8b418dd9be12c6b695a0 extends Twig_Template
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
        $__internal_651d21911d629c52dded94e2f257dc72fa7644b3f73dacf0dac0981d930d1165 = $this->env->getExtension("native_profiler");
        $__internal_651d21911d629c52dded94e2f257dc72fa7644b3f73dacf0dac0981d930d1165->enter($__internal_651d21911d629c52dded94e2f257dc72fa7644b3f73dacf0dac0981d930d1165_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

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
        
        $__internal_651d21911d629c52dded94e2f257dc72fa7644b3f73dacf0dac0981d930d1165->leave($__internal_651d21911d629c52dded94e2f257dc72fa7644b3f73dacf0dac0981d930d1165_prof);

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
