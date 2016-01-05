<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_c9f0d2077616476a0b31d45130d09bca39d3966d1c58cf7f3af26433e74c842c extends Twig_Template
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
        $__internal_ea13b668cb06fb9926f9cea2b18ecfc320d145faf68a8121cab14e24049adb60 = $this->env->getExtension("native_profiler");
        $__internal_ea13b668cb06fb9926f9cea2b18ecfc320d145faf68a8121cab14e24049adb60->enter($__internal_ea13b668cb06fb9926f9cea2b18ecfc320d145faf68a8121cab14e24049adb60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_ea13b668cb06fb9926f9cea2b18ecfc320d145faf68a8121cab14e24049adb60->leave($__internal_ea13b668cb06fb9926f9cea2b18ecfc320d145faf68a8121cab14e24049adb60_prof);

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
