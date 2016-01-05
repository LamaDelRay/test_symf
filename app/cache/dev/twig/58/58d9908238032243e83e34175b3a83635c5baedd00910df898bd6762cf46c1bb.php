<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_0706d8b0c7d1b7b41791a31e38738055a3f7f2baa90a121566be271cd80f4406 extends Twig_Template
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
        $__internal_6877720c9101db2cf6d481291fcbfc4e867fd39b84405b09849207b7ffed303f = $this->env->getExtension("native_profiler");
        $__internal_6877720c9101db2cf6d481291fcbfc4e867fd39b84405b09849207b7ffed303f->enter($__internal_6877720c9101db2cf6d481291fcbfc4e867fd39b84405b09849207b7ffed303f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_6877720c9101db2cf6d481291fcbfc4e867fd39b84405b09849207b7ffed303f->leave($__internal_6877720c9101db2cf6d481291fcbfc4e867fd39b84405b09849207b7ffed303f_prof);

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
