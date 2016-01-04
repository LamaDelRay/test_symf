<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_0eab1b655859503c54c9d97ae40f8e9b1a584635b0b43db338503df00426f7bd extends Twig_Template
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
        $__internal_fa051f77e8f49123ef8ff2bd88bbeb90458ff065480759b773e05810ac6dd2e7 = $this->env->getExtension("native_profiler");
        $__internal_fa051f77e8f49123ef8ff2bd88bbeb90458ff065480759b773e05810ac6dd2e7->enter($__internal_fa051f77e8f49123ef8ff2bd88bbeb90458ff065480759b773e05810ac6dd2e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_fa051f77e8f49123ef8ff2bd88bbeb90458ff065480759b773e05810ac6dd2e7->leave($__internal_fa051f77e8f49123ef8ff2bd88bbeb90458ff065480759b773e05810ac6dd2e7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div>*/
/*     <?php echo $view['form']->label($form) ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php echo $view['form']->widget($form) ?>*/
/* </div>*/
/* */
