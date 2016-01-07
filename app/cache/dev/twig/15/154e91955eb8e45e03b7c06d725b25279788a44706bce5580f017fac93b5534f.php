<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_1e725e94972defa981a2c67bd9929b75d39a259242765e42249471f6bb50632c extends Twig_Template
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
        $__internal_053ab8be6be444422ac125e858a5fbb92db323911080088d2a75eae41cc21155 = $this->env->getExtension("native_profiler");
        $__internal_053ab8be6be444422ac125e858a5fbb92db323911080088d2a75eae41cc21155->enter($__internal_053ab8be6be444422ac125e858a5fbb92db323911080088d2a75eae41cc21155_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_053ab8be6be444422ac125e858a5fbb92db323911080088d2a75eae41cc21155->leave($__internal_053ab8be6be444422ac125e858a5fbb92db323911080088d2a75eae41cc21155_prof);

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
