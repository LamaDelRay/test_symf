<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_7817eb57e21786254237af41d184b0dac2f404eb167ec42ba6a4d2a729d666c7 extends Twig_Template
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
        $__internal_bc34947d7a1947f97a717b3eb318169a8d448df865ef8f78983f909e1b511e0a = $this->env->getExtension("native_profiler");
        $__internal_bc34947d7a1947f97a717b3eb318169a8d448df865ef8f78983f909e1b511e0a->enter($__internal_bc34947d7a1947f97a717b3eb318169a8d448df865ef8f78983f909e1b511e0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_bc34947d7a1947f97a717b3eb318169a8d448df865ef8f78983f909e1b511e0a->leave($__internal_bc34947d7a1947f97a717b3eb318169a8d448df865ef8f78983f909e1b511e0a_prof);

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
