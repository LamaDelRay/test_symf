<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_0b2349e5235287477e1a8dfffae2e691a3a7d7415b1045817d290baabb1d2a47 extends Twig_Template
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
        $__internal_19ff3b956dc3962e826eb623a9df30e3d6992cff00d2879cfb2a5388e80940a3 = $this->env->getExtension("native_profiler");
        $__internal_19ff3b956dc3962e826eb623a9df30e3d6992cff00d2879cfb2a5388e80940a3->enter($__internal_19ff3b956dc3962e826eb623a9df30e3d6992cff00d2879cfb2a5388e80940a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

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
        
        $__internal_19ff3b956dc3962e826eb623a9df30e3d6992cff00d2879cfb2a5388e80940a3->leave($__internal_19ff3b956dc3962e826eb623a9df30e3d6992cff00d2879cfb2a5388e80940a3_prof);

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
