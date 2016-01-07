<?php

/* FOSUserBundle:Resetting:email.txt.twig */
class __TwigTemplate_3606d438ffedcdcad4712b0dcf1c7dae8162a899326feda4a62d6af014739ffe extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6653f224c4216753066859c1e068539b5bb0f5b86be432487d8864e7d5925949 = $this->env->getExtension("native_profiler");
        $__internal_6653f224c4216753066859c1e068539b5bb0f5b86be432487d8864e7d5925949->enter($__internal_6653f224c4216753066859c1e068539b5bb0f5b86be432487d8864e7d5925949_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 1
        $this->displayBlock('subject', $context, $blocks);
        // line 6
        $this->displayBlock('body_text', $context, $blocks);
        // line 11
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_6653f224c4216753066859c1e068539b5bb0f5b86be432487d8864e7d5925949->leave($__internal_6653f224c4216753066859c1e068539b5bb0f5b86be432487d8864e7d5925949_prof);

    }

    // line 1
    public function block_subject($context, array $blocks = array())
    {
        $__internal_a19c94061bfce7eac58617ff5689dcdaab2394af36dfe30377cfbea40bf0a975 = $this->env->getExtension("native_profiler");
        $__internal_a19c94061bfce7eac58617ff5689dcdaab2394af36dfe30377cfbea40bf0a975->enter($__internal_a19c94061bfce7eac58617ff5689dcdaab2394af36dfe30377cfbea40bf0a975_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 3
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_a19c94061bfce7eac58617ff5689dcdaab2394af36dfe30377cfbea40bf0a975->leave($__internal_a19c94061bfce7eac58617ff5689dcdaab2394af36dfe30377cfbea40bf0a975_prof);

    }

    // line 6
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_dbfb2e4eb4c15ef1cf103474fceb337b4985fc25a9bed21ce6542ae0ddfaf06b = $this->env->getExtension("native_profiler");
        $__internal_dbfb2e4eb4c15ef1cf103474fceb337b4985fc25a9bed21ce6542ae0ddfaf06b->enter($__internal_dbfb2e4eb4c15ef1cf103474fceb337b4985fc25a9bed21ce6542ae0ddfaf06b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 8
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_dbfb2e4eb4c15ef1cf103474fceb337b4985fc25a9bed21ce6542ae0ddfaf06b->leave($__internal_dbfb2e4eb4c15ef1cf103474fceb337b4985fc25a9bed21ce6542ae0ddfaf06b_prof);

    }

    // line 11
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_06792d6c22df2e0bb87c6fe570950c53976a263636c6e1922b07f2395d8ac9c9 = $this->env->getExtension("native_profiler");
        $__internal_06792d6c22df2e0bb87c6fe570950c53976a263636c6e1922b07f2395d8ac9c9->enter($__internal_06792d6c22df2e0bb87c6fe570950c53976a263636c6e1922b07f2395d8ac9c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_06792d6c22df2e0bb87c6fe570950c53976a263636c6e1922b07f2395d8ac9c9->leave($__internal_06792d6c22df2e0bb87c6fe570950c53976a263636c6e1922b07f2395d8ac9c9_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  66 => 11,  57 => 8,  51 => 6,  42 => 3,  36 => 1,  29 => 11,  27 => 6,  25 => 1,);
    }
}
/* {% block subject %}*/
/* {% autoescape false %}*/
/* {{ 'resetting.email.subject'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}, 'FOSUserBundle') }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_text %}*/
/* {% autoescape false %}*/
/* {{ 'resetting.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}, 'FOSUserBundle') }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_html %}{% endblock %}*/
/* */
