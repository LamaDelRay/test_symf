<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_5cfe3e0559ab98200ce2cd6c030ff8784ab3122ae55e9256a6ef969a12c0bf5e extends Twig_Template
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
        $__internal_d9629e843027ad397519de33252ec5c1ea118ecad8d2f5098628af3b4e57671c = $this->env->getExtension("native_profiler");
        $__internal_d9629e843027ad397519de33252ec5c1ea118ecad8d2f5098628af3b4e57671c->enter($__internal_d9629e843027ad397519de33252ec5c1ea118ecad8d2f5098628af3b4e57671c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_d9629e843027ad397519de33252ec5c1ea118ecad8d2f5098628af3b4e57671c->leave($__internal_d9629e843027ad397519de33252ec5c1ea118ecad8d2f5098628af3b4e57671c_prof);

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
