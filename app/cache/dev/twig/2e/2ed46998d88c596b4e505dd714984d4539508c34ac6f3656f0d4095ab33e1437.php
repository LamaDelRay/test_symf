<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_d205083710cb71c136c8141a153957586edad064a3b0c61b34af4fedc8cae0a0 extends Twig_Template
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
        $__internal_90fe9027b56d61a82ab221404d5759a9c7603408eae6be4a0ec393a3294730c3 = $this->env->getExtension("native_profiler");
        $__internal_90fe9027b56d61a82ab221404d5759a9c7603408eae6be4a0ec393a3294730c3->enter($__internal_90fe9027b56d61a82ab221404d5759a9c7603408eae6be4a0ec393a3294730c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_90fe9027b56d61a82ab221404d5759a9c7603408eae6be4a0ec393a3294730c3->leave($__internal_90fe9027b56d61a82ab221404d5759a9c7603408eae6be4a0ec393a3294730c3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child): ?>*/
/*     <?php if (!$child->isRendered()): ?>*/
/*         <?php echo $view['form']->row($child) ?>*/
/*     <?php endif; ?>*/
/* <?php endforeach; ?>*/
/* */
