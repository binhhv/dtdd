<?php

/* @Twig/Exception/exception.rdf.twig */
class __TwigTemplate_44d6403a7b4c379c74839eee7bbec589b63385cbf9f62d278981defc125f0c4a extends Twig_Template
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
        $__internal_fc190e4ed80f8ea321cd62ffefeccbd9fd621c57e9b8e7a69c858e10243bf358 = $this->env->getExtension("native_profiler");
        $__internal_fc190e4ed80f8ea321cd62ffefeccbd9fd621c57e9b8e7a69c858e10243bf358->enter($__internal_fc190e4ed80f8ea321cd62ffefeccbd9fd621c57e9b8e7a69c858e10243bf358_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_fc190e4ed80f8ea321cd62ffefeccbd9fd621c57e9b8e7a69c858e10243bf358->leave($__internal_fc190e4ed80f8ea321cd62ffefeccbd9fd621c57e9b8e7a69c858e10243bf358_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}*/
/* */
