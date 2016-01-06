<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_96c1918479f7d455a0c7aedcf370565328d0706b2e7cbe361e5abc7ddade4045 extends Twig_Template
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
        $__internal_f33eedc047821409777fd8ea2f90a107ff4bc88425b91f365137a261905d9beb = $this->env->getExtension("native_profiler");
        $__internal_f33eedc047821409777fd8ea2f90a107ff4bc88425b91f365137a261905d9beb->enter($__internal_f33eedc047821409777fd8ea2f90a107ff4bc88425b91f365137a261905d9beb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_f33eedc047821409777fd8ea2f90a107ff4bc88425b91f365137a261905d9beb->leave($__internal_f33eedc047821409777fd8ea2f90a107ff4bc88425b91f365137a261905d9beb_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <textarea <?php echo $view['form']->block($form, 'widget_attributes') ?>><?php echo $view->escape($value) ?></textarea>*/
/* */
