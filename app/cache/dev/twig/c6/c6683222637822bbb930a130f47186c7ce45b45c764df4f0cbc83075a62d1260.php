<?php

/* LamaDelRayPlatformBundle:Advert:form.html.twig */
class __TwigTemplate_4036f9849833959a68f6df47b4f9bbbde716ede93c3e08c71a37a3a9296e19e7 extends Twig_Template
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
        $__internal_52335e52b6e404b93ab2b74fbb8e5e4dd6ebc87e42c2005015e0dd58c73ed4ca = $this->env->getExtension("native_profiler");
        $__internal_52335e52b6e404b93ab2b74fbb8e5e4dd6ebc87e42c2005015e0dd58c73ed4ca->enter($__internal_52335e52b6e404b93ab2b74fbb8e5e4dd6ebc87e42c2005015e0dd58c73ed4ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LamaDelRayPlatformBundle:Advert:form.html.twig"));

        // line 1
        echo "<h3>Formulaire d'annonce</h3>

<div class=\"well\">
\t";
        // line 4
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("class" => "form-horizontal")));
        echo "
\t\t";
        // line 5
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
\t\t<div class=\"form-group\">
\t\t\t";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "title", array()), 'label', array("label_attr" => array("class" => "col-sm-3 control-label"), "label" => "Titre de l'annonce"));
        echo "
\t\t\t";
        // line 8
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "title", array()), 'errors');
        echo "
\t\t\t<div class=\"col-sm-4\">
\t\t\t\t";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "title", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t</div>
\t\t</div>

\t\t<div class=\"form-group\">
\t\t\t";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "content", array()), 'label', array("label_attr" => array("class" => "col-sm-3 control-label"), "label" => "Contenu de l'annonce"));
        echo "
\t\t\t";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "title", array()), 'errors');
        echo "
\t\t\t<div class=\"col-sm-4\">
\t\t\t\t";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "content", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t</div>
\t\t</div>
\t";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date", array()), 'row');
        echo "

\t";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "author", array()), 'row');
        echo "

\t";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "published", array()), 'row');
        echo "

\t";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "save", array()), 'widget', array("attr" => array("class" => "btn btn-primary")));
        echo "

\t";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "

\t";
        // line 31
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

</div>";
        
        $__internal_52335e52b6e404b93ab2b74fbb8e5e4dd6ebc87e42c2005015e0dd58c73ed4ca->leave($__internal_52335e52b6e404b93ab2b74fbb8e5e4dd6ebc87e42c2005015e0dd58c73ed4ca_prof);

    }

    public function getTemplateName()
    {
        return "LamaDelRayPlatformBundle:Advert:form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 31,  88 => 29,  83 => 27,  78 => 25,  73 => 23,  68 => 21,  62 => 18,  57 => 16,  53 => 15,  45 => 10,  40 => 8,  36 => 7,  31 => 5,  27 => 4,  22 => 1,);
    }
}
/* <h3>Formulaire d'annonce</h3>*/
/* */
/* <div class="well">*/
/* 	{{ form_start(form, {'attr': {'class' : 'form-horizontal'}}) }}*/
/* 		{{ form_errors(form) }}*/
/* 		<div class="form-group">*/
/* 			{{ form_label(form.title, "Titre de l'annonce", {'label_attr': {'class' : 'col-sm-3 control-label'}}) }}*/
/* 			{{ form_errors(form.title) }}*/
/* 			<div class="col-sm-4">*/
/* 				{{ form_widget(form.title, {'attr': {'class' : 'form-control'}}) }}*/
/* 			</div>*/
/* 		</div>*/
/* */
/* 		<div class="form-group">*/
/* 			{{ form_label(form.content, "Contenu de l'annonce", {'label_attr': {'class' : 'col-sm-3 control-label'}}) }}*/
/* 			{{ form_errors(form.title) }}*/
/* 			<div class="col-sm-4">*/
/* 				{{ form_widget(form.content, {'attr': {'class' : 'form-control'}}) }}*/
/* 			</div>*/
/* 		</div>*/
/* 	{{ form_row(form.date) }}*/
/* */
/* 	{{ form_row(form.author) }}*/
/* */
/* 	{{ form_row(form.published) }}*/
/* */
/* 	{{ form_widget(form.save, {'attr': {'class': 'btn btn-primary'}}) }}*/
/* */
/* 	{{ form_rest(form) }}*/
/* */
/* 	{{ form_end(form) }}*/
/* */
/* </div>*/
