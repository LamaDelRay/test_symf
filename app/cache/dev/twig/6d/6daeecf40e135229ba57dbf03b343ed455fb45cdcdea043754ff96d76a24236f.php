<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_451a79e79777a803cbf7b64ea2511fb011fc310baf4998f14dc4b6fd5458f8bc extends Twig_Template
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
        $__internal_a77d210a6492f0e557144892a7a63c5d1ba4007565ecf28f89e727bd5ec4a53b = $this->env->getExtension("native_profiler");
        $__internal_a77d210a6492f0e557144892a7a63c5d1ba4007565ecf28f89e727bd5ec4a53b->enter($__internal_a77d210a6492f0e557144892a7a63c5d1ba4007565ecf28f89e727bd5ec4a53b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_a77d210a6492f0e557144892a7a63c5d1ba4007565ecf28f89e727bd5ec4a53b->leave($__internal_a77d210a6492f0e557144892a7a63c5d1ba4007565ecf28f89e727bd5ec4a53b_prof);

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
