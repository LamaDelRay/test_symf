<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_216f440484de7ef290c2578b8ec80117d96b612bc5feb401487f458395818600 extends Twig_Template
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
        $__internal_cc5e2e88c6bb87f83ceb866c3bf355980a4d49170006ffa42483eb00121f4908 = $this->env->getExtension("native_profiler");
        $__internal_cc5e2e88c6bb87f83ceb866c3bf355980a4d49170006ffa42483eb00121f4908->enter($__internal_cc5e2e88c6bb87f83ceb866c3bf355980a4d49170006ffa42483eb00121f4908_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_cc5e2e88c6bb87f83ceb866c3bf355980a4d49170006ffa42483eb00121f4908->leave($__internal_cc5e2e88c6bb87f83ceb866c3bf355980a4d49170006ffa42483eb00121f4908_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/* <?php foreach ($form as $child): ?>*/
/*     <?php echo $view['form']->widget($child) ?>*/
/*     <?php echo $view['form']->label($child, null, array('translation_domain' => $choice_translation_domain)) ?>*/
/* <?php endforeach ?>*/
/* </div>*/
/* */
