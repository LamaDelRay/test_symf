<?php

/* LamaDelRayPlatformBundle:Advert:edit.html.twig */
class __TwigTemplate_0a10dd8c54fc32508140d2accf05881aea4f3f89924af848a82d666e95b86f38 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LamaDelRayPlatformBundle::layout2.html.twig", "LamaDelRayPlatformBundle:Advert:edit.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'platform_body' => array($this, 'block_platform_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "LamaDelRayPlatformBundle::layout2.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_154b1fcd247b46aad19dbdcca4710c27a8a125e2eb8f1857506d18dc3649482c = $this->env->getExtension("native_profiler");
        $__internal_154b1fcd247b46aad19dbdcca4710c27a8a125e2eb8f1857506d18dc3649482c->enter($__internal_154b1fcd247b46aad19dbdcca4710c27a8a125e2eb8f1857506d18dc3649482c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LamaDelRayPlatformBundle:Advert:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_154b1fcd247b46aad19dbdcca4710c27a8a125e2eb8f1857506d18dc3649482c->leave($__internal_154b1fcd247b46aad19dbdcca4710c27a8a125e2eb8f1857506d18dc3649482c_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_b7ea7ca19430d1639771ce438475a23e638a60c25ae39c2f3bf588eec7c75fab = $this->env->getExtension("native_profiler");
        $__internal_b7ea7ca19430d1639771ce438475a23e638a60c25ae39c2f3bf588eec7c75fab->enter($__internal_b7ea7ca19430d1639771ce438475a23e638a60c25ae39c2f3bf588eec7c75fab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "\tModifier une annonce - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_b7ea7ca19430d1639771ce438475a23e638a60c25ae39c2f3bf588eec7c75fab->leave($__internal_b7ea7ca19430d1639771ce438475a23e638a60c25ae39c2f3bf588eec7c75fab_prof);

    }

    // line 7
    public function block_platform_body($context, array $blocks = array())
    {
        $__internal_30fe264016e771d76017ce17253b569fe588b255b25a0456c20bf1b34dc0a682 = $this->env->getExtension("native_profiler");
        $__internal_30fe264016e771d76017ce17253b569fe588b255b25a0456c20bf1b34dc0a682->enter($__internal_30fe264016e771d76017ce17253b569fe588b255b25a0456c20bf1b34dc0a682_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "platform_body"));

        // line 8
        echo "
\t<h2> Modifier une annonce </h2>

\t";
        // line 11
        echo twig_include($this->env, $context, "LamaDelRayPlatformBundle:Advert:form.html.twig");
        echo "

\t<p>
\t\tVous éditez une annonce déjà existante, merci de ne pas changer
\t\tl'esprit générale de l'annonce déjà publiée.
\t</p>

\t<p>
\t\tVous éditez une annonce déjà existante, merci de ne pas changer
\t\tl'esprit générale de l'annonce déjà publiée
\t</p>

\t<p>
\t\t<a href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("platform_view", array("id" => $this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-default\">
\t\t\t<i class=\"glyphicon glyphicon-chevron-left\"></i>
\t\t\tRetour à l'annonce
\t\t</a>
\t</p>

";
        
        $__internal_30fe264016e771d76017ce17253b569fe588b255b25a0456c20bf1b34dc0a682->leave($__internal_30fe264016e771d76017ce17253b569fe588b255b25a0456c20bf1b34dc0a682_prof);

    }

    public function getTemplateName()
    {
        return "LamaDelRayPlatformBundle:Advert:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 24,  62 => 11,  57 => 8,  51 => 7,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends "LamaDelRayPlatformBundle::layout2.html.twig" %}*/
/* */
/* {% block title %}*/
/* 	Modifier une annonce - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block platform_body %}*/
/* */
/* 	<h2> Modifier une annonce </h2>*/
/* */
/* 	{{ include("LamaDelRayPlatformBundle:Advert:form.html.twig") }}*/
/* */
/* 	<p>*/
/* 		Vous éditez une annonce déjà existante, merci de ne pas changer*/
/* 		l'esprit générale de l'annonce déjà publiée.*/
/* 	</p>*/
/* */
/* 	<p>*/
/* 		Vous éditez une annonce déjà existante, merci de ne pas changer*/
/* 		l'esprit générale de l'annonce déjà publiée*/
/* 	</p>*/
/* */
/* 	<p>*/
/* 		<a href="{{ path('platform_view', {'id': advert.id}) }}" class="btn btn-default">*/
/* 			<i class="glyphicon glyphicon-chevron-left"></i>*/
/* 			Retour à l'annonce*/
/* 		</a>*/
/* 	</p>*/
/* */
/* {% endblock %}*/
