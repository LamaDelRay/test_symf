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
        $__internal_49b0b98a46bee10abc48185ebe63f5ed492baeb6bd21fbec1960f7e2d603de4e = $this->env->getExtension("native_profiler");
        $__internal_49b0b98a46bee10abc48185ebe63f5ed492baeb6bd21fbec1960f7e2d603de4e->enter($__internal_49b0b98a46bee10abc48185ebe63f5ed492baeb6bd21fbec1960f7e2d603de4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_49b0b98a46bee10abc48185ebe63f5ed492baeb6bd21fbec1960f7e2d603de4e->leave($__internal_49b0b98a46bee10abc48185ebe63f5ed492baeb6bd21fbec1960f7e2d603de4e_prof);

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
