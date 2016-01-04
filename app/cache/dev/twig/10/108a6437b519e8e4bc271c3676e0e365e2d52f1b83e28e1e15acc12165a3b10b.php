<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_f3df34313eb8103a8c71e68a3866cd91bc0335fc7ab7069abf72264a5938ecef extends Twig_Template
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
        $__internal_d2a0d28704628a29a92680ac3ed9c890ccddb4068b254f5f5312a664295c1ed9 = $this->env->getExtension("native_profiler");
        $__internal_d2a0d28704628a29a92680ac3ed9c890ccddb4068b254f5f5312a664295c1ed9->enter($__internal_d2a0d28704628a29a92680ac3ed9c890ccddb4068b254f5f5312a664295c1ed9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_d2a0d28704628a29a92680ac3ed9c890ccddb4068b254f5f5312a664295c1ed9->leave($__internal_d2a0d28704628a29a92680ac3ed9c890ccddb4068b254f5f5312a664295c1ed9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($compound): ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_compound')?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_simple')?>*/
/* <?php endif ?>*/
/* */
