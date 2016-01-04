<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_ef8466be89f49f76f216a0de422a4cc0a4e73d12df35cc657ec9209545964739 extends Twig_Template
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
        $__internal_b4c11d33afe27e5b128169d0f26838bfd562fa4ee26b2fe7888dd0441d51aee1 = $this->env->getExtension("native_profiler");
        $__internal_b4c11d33afe27e5b128169d0f26838bfd562fa4ee26b2fe7888dd0441d51aee1->enter($__internal_b4c11d33afe27e5b128169d0f26838bfd562fa4ee26b2fe7888dd0441d51aee1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_b4c11d33afe27e5b128169d0f26838bfd562fa4ee26b2fe7888dd0441d51aee1->leave($__internal_b4c11d33afe27e5b128169d0f26838bfd562fa4ee26b2fe7888dd0441d51aee1_prof);

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
