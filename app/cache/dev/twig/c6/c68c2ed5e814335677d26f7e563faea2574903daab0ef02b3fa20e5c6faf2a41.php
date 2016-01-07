<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_57c56c8412ab7e9fc88e6c2ddba1d0b3d4387718dcb50b8ec801c764d02aa62b extends Twig_Template
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
        $__internal_2a1a6f67d0f7f718a87c76ace4b4917db93895f19912a9425896a9639bcf868c = $this->env->getExtension("native_profiler");
        $__internal_2a1a6f67d0f7f718a87c76ace4b4917db93895f19912a9425896a9639bcf868c->enter($__internal_2a1a6f67d0f7f718a87c76ace4b4917db93895f19912a9425896a9639bcf868c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_2a1a6f67d0f7f718a87c76ace4b4917db93895f19912a9425896a9639bcf868c->leave($__internal_2a1a6f67d0f7f718a87c76ace4b4917db93895f19912a9425896a9639bcf868c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child) : ?>*/
/*     <?php echo $view['form']->row($child) ?>*/
/* <?php endforeach; ?>*/
/* */
