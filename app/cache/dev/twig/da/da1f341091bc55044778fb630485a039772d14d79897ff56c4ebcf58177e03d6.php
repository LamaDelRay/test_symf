<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_ba9d499749cb58dd3224ede9eb311fa0081c6ac6bfeb1731558f5e9eacb97702 extends Twig_Template
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
        $__internal_d1d9bbb9cfd72bd4c6d27d8ef2f1a4e571ee9d00a381d6b467fff86fd5d17c64 = $this->env->getExtension("native_profiler");
        $__internal_d1d9bbb9cfd72bd4c6d27d8ef2f1a4e571ee9d00a381d6b467fff86fd5d17c64->enter($__internal_d1d9bbb9cfd72bd4c6d27d8ef2f1a4e571ee9d00a381d6b467fff86fd5d17c64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_d1d9bbb9cfd72bd4c6d27d8ef2f1a4e571ee9d00a381d6b467fff86fd5d17c64->leave($__internal_d1d9bbb9cfd72bd4c6d27d8ef2f1a4e571ee9d00a381d6b467fff86fd5d17c64_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="checkbox"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     <?php if (strlen($value) > 0): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?>*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
