<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_02ed6a5bdd966b42abcd3bc4d82729e58be7824b25abfd5cb1b5c96e48d6e144 extends Twig_Template
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
        $__internal_3c20e9f5e102174367517a9db10b02d2bdfb0e7607ae02fc00be16f0618c4ace = $this->env->getExtension("native_profiler");
        $__internal_3c20e9f5e102174367517a9db10b02d2bdfb0e7607ae02fc00be16f0618c4ace->enter($__internal_3c20e9f5e102174367517a9db10b02d2bdfb0e7607ae02fc00be16f0618c4ace_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_3c20e9f5e102174367517a9db10b02d2bdfb0e7607ae02fc00be16f0618c4ace->leave($__internal_3c20e9f5e102174367517a9db10b02d2bdfb0e7607ae02fc00be16f0618c4ace_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!$label) { $label = isset($label_format)*/
/*     ? strtr($label_format, array('%name%' => $name, '%id%' => $id))*/
/*     : $view['form']->humanize($name); } ?>*/
/* <button type="<?php echo isset($type) ? $view->escape($type) : 'button' ?>" <?php echo $view['form']->block($form, 'button_attributes') ?>><?php echo $view->escape(false !== $translation_domain ? $view['translator']->trans($label, array(), $translation_domain) : $label) ?></button>*/
/* */
