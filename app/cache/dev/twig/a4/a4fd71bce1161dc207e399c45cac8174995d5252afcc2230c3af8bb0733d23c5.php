<?php

/* @Framework/Form/choice_widget_options.html.php */
class __TwigTemplate_2a91ff1b4906dcaf36d70946c8d73ae2023d6ecb597db0216eb1c9eff132ba9c extends Twig_Template
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
        $__internal_d58ff3f9684ec12895ece25ab3a05a0a9da4e17d4d55f2b83c4d71b4b7f19def = $this->env->getExtension("native_profiler");
        $__internal_d58ff3f9684ec12895ece25ab3a05a0a9da4e17d4d55f2b83c4d71b4b7f19def->enter($__internal_d58ff3f9684ec12895ece25ab3a05a0a9da4e17d4d55f2b83c4d71b4b7f19def_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_options.html.php"));

        // line 1
        echo "<?php use Symfony\\Component\\Form\\ChoiceList\\View\\ChoiceGroupView;

\$translatorHelper = \$view['translator']; // outside of the loop for performance reasons! ?>
<?php \$formHelper = \$view['form']; ?>
<?php foreach (\$choices as \$group_label => \$choice): ?>
    <?php if (is_array(\$choice) || \$choice instanceof ChoiceGroupView): ?>
        <optgroup label=\"<?php echo \$view->escape(false !== \$choice_translation_domain ? \$translatorHelper->trans(\$group_label, array(), \$choice_translation_domain) : \$group_label) ?>\">
            <?php echo \$formHelper->block(\$form, 'choice_widget_options', array('choices' => \$choice)) ?>
        </optgroup>
    <?php else: ?>
        <option value=\"<?php echo \$view->escape(\$choice->value) ?>\" <?php echo \$view['form']->block(\$form, 'attributes', array('attr' => \$choice->attr)) ?><?php if (\$is_selected(\$choice->value, \$value)): ?> selected=\"selected\"<?php endif?>><?php echo \$view->escape(false !== \$choice_translation_domain ? \$translatorHelper->trans(\$choice->label, array(), \$choice_translation_domain) : \$choice->label) ?></option>
    <?php endif ?>
<?php endforeach ?>
";
        
        $__internal_d58ff3f9684ec12895ece25ab3a05a0a9da4e17d4d55f2b83c4d71b4b7f19def->leave($__internal_d58ff3f9684ec12895ece25ab3a05a0a9da4e17d4d55f2b83c4d71b4b7f19def_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_options.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php use Symfony\Component\Form\ChoiceList\View\ChoiceGroupView;*/
/* */
/* $translatorHelper = $view['translator']; // outside of the loop for performance reasons! ?>*/
/* <?php $formHelper = $view['form']; ?>*/
/* <?php foreach ($choices as $group_label => $choice): ?>*/
/*     <?php if (is_array($choice) || $choice instanceof ChoiceGroupView): ?>*/
/*         <optgroup label="<?php echo $view->escape(false !== $choice_translation_domain ? $translatorHelper->trans($group_label, array(), $choice_translation_domain) : $group_label) ?>">*/
/*             <?php echo $formHelper->block($form, 'choice_widget_options', array('choices' => $choice)) ?>*/
/*         </optgroup>*/
/*     <?php else: ?>*/
/*         <option value="<?php echo $view->escape($choice->value) ?>" <?php echo $view['form']->block($form, 'attributes', array('attr' => $choice->attr)) ?><?php if ($is_selected($choice->value, $value)): ?> selected="selected"<?php endif?>><?php echo $view->escape(false !== $choice_translation_domain ? $translatorHelper->trans($choice->label, array(), $choice_translation_domain) : $choice->label) ?></option>*/
/*     <?php endif ?>*/
/* <?php endforeach ?>*/
/* */
