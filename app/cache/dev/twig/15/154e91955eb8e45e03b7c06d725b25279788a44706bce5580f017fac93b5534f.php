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
        $__internal_e4cd44e7d21099fb7015e9cdd02c40ddf9ea1192eb242b983754bf693995d227 = $this->env->getExtension("native_profiler");
        $__internal_e4cd44e7d21099fb7015e9cdd02c40ddf9ea1192eb242b983754bf693995d227->enter($__internal_e4cd44e7d21099fb7015e9cdd02c40ddf9ea1192eb242b983754bf693995d227_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_e4cd44e7d21099fb7015e9cdd02c40ddf9ea1192eb242b983754bf693995d227->leave($__internal_e4cd44e7d21099fb7015e9cdd02c40ddf9ea1192eb242b983754bf693995d227_prof);

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
