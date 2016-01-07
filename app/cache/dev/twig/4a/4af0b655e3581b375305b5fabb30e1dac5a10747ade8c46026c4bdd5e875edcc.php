<?php

/* SonataAdminBundle:CRUD:history_revision_timestamp.html.twig */
class __TwigTemplate_db91e5267a402cfd42fbcd8d9857c9761b5d39aedff0bb62c48722c252024201 extends Twig_Template
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
        $__internal_c819f2dfafa759b4fbc982c81c82899094d77aa66b8f08740ef6ad7d6626af89 = $this->env->getExtension("native_profiler");
        $__internal_c819f2dfafa759b4fbc982c81c82899094d77aa66b8f08740ef6ad7d6626af89->enter($__internal_c819f2dfafa759b4fbc982c81c82899094d77aa66b8f08740ef6ad7d6626af89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:history_revision_timestamp.html.twig"));

        // line 11
        echo "
";
        // line 12
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["revision"]) ? $context["revision"] : $this->getContext($context, "revision")), "timestamp", array())), "html", null, true);
        echo "
";
        
        $__internal_c819f2dfafa759b4fbc982c81c82899094d77aa66b8f08740ef6ad7d6626af89->leave($__internal_c819f2dfafa759b4fbc982c81c82899094d77aa66b8f08740ef6ad7d6626af89_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:history_revision_timestamp.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 12,  22 => 11,);
    }
}
/* {#*/
/* */
/* This file is part of the Sonata package.*/
/* */
/* (c) Thomas Rabaix <thomas.rabaix@sonata-project.org>*/
/* */
/* For the full copyright and license information, please view the LICENSE*/
/* file that was distributed with this source code.*/
/* */
/* #}*/
/* */
/* {{ revision.timestamp | date }}*/
/* */
