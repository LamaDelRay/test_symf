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
        $__internal_0580159dbd39020de2e28b84d0c3ec75ac670e4bfdd65764b2a9080cbc7957c2 = $this->env->getExtension("native_profiler");
        $__internal_0580159dbd39020de2e28b84d0c3ec75ac670e4bfdd65764b2a9080cbc7957c2->enter($__internal_0580159dbd39020de2e28b84d0c3ec75ac670e4bfdd65764b2a9080cbc7957c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_0580159dbd39020de2e28b84d0c3ec75ac670e4bfdd65764b2a9080cbc7957c2->leave($__internal_0580159dbd39020de2e28b84d0c3ec75ac670e4bfdd65764b2a9080cbc7957c2_prof);

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
