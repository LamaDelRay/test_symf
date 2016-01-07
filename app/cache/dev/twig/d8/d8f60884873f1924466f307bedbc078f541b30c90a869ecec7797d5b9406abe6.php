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
        $__internal_e71fd452d3fb5670440bd0428452eed3d548bb8ff7acb3a0604a5f323bccc13f = $this->env->getExtension("native_profiler");
        $__internal_e71fd452d3fb5670440bd0428452eed3d548bb8ff7acb3a0604a5f323bccc13f->enter($__internal_e71fd452d3fb5670440bd0428452eed3d548bb8ff7acb3a0604a5f323bccc13f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

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
        
        $__internal_e71fd452d3fb5670440bd0428452eed3d548bb8ff7acb3a0604a5f323bccc13f->leave($__internal_e71fd452d3fb5670440bd0428452eed3d548bb8ff7acb3a0604a5f323bccc13f_prof);

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
