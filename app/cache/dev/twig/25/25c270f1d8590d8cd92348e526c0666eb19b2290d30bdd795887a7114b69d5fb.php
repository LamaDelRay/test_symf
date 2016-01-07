<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_5b25ef646ae1a32bffedc568168b097b22520a9782d252655dc46fd7cc4efbba extends Twig_Template
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
        $__internal_f2c31eea638bf7ec76d8db0afcaee3415e9c1759bf7b20d83b09e0548aaa979b = $this->env->getExtension("native_profiler");
        $__internal_f2c31eea638bf7ec76d8db0afcaee3415e9c1759bf7b20d83b09e0548aaa979b->enter($__internal_f2c31eea638bf7ec76d8db0afcaee3415e9c1759bf7b20d83b09e0548aaa979b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_f2c31eea638bf7ec76d8db0afcaee3415e9c1759bf7b20d83b09e0548aaa979b->leave($__internal_f2c31eea638bf7ec76d8db0afcaee3415e9c1759bf7b20d83b09e0548aaa979b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (isset($prototype)): ?>*/
/*     <?php $attr['data-prototype'] = $view->escape($view['form']->row($prototype)) ?>*/
/* <?php endif ?>*/
/* <?php echo $view['form']->widget($form, array('attr' => $attr)) ?>*/
/* */
