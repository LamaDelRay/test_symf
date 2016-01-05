<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_f9eccb3d111e55aa5c26094ba51b74af7e15e51e56f625a48803eab83e4466e7 extends Twig_Template
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
        $__internal_3e6598c173cf498ae28c6aec576f9c3bcdc8700da41e29bffca58cc3414a8d80 = $this->env->getExtension("native_profiler");
        $__internal_3e6598c173cf498ae28c6aec576f9c3bcdc8700da41e29bffca58cc3414a8d80->enter($__internal_3e6598c173cf498ae28c6aec576f9c3bcdc8700da41e29bffca58cc3414a8d80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_3e6598c173cf498ae28c6aec576f9c3bcdc8700da41e29bffca58cc3414a8d80->leave($__internal_3e6598c173cf498ae28c6aec576f9c3bcdc8700da41e29bffca58cc3414a8d80_prof);

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
