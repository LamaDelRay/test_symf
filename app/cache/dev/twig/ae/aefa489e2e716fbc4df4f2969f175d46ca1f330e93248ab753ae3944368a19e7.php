<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_0de96001d981e519b2a3fbea1ed83b0a084027a26c6dd8ec0cc708b934e13d36 extends Twig_Template
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
        $__internal_c3b65be59f14096486a73d900880bfd6b176f46f7f884411e0fa8eeda5ab5a64 = $this->env->getExtension("native_profiler");
        $__internal_c3b65be59f14096486a73d900880bfd6b176f46f7f884411e0fa8eeda5ab5a64->enter($__internal_c3b65be59f14096486a73d900880bfd6b176f46f7f884411e0fa8eeda5ab5a64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_c3b65be59f14096486a73d900880bfd6b176f46f7f884411e0fa8eeda5ab5a64->leave($__internal_c3b65be59f14096486a73d900880bfd6b176f46f7f884411e0fa8eeda5ab5a64_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!isset($render_rest) || $render_rest): ?>*/
/* <?php echo $view['form']->rest($form) ?>*/
/* <?php endif ?>*/
/* </form>*/
/* */
