<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_cd5dda6ff16a28342a142a26069b4c2cb6ee143fdf6128e391aadbeeb0832cfe extends Twig_Template
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
        $__internal_17eb254a971e6fea6b27a8aa1da8b8faef3e173a147a336a223559549d5177dc = $this->env->getExtension("native_profiler");
        $__internal_17eb254a971e6fea6b27a8aa1da8b8faef3e173a147a336a223559549d5177dc->enter($__internal_17eb254a971e6fea6b27a8aa1da8b8faef3e173a147a336a223559549d5177dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_17eb254a971e6fea6b27a8aa1da8b8faef3e173a147a336a223559549d5177dc->leave($__internal_17eb254a971e6fea6b27a8aa1da8b8faef3e173a147a336a223559549d5177dc_prof);

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
