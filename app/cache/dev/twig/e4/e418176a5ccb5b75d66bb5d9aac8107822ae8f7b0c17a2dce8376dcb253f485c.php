<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_929a9ab1cef91b01ddb6af5a0356c91992821c056adeb2839b45b1ce3f4d5fb7 extends Twig_Template
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
        $__internal_d6964231ae0e8501278184ce418585034979493d4d144e0af6835eaed7fac94a = $this->env->getExtension("native_profiler");
        $__internal_d6964231ae0e8501278184ce418585034979493d4d144e0af6835eaed7fac94a->enter($__internal_d6964231ae0e8501278184ce418585034979493d4d144e0af6835eaed7fac94a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_d6964231ae0e8501278184ce418585034979493d4d144e0af6835eaed7fac94a->leave($__internal_d6964231ae0e8501278184ce418585034979493d4d144e0af6835eaed7fac94a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (count($errors) > 0): ?>*/
/*     <ul>*/
/*         <?php foreach ($errors as $error): ?>*/
/*             <li><?php echo $error->getMessage() ?></li>*/
/*         <?php endforeach; ?>*/
/*     </ul>*/
/* <?php endif ?>*/
/* */
