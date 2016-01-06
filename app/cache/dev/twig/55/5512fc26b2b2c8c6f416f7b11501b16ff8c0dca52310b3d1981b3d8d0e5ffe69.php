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
        $__internal_73873bf6e0777c633db8ea05d6483dce7b2dd5bfafac4ad5066d5ada93dfb86f = $this->env->getExtension("native_profiler");
        $__internal_73873bf6e0777c633db8ea05d6483dce7b2dd5bfafac4ad5066d5ada93dfb86f->enter($__internal_73873bf6e0777c633db8ea05d6483dce7b2dd5bfafac4ad5066d5ada93dfb86f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_73873bf6e0777c633db8ea05d6483dce7b2dd5bfafac4ad5066d5ada93dfb86f->leave($__internal_73873bf6e0777c633db8ea05d6483dce7b2dd5bfafac4ad5066d5ada93dfb86f_prof);

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
