<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_1221b0ff651dd1c378171340835c8a9496b4f705a24f4ab3f82e97435b1fcbf4 extends Twig_Template
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
        $__internal_d1b5352ee07fb8dce2e95409ccd3d0d7538d27491c9cccc2d2c4bcee88908aad = $this->env->getExtension("native_profiler");
        $__internal_d1b5352ee07fb8dce2e95409ccd3d0d7538d27491c9cccc2d2c4bcee88908aad->enter($__internal_d1b5352ee07fb8dce2e95409ccd3d0d7538d27491c9cccc2d2c4bcee88908aad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_d1b5352ee07fb8dce2e95409ccd3d0d7538d27491c9cccc2d2c4bcee88908aad->leave($__internal_d1b5352ee07fb8dce2e95409ccd3d0d7538d27491c9cccc2d2c4bcee88908aad_prof);

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
