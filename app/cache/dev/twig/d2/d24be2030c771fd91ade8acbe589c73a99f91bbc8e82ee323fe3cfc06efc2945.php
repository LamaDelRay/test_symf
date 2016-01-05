<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_f6c1e2d6a5339434771344c85c0818adbaa3aa8526c625e78a815a1bb5d9f1fc extends Twig_Template
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
        $__internal_2bb7eb36fa54203d871bf8873f0986a1077f2cda0b2feb8b7e144d64fd7a9cf9 = $this->env->getExtension("native_profiler");
        $__internal_2bb7eb36fa54203d871bf8873f0986a1077f2cda0b2feb8b7e144d64fd7a9cf9->enter($__internal_2bb7eb36fa54203d871bf8873f0986a1077f2cda0b2feb8b7e144d64fd7a9cf9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_2bb7eb36fa54203d871bf8873f0986a1077f2cda0b2feb8b7e144d64fd7a9cf9->leave($__internal_2bb7eb36fa54203d871bf8873f0986a1077f2cda0b2feb8b7e144d64fd7a9cf9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child) : ?>*/
/*     <?php echo $view['form']->row($child) ?>*/
/* <?php endforeach; ?>*/
/* */
