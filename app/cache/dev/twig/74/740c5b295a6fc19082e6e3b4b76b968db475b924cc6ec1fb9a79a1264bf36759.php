<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_ba3e8c204b32c92a480bf8045c994394d6afbbb275d2e19a38777e8336acca3b extends Twig_Template
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
        $__internal_3c1aff23ce689e2aaf4269e4bc040637fdfefc134d05b93c4b30409daf7d2357 = $this->env->getExtension("native_profiler");
        $__internal_3c1aff23ce689e2aaf4269e4bc040637fdfefc134d05b93c4b30409daf7d2357->enter($__internal_3c1aff23ce689e2aaf4269e4bc040637fdfefc134d05b93c4b30409daf7d2357_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_3c1aff23ce689e2aaf4269e4bc040637fdfefc134d05b93c4b30409daf7d2357->leave($__internal_3c1aff23ce689e2aaf4269e4bc040637fdfefc134d05b93c4b30409daf7d2357_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php echo $view['form']->start($form) ?>*/
/*     <?php echo $view['form']->widget($form) ?>*/
/* <?php echo $view['form']->end($form) ?>*/
/* */
