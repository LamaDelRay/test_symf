<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_beec2df1989721d99cab6464deb02dcd1797aaa4ee9232259200d796d64aaec6 extends Twig_Template
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
        $__internal_0801c17c1b0797e971c7849c5ca0d5728d8d723c36f52f2c4a245ffbebd988dc = $this->env->getExtension("native_profiler");
        $__internal_0801c17c1b0797e971c7849c5ca0d5728d8d723c36f52f2c4a245ffbebd988dc->enter($__internal_0801c17c1b0797e971c7849c5ca0d5728d8d723c36f52f2c4a245ffbebd988dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_0801c17c1b0797e971c7849c5ca0d5728d8d723c36f52f2c4a245ffbebd988dc->leave($__internal_0801c17c1b0797e971c7849c5ca0d5728d8d723c36f52f2c4a245ffbebd988dc_prof);

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
