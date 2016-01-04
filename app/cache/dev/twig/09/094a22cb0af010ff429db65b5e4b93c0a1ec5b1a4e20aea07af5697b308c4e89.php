<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_f6600fe1da9a74a5d96d745c05ebe0dc6b3766a3d8c0f85bfe35e407832f6d88 extends Twig_Template
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
        $__internal_a17fdd85faed096bd2e59f127d76f601ee03c05d9821f7a0a8df0a2604ee8e3a = $this->env->getExtension("native_profiler");
        $__internal_a17fdd85faed096bd2e59f127d76f601ee03c05d9821f7a0a8df0a2604ee8e3a->enter($__internal_a17fdd85faed096bd2e59f127d76f601ee03c05d9821f7a0a8df0a2604ee8e3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_a17fdd85faed096bd2e59f127d76f601ee03c05d9821f7a0a8df0a2604ee8e3a->leave($__internal_a17fdd85faed096bd2e59f127d76f601ee03c05d9821f7a0a8df0a2604ee8e3a_prof);

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
