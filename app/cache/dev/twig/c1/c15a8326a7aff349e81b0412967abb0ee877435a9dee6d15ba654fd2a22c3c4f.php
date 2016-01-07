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
        $__internal_9364938f4a44dfc6ce3a19ca1e4f82966bbfb0606c044951e1af6d4ee61cef37 = $this->env->getExtension("native_profiler");
        $__internal_9364938f4a44dfc6ce3a19ca1e4f82966bbfb0606c044951e1af6d4ee61cef37->enter($__internal_9364938f4a44dfc6ce3a19ca1e4f82966bbfb0606c044951e1af6d4ee61cef37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_9364938f4a44dfc6ce3a19ca1e4f82966bbfb0606c044951e1af6d4ee61cef37->leave($__internal_9364938f4a44dfc6ce3a19ca1e4f82966bbfb0606c044951e1af6d4ee61cef37_prof);

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
