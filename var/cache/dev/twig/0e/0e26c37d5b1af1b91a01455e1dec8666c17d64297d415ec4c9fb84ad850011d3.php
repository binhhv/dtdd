<?php

/* @Twig/Exception/error.rdf.twig */
class __TwigTemplate_d541700ba72d915fc024f1f34cbb226a811fef0aa1f8ab83542355597e8ce3ee extends Twig_Template
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
        $__internal_dc92382da2e71f986c755381af78b315944e526da576fd5590674e873a147cee = $this->env->getExtension("native_profiler");
        $__internal_dc92382da2e71f986c755381af78b315944e526da576fd5590674e873a147cee->enter($__internal_dc92382da2e71f986c755381af78b315944e526da576fd5590674e873a147cee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.rdf.twig", 1)->display($context);
        
        $__internal_dc92382da2e71f986c755381af78b315944e526da576fd5590674e873a147cee->leave($__internal_dc92382da2e71f986c755381af78b315944e526da576fd5590674e873a147cee_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
