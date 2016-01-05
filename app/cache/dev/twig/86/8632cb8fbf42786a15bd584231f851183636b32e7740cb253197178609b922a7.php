<?php

/* LamaDelRayPlatformBundle:Advert:delete.html.twig */
class __TwigTemplate_941aab32caae10db81cc38359d11c9d16e1af048f49df2b0d38d24420bd05b87 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LamaDelRayPlatformBundle::layout2.html.twig", "LamaDelRayPlatformBundle:Advert:delete.html.twig", 1);
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
        $__internal_48aa3f192fb20f8549683e59efc4049918f657fc9cfdc3ba8ba37e62e96baf9b = $this->env->getExtension("native_profiler");
        $__internal_48aa3f192fb20f8549683e59efc4049918f657fc9cfdc3ba8ba37e62e96baf9b->enter($__internal_48aa3f192fb20f8549683e59efc4049918f657fc9cfdc3ba8ba37e62e96baf9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LamaDelRayPlatformBundle:Advert:delete.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_48aa3f192fb20f8549683e59efc4049918f657fc9cfdc3ba8ba37e62e96baf9b->leave($__internal_48aa3f192fb20f8549683e59efc4049918f657fc9cfdc3ba8ba37e62e96baf9b_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_c715c8bc3a87b2218bd15ab475e19f4751a5624b08a4cb5666c79777ba5e45e0 = $this->env->getExtension("native_profiler");
        $__internal_c715c8bc3a87b2218bd15ab475e19f4751a5624b08a4cb5666c79777ba5e45e0->enter($__internal_c715c8bc3a87b2218bd15ab475e19f4751a5624b08a4cb5666c79777ba5e45e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "\tSupprimer une annonce - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_c715c8bc3a87b2218bd15ab475e19f4751a5624b08a4cb5666c79777ba5e45e0->leave($__internal_c715c8bc3a87b2218bd15ab475e19f4751a5624b08a4cb5666c79777ba5e45e0_prof);

    }

    // line 7
    public function block_platform_body($context, array $blocks = array())
    {
        $__internal_9b9b1f1d180c5142255f9482422d7b56e9c0acaf12799e1ba9b56835938d9cde = $this->env->getExtension("native_profiler");
        $__internal_9b9b1f1d180c5142255f9482422d7b56e9c0acaf12799e1ba9b56835938d9cde->enter($__internal_9b9b1f1d180c5142255f9482422d7b56e9c0acaf12799e1ba9b56835938d9cde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "platform_body"));

        // line 8
        echo "
\t<h2>Supprimer une annonce</h2>

\t<p>
\t\tEtes-vous certain de vouloir supprimer l'annonce \"";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "title", array()), "html", null, true);
        echo "\" ?
\t</p>

\t<form action=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("platform_delete", array("id" => $this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "id", array()))), "html", null, true);
        echo "\" method=\"post\">
\t\t<a href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("platform_view", array("id" => $this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-default\">
\t\t\t<i class=\"glyphicon glyphicon-chevron-left\"></i>
\t\t\tRetour à l'annonce
\t\t</a>
\t\t<input type=\"submit\" value=\"Supprimer\" class=\"btn btn-danger\" />
\t\t";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
\t</form>
";
        
        $__internal_9b9b1f1d180c5142255f9482422d7b56e9c0acaf12799e1ba9b56835938d9cde->leave($__internal_9b9b1f1d180c5142255f9482422d7b56e9c0acaf12799e1ba9b56835938d9cde_prof);

    }

    public function getTemplateName()
    {
        return "LamaDelRayPlatformBundle:Advert:delete.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 21,  73 => 16,  69 => 15,  63 => 12,  57 => 8,  51 => 7,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends "LamaDelRayPlatformBundle::layout2.html.twig" %}*/
/* */
/* {% block title %}*/
/* 	Supprimer une annonce - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block platform_body %}*/
/* */
/* 	<h2>Supprimer une annonce</h2>*/
/* */
/* 	<p>*/
/* 		Etes-vous certain de vouloir supprimer l'annonce "{{ advert.title }}" ?*/
/* 	</p>*/
/* */
/* 	<form action="{{ path('platform_delete', {'id': advert.id}) }}" method="post">*/
/* 		<a href="{{ path('platform_view', {'id' : advert.id}) }}" class="btn btn-default">*/
/* 			<i class="glyphicon glyphicon-chevron-left"></i>*/
/* 			Retour à l'annonce*/
/* 		</a>*/
/* 		<input type="submit" value="Supprimer" class="btn btn-danger" />*/
/* 		{{ form_rest(form) }}*/
/* 	</form>*/
/* {% endblock %}*/
/* */
/* */
