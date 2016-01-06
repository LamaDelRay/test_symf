<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_370672c9a39213f7739b3d168bd4ae429392137a1885dbae635e62634de0cfc1 extends Twig_Template
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
        $__internal_889c595674dc9b5a38521cea2666fa6bbbbcd065f762796fafa5693f91084512 = $this->env->getExtension("native_profiler");
        $__internal_889c595674dc9b5a38521cea2666fa6bbbbcd065f762796fafa5693f91084512->enter($__internal_889c595674dc9b5a38521cea2666fa6bbbbcd065f762796fafa5693f91084512_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

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
        
        $__internal_889c595674dc9b5a38521cea2666fa6bbbbcd065f762796fafa5693f91084512->leave($__internal_889c595674dc9b5a38521cea2666fa6bbbbcd065f762796fafa5693f91084512_prof);

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
