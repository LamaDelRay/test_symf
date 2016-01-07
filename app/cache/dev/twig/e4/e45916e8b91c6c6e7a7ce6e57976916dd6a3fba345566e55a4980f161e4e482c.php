<?php

/* SonataUserBundle::layout.html.twig */
class __TwigTemplate_a00cfeab793a58303af590262fb803b245041bd81e6cd01f8edb3bddbb00d766 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_42368899e991c5a8c9dd9a586c673c4396686b15800dae06f17a14d1c3c972f4 = $this->env->getExtension("native_profiler");
        $__internal_42368899e991c5a8c9dd9a586c673c4396686b15800dae06f17a14d1c3c972f4->enter($__internal_42368899e991c5a8c9dd9a586c673c4396686b15800dae06f17a14d1c3c972f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataUserBundle::layout.html.twig"));

        // line 1
        echo "<div>
    ";
        // line 2
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 4
        echo "</div>";
        
        $__internal_42368899e991c5a8c9dd9a586c673c4396686b15800dae06f17a14d1c3c972f4->leave($__internal_42368899e991c5a8c9dd9a586c673c4396686b15800dae06f17a14d1c3c972f4_prof);

    }

    // line 2
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_48cd92b08e4a376bc9ce282b7cbaf64ed64b846bbc5bc4706f553d5e0c417ab3 = $this->env->getExtension("native_profiler");
        $__internal_48cd92b08e4a376bc9ce282b7cbaf64ed64b846bbc5bc4706f553d5e0c417ab3->enter($__internal_48cd92b08e4a376bc9ce282b7cbaf64ed64b846bbc5bc4706f553d5e0c417ab3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 3
        echo "    ";
        
        $__internal_48cd92b08e4a376bc9ce282b7cbaf64ed64b846bbc5bc4706f553d5e0c417ab3->leave($__internal_48cd92b08e4a376bc9ce282b7cbaf64ed64b846bbc5bc4706f553d5e0c417ab3_prof);

    }

    public function getTemplateName()
    {
        return "SonataUserBundle::layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  41 => 3,  35 => 2,  28 => 4,  26 => 2,  23 => 1,);
    }
}
/* <div>*/
/*     {% block fos_user_content %}*/
/*     {% endblock fos_user_content %}*/
/* </div>*/
