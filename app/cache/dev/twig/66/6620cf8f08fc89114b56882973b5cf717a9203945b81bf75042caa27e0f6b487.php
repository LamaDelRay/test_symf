<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_514952bbd4b4945206c2d26d0a9dd0fd92defb6c3f3405314473cb5cf7e924dc extends Twig_Template
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
        $__internal_36dc5c4d5c41b4f33ba0f7c00eae2b7ceb8cf4505599f437bc8b15638d1dd739 = $this->env->getExtension("native_profiler");
        $__internal_36dc5c4d5c41b4f33ba0f7c00eae2b7ceb8cf4505599f437bc8b15638d1dd739->enter($__internal_36dc5c4d5c41b4f33ba0f7c00eae2b7ceb8cf4505599f437bc8b15638d1dd739_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_36dc5c4d5c41b4f33ba0f7c00eae2b7ceb8cf4505599f437bc8b15638d1dd739->leave($__internal_36dc5c4d5c41b4f33ba0f7c00eae2b7ceb8cf4505599f437bc8b15638d1dd739_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/* <?php foreach ($form as $child): ?>*/
/*     <?php echo $view['form']->widget($child) ?>*/
/*     <?php echo $view['form']->label($child, null, array('translation_domain' => $choice_translation_domain)) ?>*/
/* <?php endforeach ?>*/
/* </div>*/
/* */
