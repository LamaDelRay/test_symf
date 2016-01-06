<?php

/* ::base.html.twig */
class __TwigTemplate_c3866ac7688085d2c6b392f3fd31fbbded4d7352c00544a93b65fe7f90cb4775 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_685bd40b5021dfea6c94aebe76cc35a6035de4e076dcdc0add290318ffdde294 = $this->env->getExtension("native_profiler");
        $__internal_685bd40b5021dfea6c94aebe76cc35a6035de4e076dcdc0add290318ffdde294->enter($__internal_685bd40b5021dfea6c94aebe76cc35a6035de4e076dcdc0add290318ffdde294_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_685bd40b5021dfea6c94aebe76cc35a6035de4e076dcdc0add290318ffdde294->leave($__internal_685bd40b5021dfea6c94aebe76cc35a6035de4e076dcdc0add290318ffdde294_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_7831020c6584983fe956ed5e1db8662d1e04054eb7edb74d0e0d23baba4e6e76 = $this->env->getExtension("native_profiler");
        $__internal_7831020c6584983fe956ed5e1db8662d1e04054eb7edb74d0e0d23baba4e6e76->enter($__internal_7831020c6584983fe956ed5e1db8662d1e04054eb7edb74d0e0d23baba4e6e76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_7831020c6584983fe956ed5e1db8662d1e04054eb7edb74d0e0d23baba4e6e76->leave($__internal_7831020c6584983fe956ed5e1db8662d1e04054eb7edb74d0e0d23baba4e6e76_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_462aa1e3dac3ef97e7b0b3be2c29b248889aaa1a1b97388a52141f8d34836129 = $this->env->getExtension("native_profiler");
        $__internal_462aa1e3dac3ef97e7b0b3be2c29b248889aaa1a1b97388a52141f8d34836129->enter($__internal_462aa1e3dac3ef97e7b0b3be2c29b248889aaa1a1b97388a52141f8d34836129_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_462aa1e3dac3ef97e7b0b3be2c29b248889aaa1a1b97388a52141f8d34836129->leave($__internal_462aa1e3dac3ef97e7b0b3be2c29b248889aaa1a1b97388a52141f8d34836129_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_71865225e7110ed9635e2c8875267a7ff02f8df27a7336c494a499e0e11200a1 = $this->env->getExtension("native_profiler");
        $__internal_71865225e7110ed9635e2c8875267a7ff02f8df27a7336c494a499e0e11200a1->enter($__internal_71865225e7110ed9635e2c8875267a7ff02f8df27a7336c494a499e0e11200a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_71865225e7110ed9635e2c8875267a7ff02f8df27a7336c494a499e0e11200a1->leave($__internal_71865225e7110ed9635e2c8875267a7ff02f8df27a7336c494a499e0e11200a1_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_650478cfb7a87b7685088f66747c2d8cdc26ec536c64c53ede024276ee1b1288 = $this->env->getExtension("native_profiler");
        $__internal_650478cfb7a87b7685088f66747c2d8cdc26ec536c64c53ede024276ee1b1288->enter($__internal_650478cfb7a87b7685088f66747c2d8cdc26ec536c64c53ede024276ee1b1288_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_650478cfb7a87b7685088f66747c2d8cdc26ec536c64c53ede024276ee1b1288->leave($__internal_650478cfb7a87b7685088f66747c2d8cdc26ec536c64c53ede024276ee1b1288_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
