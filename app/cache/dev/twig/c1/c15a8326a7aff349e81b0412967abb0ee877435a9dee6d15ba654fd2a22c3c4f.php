<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_fe446f0b93b0e3a29246a6a6421a9808065fb5b787ddde2052fa809c4aebb5f1 extends Twig_Template
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
        $__internal_245ddef9e352307e5152def7e3a15adda5a5cc580950138eacf4367f47fb7b08 = $this->env->getExtension("native_profiler");
        $__internal_245ddef9e352307e5152def7e3a15adda5a5cc580950138eacf4367f47fb7b08->enter($__internal_245ddef9e352307e5152def7e3a15adda5a5cc580950138eacf4367f47fb7b08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_245ddef9e352307e5152def7e3a15adda5a5cc580950138eacf4367f47fb7b08->leave($__internal_245ddef9e352307e5152def7e3a15adda5a5cc580950138eacf4367f47fb7b08_prof);

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
