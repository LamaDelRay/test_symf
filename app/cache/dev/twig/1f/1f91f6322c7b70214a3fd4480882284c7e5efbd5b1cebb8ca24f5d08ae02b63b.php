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
        $__internal_2d4404491ae6f7d2018865628c8828eb55dd76199421f67d2bacdb1963a8c5a0 = $this->env->getExtension("native_profiler");
        $__internal_2d4404491ae6f7d2018865628c8828eb55dd76199421f67d2bacdb1963a8c5a0->enter($__internal_2d4404491ae6f7d2018865628c8828eb55dd76199421f67d2bacdb1963a8c5a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

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
        
        $__internal_2d4404491ae6f7d2018865628c8828eb55dd76199421f67d2bacdb1963a8c5a0->leave($__internal_2d4404491ae6f7d2018865628c8828eb55dd76199421f67d2bacdb1963a8c5a0_prof);

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
