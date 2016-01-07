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
        $__internal_f8ddd5185f1232cd5ba2f66c4e00fb82ecebceb5ed75428548b9770c1f04500b = $this->env->getExtension("native_profiler");
        $__internal_f8ddd5185f1232cd5ba2f66c4e00fb82ecebceb5ed75428548b9770c1f04500b->enter($__internal_f8ddd5185f1232cd5ba2f66c4e00fb82ecebceb5ed75428548b9770c1f04500b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_f8ddd5185f1232cd5ba2f66c4e00fb82ecebceb5ed75428548b9770c1f04500b->leave($__internal_f8ddd5185f1232cd5ba2f66c4e00fb82ecebceb5ed75428548b9770c1f04500b_prof);

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
