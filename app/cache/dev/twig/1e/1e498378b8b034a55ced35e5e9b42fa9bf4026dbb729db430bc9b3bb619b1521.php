<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_c7953fdbf14378c207015e79489f7f4e34457bea8f1546a2b4ec22fba4e05b0e extends Twig_Template
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
        $__internal_6b1843586a0958b7845cdb23002e872b31b90c3f207274104160614de2cea6fc = $this->env->getExtension("native_profiler");
        $__internal_6b1843586a0958b7845cdb23002e872b31b90c3f207274104160614de2cea6fc->enter($__internal_6b1843586a0958b7845cdb23002e872b31b90c3f207274104160614de2cea6fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_6b1843586a0958b7845cdb23002e872b31b90c3f207274104160614de2cea6fc->leave($__internal_6b1843586a0958b7845cdb23002e872b31b90c3f207274104160614de2cea6fc_prof);

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
