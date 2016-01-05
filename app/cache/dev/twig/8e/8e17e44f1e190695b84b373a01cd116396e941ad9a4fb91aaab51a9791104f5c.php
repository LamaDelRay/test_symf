<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_b3b2bce69b9ad324a363f5f6a9132b568c5322eb8c09359fd4177a3d5d82be64 extends Twig_Template
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
        $__internal_65edfd084b021fef5c75be63e00df4d9daba2f5d40a3e2055be1f8680c3c6cf7 = $this->env->getExtension("native_profiler");
        $__internal_65edfd084b021fef5c75be63e00df4d9daba2f5d40a3e2055be1f8680c3c6cf7->enter($__internal_65edfd084b021fef5c75be63e00df4d9daba2f5d40a3e2055be1f8680c3c6cf7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_65edfd084b021fef5c75be63e00df4d9daba2f5d40a3e2055be1f8680c3c6cf7->leave($__internal_65edfd084b021fef5c75be63e00df4d9daba2f5d40a3e2055be1f8680c3c6cf7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr>*/
/*     <td>*/
/*         <?php echo $view['form']->label($form) ?>*/
/*     </td>*/
/*     <td>*/
/*         <?php echo $view['form']->errors($form) ?>*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
