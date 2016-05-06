<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_a7157cbaca952ab142728ab4acc6cde300a6ce64583debdfe20f758c82379c7c extends Twig_Template
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
        $__internal_89eb2cc9ff0d90a95d84c1c33d71cecf8ab815c8fa2e4df9a8ce0b77138617b1 = $this->env->getExtension("native_profiler");
        $__internal_89eb2cc9ff0d90a95d84c1c33d71cecf8ab815c8fa2e4df9a8ce0b77138617b1->enter($__internal_89eb2cc9ff0d90a95d84c1c33d71cecf8ab815c8fa2e4df9a8ce0b77138617b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_89eb2cc9ff0d90a95d84c1c33d71cecf8ab815c8fa2e4df9a8ce0b77138617b1->leave($__internal_89eb2cc9ff0d90a95d84c1c33d71cecf8ab815c8fa2e4df9a8ce0b77138617b1_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
