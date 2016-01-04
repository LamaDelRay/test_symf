<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_4a5f478aee273b2490cebbcf1513d3a13ce76cb017d3803fb8b64091592bb53f extends Twig_Template
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
        $__internal_837840c215bb8ac4543519b9899015d6831d332ac5761fce5ecfe138eee23b37 = $this->env->getExtension("native_profiler");
        $__internal_837840c215bb8ac4543519b9899015d6831d332ac5761fce5ecfe138eee23b37->enter($__internal_837840c215bb8ac4543519b9899015d6831d332ac5761fce5ecfe138eee23b37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_837840c215bb8ac4543519b9899015d6831d332ac5761fce5ecfe138eee23b37->leave($__internal_837840c215bb8ac4543519b9899015d6831d332ac5761fce5ecfe138eee23b37_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="radio"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     value="<?php echo $view->escape($value) ?>"*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
