<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_8dd7c7a942139a00a9ae536048ddd6e2e53300211e6ac5b406aad7f1c7584dbf extends Twig_Template
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
        $__internal_e34478fcca437091a8baa775d34e6cc5c69edb0e236975911c63a205b6024a63 = $this->env->getExtension("native_profiler");
        $__internal_e34478fcca437091a8baa775d34e6cc5c69edb0e236975911c63a205b6024a63->enter($__internal_e34478fcca437091a8baa775d34e6cc5c69edb0e236975911c63a205b6024a63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_e34478fcca437091a8baa775d34e6cc5c69edb0e236975911c63a205b6024a63->leave($__internal_e34478fcca437091a8baa775d34e6cc5c69edb0e236975911c63a205b6024a63_prof);

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
