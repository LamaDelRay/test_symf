<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_1e40a0cbca901b1e46cdba6b0456e7d490f77cc37b5160c721a1be12e6603a93 extends Twig_Template
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
        $__internal_6c69617bb3a69986a1299abb9998c798277edbef182fe38303ea5fb39d330d98 = $this->env->getExtension("native_profiler");
        $__internal_6c69617bb3a69986a1299abb9998c798277edbef182fe38303ea5fb39d330d98->enter($__internal_6c69617bb3a69986a1299abb9998c798277edbef182fe38303ea5fb39d330d98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_6c69617bb3a69986a1299abb9998c798277edbef182fe38303ea5fb39d330d98->leave($__internal_6c69617bb3a69986a1299abb9998c798277edbef182fe38303ea5fb39d330d98_prof);

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
