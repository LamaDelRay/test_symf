<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_96c1918479f7d455a0c7aedcf370565328d0706b2e7cbe361e5abc7ddade4045 extends Twig_Template
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
        $__internal_0469cb29cc82e17df4390af9b0b44f91016a5cc1ff54f8981d253bf0a0040046 = $this->env->getExtension("native_profiler");
        $__internal_0469cb29cc82e17df4390af9b0b44f91016a5cc1ff54f8981d253bf0a0040046->enter($__internal_0469cb29cc82e17df4390af9b0b44f91016a5cc1ff54f8981d253bf0a0040046_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_0469cb29cc82e17df4390af9b0b44f91016a5cc1ff54f8981d253bf0a0040046->leave($__internal_0469cb29cc82e17df4390af9b0b44f91016a5cc1ff54f8981d253bf0a0040046_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <textarea <?php echo $view['form']->block($form, 'widget_attributes') ?>><?php echo $view->escape($value) ?></textarea>*/
/* */
