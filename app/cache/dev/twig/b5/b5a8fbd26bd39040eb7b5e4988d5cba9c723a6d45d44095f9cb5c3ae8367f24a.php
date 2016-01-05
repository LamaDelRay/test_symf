<?php

/* LamaDelRayPlatformBundle:Advert:form.html.twig */
class __TwigTemplate_c5464c0fc6aa69cea5d2a97569ec2b8613a7350d9c4892bca81c9cdcbea8a553 extends Twig_Template
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
        $__internal_9f9f40764a320717e30c4ccf9cef0fcd27bc1b94faab63fd6f5f63295fac59ce = $this->env->getExtension("native_profiler");
        $__internal_9f9f40764a320717e30c4ccf9cef0fcd27bc1b94faab63fd6f5f63295fac59ce->enter($__internal_9f9f40764a320717e30c4ccf9cef0fcd27bc1b94faab63fd6f5f63295fac59ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LamaDelRayPlatformBundle:Advert:form.html.twig"));

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
        if ($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "date", array(), "any", true, true)) {
            // line 22
            echo "\t\t";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date", array()), 'row');
            echo "
\t";
        }
        // line 24
        echo "
\t";
        // line 25
        if ($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "author", array(), "any", true, true)) {
            // line 26
            echo "\t\t";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "author", array()), 'row');
            echo "
\t";
        }
        // line 28
        echo "
\t";
        // line 29
        if ($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "published", array(), "any", true, true)) {
            // line 30
            echo "\t\t";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "published", array()), 'row');
            echo "
\t";
        }
        // line 32
        echo "
\t";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "save", array()), 'widget', array("attr" => array("class" => "btn btn-primary")));
        echo "

\t";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "

\t";
        // line 37
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

</div>

<script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>

<script type=\"text/javascript\">
\t\$(document).ready(function(){
\t\tvar \$container = \$('div#platformbundle_advert_categories');
\t\tvar \$addLink = \$('<a href=\"#\" id=\"add_category\" class=\"btn btn-default\">Ajouter une catégorie</a>');
\t\t\$container.append(\$addLink);
\t\t\$addLink.click(function(e) {
\t\t\taddCategory(\$container);
\t\t\te.preventDefault();
\t\t\treturn false;
\t\t});
\t\tvar index = \$container.find(':input').length;

\t\tif (index == 0) {
\t\t\taddCategory(\$container);
\t\t} else {
\t\t\t\$container.children('div').each(function(){
\t\t\t\taddDeleteLink(\$(this));
\t\t\t});
\t\t}

\t\tfunction addCategory(\$container){
\t\t\tvar \$prototype = \$(\$container.attr('data-prototype').replace(/__name__label__/g, 'Catégorie n°' + (index+1)).replace(/__name__/g, index));
\t\t\taddDeleteLink(\$prototype);
\t\t\t\$container.append(\$prototype);
\t\t\tindex++;
\t\t}

\t\tfunction addDeleteLink(\$prototype){
\t\t\t\$deleteLink = \$('<a href=\"#\" class=\"btn btn-danger\">Supprimer</a>');
\t\t\t\$prototype.append(\$deleteLink);
\t\t\t\$deleteLink.click(function(e){
\t\t\t\t\$prototype.remove();
\t\t\t\te.preventDefault();
\t\t\t\treturn false;
\t\t\t});

\t\t}

\t});


</script>";
        
        $__internal_9f9f40764a320717e30c4ccf9cef0fcd27bc1b94faab63fd6f5f63295fac59ce->leave($__internal_9f9f40764a320717e30c4ccf9cef0fcd27bc1b94faab63fd6f5f63295fac59ce_prof);

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
        return array (  111 => 37,  106 => 35,  101 => 33,  98 => 32,  92 => 30,  90 => 29,  87 => 28,  81 => 26,  79 => 25,  76 => 24,  70 => 22,  68 => 21,  62 => 18,  57 => 16,  53 => 15,  45 => 10,  40 => 8,  36 => 7,  31 => 5,  27 => 4,  22 => 1,);
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
/* 	{% if form.date is defined %}*/
/* 		{{ form_row(form.date) }}*/
/* 	{% endif %}*/
/* */
/* 	{% if form.author is defined %}*/
/* 		{{ form_row(form.author) }}*/
/* 	{% endif %}*/
/* */
/* 	{% if form.published is defined %}*/
/* 		{{ form_row(form.published) }}*/
/* 	{% endif %}*/
/* */
/* 	{{ form_widget(form.save, {'attr': {'class': 'btn btn-primary'}}) }}*/
/* */
/* 	{{ form_rest(form) }}*/
/* */
/* 	{{ form_end(form) }}*/
/* */
/* </div>*/
/* */
/* <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>*/
/* */
/* <script type="text/javascript">*/
/* 	$(document).ready(function(){*/
/* 		var $container = $('div#platformbundle_advert_categories');*/
/* 		var $addLink = $('<a href="#" id="add_category" class="btn btn-default">Ajouter une catégorie</a>');*/
/* 		$container.append($addLink);*/
/* 		$addLink.click(function(e) {*/
/* 			addCategory($container);*/
/* 			e.preventDefault();*/
/* 			return false;*/
/* 		});*/
/* 		var index = $container.find(':input').length;*/
/* */
/* 		if (index == 0) {*/
/* 			addCategory($container);*/
/* 		} else {*/
/* 			$container.children('div').each(function(){*/
/* 				addDeleteLink($(this));*/
/* 			});*/
/* 		}*/
/* */
/* 		function addCategory($container){*/
/* 			var $prototype = $($container.attr('data-prototype').replace(/__name__label__/g, 'Catégorie n°' + (index+1)).replace(/__name__/g, index));*/
/* 			addDeleteLink($prototype);*/
/* 			$container.append($prototype);*/
/* 			index++;*/
/* 		}*/
/* */
/* 		function addDeleteLink($prototype){*/
/* 			$deleteLink = $('<a href="#" class="btn btn-danger">Supprimer</a>');*/
/* 			$prototype.append($deleteLink);*/
/* 			$deleteLink.click(function(e){*/
/* 				$prototype.remove();*/
/* 				e.preventDefault();*/
/* 				return false;*/
/* 			});*/
/* */
/* 		}*/
/* */
/* 	});*/
/* */
/* */
/* </script>*/
