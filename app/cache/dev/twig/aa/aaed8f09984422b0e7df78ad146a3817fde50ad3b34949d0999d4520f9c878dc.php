<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_5bdee4802ed0938b0cbed73d257cf66232892a42c0576d40992c14f4c0c9c93d extends Twig_Template
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
        $__internal_d0c7931cdf3cf80ab0e71948d13f220362117afa02e4dcf532cf8a4b3e49bccf = $this->env->getExtension("native_profiler");
        $__internal_d0c7931cdf3cf80ab0e71948d13f220362117afa02e4dcf532cf8a4b3e49bccf->enter($__internal_d0c7931cdf3cf80ab0e71948d13f220362117afa02e4dcf532cf8a4b3e49bccf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_d0c7931cdf3cf80ab0e71948d13f220362117afa02e4dcf532cf8a4b3e49bccf->leave($__internal_d0c7931cdf3cf80ab0e71948d13f220362117afa02e4dcf532cf8a4b3e49bccf_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php echo $view['form']->start($form) ?>*/
/*     <?php echo $view['form']->widget($form) ?>*/
/* <?php echo $view['form']->end($form) ?>*/
/* */
