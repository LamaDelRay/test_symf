<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_8580e4aede021c72d1d7e895fd82914d119561384f40449991755acea0ec713f extends Twig_Template
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
        $__internal_5e6e6f36016e130a3f4afb701f908d6abce51c43f53206c6adc179402a731090 = $this->env->getExtension("native_profiler");
        $__internal_5e6e6f36016e130a3f4afb701f908d6abce51c43f53206c6adc179402a731090->enter($__internal_5e6e6f36016e130a3f4afb701f908d6abce51c43f53206c6adc179402a731090_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_5e6e6f36016e130a3f4afb701f908d6abce51c43f53206c6adc179402a731090->leave($__internal_5e6e6f36016e130a3f4afb701f908d6abce51c43f53206c6adc179402a731090_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($expanded): ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_expanded') ?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_collapsed') ?>*/
/* <?php endif ?>*/
/* */
