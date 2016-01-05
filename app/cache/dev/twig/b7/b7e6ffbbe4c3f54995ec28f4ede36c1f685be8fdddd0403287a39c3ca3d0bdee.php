<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_e6f57f190b28dabc4588f792b13742c0b03c93edea0a06c68c161177bf825af5 extends Twig_Template
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
        $__internal_2021b8f6b0537ca145d132aec4045f24117a60cf3388a61b7e643e41963f8999 = $this->env->getExtension("native_profiler");
        $__internal_2021b8f6b0537ca145d132aec4045f24117a60cf3388a61b7e643e41963f8999->enter($__internal_2021b8f6b0537ca145d132aec4045f24117a60cf3388a61b7e643e41963f8999_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_2021b8f6b0537ca145d132aec4045f24117a60cf3388a61b7e643e41963f8999->leave($__internal_2021b8f6b0537ca145d132aec4045f24117a60cf3388a61b7e643e41963f8999_prof);

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
