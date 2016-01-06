<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_f46d76ae74a56539df08ae1f840ea92858b7561162f6a1018d13a6e05c1354e1 extends Twig_Template
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
        $__internal_c14f5234e5ad1ceadb8d7d4fb529f5a831b03ac6a9daf78e0999d9380a8896ba = $this->env->getExtension("native_profiler");
        $__internal_c14f5234e5ad1ceadb8d7d4fb529f5a831b03ac6a9daf78e0999d9380a8896ba->enter($__internal_c14f5234e5ad1ceadb8d7d4fb529f5a831b03ac6a9daf78e0999d9380a8896ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_c14f5234e5ad1ceadb8d7d4fb529f5a831b03ac6a9daf78e0999d9380a8896ba->leave($__internal_c14f5234e5ad1ceadb8d7d4fb529f5a831b03ac6a9daf78e0999d9380a8896ba_prof);

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
