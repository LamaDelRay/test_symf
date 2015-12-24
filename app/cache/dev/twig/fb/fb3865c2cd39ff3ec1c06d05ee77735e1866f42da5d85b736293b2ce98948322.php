<?php

/* base.html.twig */
class __TwigTemplate_8209542ad53a38eb436af85b26dc7ad035dd08b282e7cc2a15cc48dd93a0195b extends Twig_Template
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
        $__internal_82ff65dd04c83795956c9609ee7c0fee8100d7c8ad3c0da45e0f9d58a296ecdc = $this->env->getExtension("native_profiler");
        $__internal_82ff65dd04c83795956c9609ee7c0fee8100d7c8ad3c0da45e0f9d58a296ecdc->enter($__internal_82ff65dd04c83795956c9609ee7c0fee8100d7c8ad3c0da45e0f9d58a296ecdc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_82ff65dd04c83795956c9609ee7c0fee8100d7c8ad3c0da45e0f9d58a296ecdc->leave($__internal_82ff65dd04c83795956c9609ee7c0fee8100d7c8ad3c0da45e0f9d58a296ecdc_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_3d1b4523f3791fa037c098d49d5e2e0783bd5ca0bf7d6c58c4f26dc65d682800 = $this->env->getExtension("native_profiler");
        $__internal_3d1b4523f3791fa037c098d49d5e2e0783bd5ca0bf7d6c58c4f26dc65d682800->enter($__internal_3d1b4523f3791fa037c098d49d5e2e0783bd5ca0bf7d6c58c4f26dc65d682800_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_3d1b4523f3791fa037c098d49d5e2e0783bd5ca0bf7d6c58c4f26dc65d682800->leave($__internal_3d1b4523f3791fa037c098d49d5e2e0783bd5ca0bf7d6c58c4f26dc65d682800_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_9ce17daead710eb32831b8edc5ce53d5cdb6cd4bd42acdfcef120b1ef92f6fda = $this->env->getExtension("native_profiler");
        $__internal_9ce17daead710eb32831b8edc5ce53d5cdb6cd4bd42acdfcef120b1ef92f6fda->enter($__internal_9ce17daead710eb32831b8edc5ce53d5cdb6cd4bd42acdfcef120b1ef92f6fda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_9ce17daead710eb32831b8edc5ce53d5cdb6cd4bd42acdfcef120b1ef92f6fda->leave($__internal_9ce17daead710eb32831b8edc5ce53d5cdb6cd4bd42acdfcef120b1ef92f6fda_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_82d65a999e4d6eb6c0df9976733785201ca98ada42ac64903a94467984b8aa58 = $this->env->getExtension("native_profiler");
        $__internal_82d65a999e4d6eb6c0df9976733785201ca98ada42ac64903a94467984b8aa58->enter($__internal_82d65a999e4d6eb6c0df9976733785201ca98ada42ac64903a94467984b8aa58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_82d65a999e4d6eb6c0df9976733785201ca98ada42ac64903a94467984b8aa58->leave($__internal_82d65a999e4d6eb6c0df9976733785201ca98ada42ac64903a94467984b8aa58_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_0af3feb21191b438b07d28162fcfb76b36ccdd501e4ec93252f182c26550a46c = $this->env->getExtension("native_profiler");
        $__internal_0af3feb21191b438b07d28162fcfb76b36ccdd501e4ec93252f182c26550a46c->enter($__internal_0af3feb21191b438b07d28162fcfb76b36ccdd501e4ec93252f182c26550a46c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_0af3feb21191b438b07d28162fcfb76b36ccdd501e4ec93252f182c26550a46c->leave($__internal_0af3feb21191b438b07d28162fcfb76b36ccdd501e4ec93252f182c26550a46c_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
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
