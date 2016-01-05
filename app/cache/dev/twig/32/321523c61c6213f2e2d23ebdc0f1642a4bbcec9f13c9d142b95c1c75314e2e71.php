<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_eab71169bc86ef63cf4f011a34cadcada81a5c10393b2d72236b51eb8b101b69 extends Twig_Template
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
        $__internal_6262aa6ac19897f600bf8b802676dc3f8c311dee0fa8b2c41fd1b1c4b277ee4f = $this->env->getExtension("native_profiler");
        $__internal_6262aa6ac19897f600bf8b802676dc3f8c311dee0fa8b2c41fd1b1c4b277ee4f->enter($__internal_6262aa6ac19897f600bf8b802676dc3f8c311dee0fa8b2c41fd1b1c4b277ee4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_6262aa6ac19897f600bf8b802676dc3f8c311dee0fa8b2c41fd1b1c4b277ee4f->leave($__internal_6262aa6ac19897f600bf8b802676dc3f8c311dee0fa8b2c41fd1b1c4b277ee4f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr style="display: none">*/
/*     <td colspan="2">*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
