<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_7e542edc046cb2e38399e4f2017e1adfcc74cd2104e9d58278f396d7103294f7 extends Twig_Template
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
        $__internal_60233021b1473ee89ccea668247c73677f3d311415d5b2e06589dc4601ef59d8 = $this->env->getExtension("native_profiler");
        $__internal_60233021b1473ee89ccea668247c73677f3d311415d5b2e06589dc4601ef59d8->enter($__internal_60233021b1473ee89ccea668247c73677f3d311415d5b2e06589dc4601ef59d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_60233021b1473ee89ccea668247c73677f3d311415d5b2e06589dc4601ef59d8->leave($__internal_60233021b1473ee89ccea668247c73677f3d311415d5b2e06589dc4601ef59d8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php echo str_replace('{{ widget }}', $view['form']->block($form, 'form_widget_simple'), $money_pattern) ?>*/
/* */
