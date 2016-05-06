<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_e206699b2946bb37b9f678428699f699b7e71eea1baad834478f9a968fc8b948 extends Twig_Template
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
        $__internal_44dfe91ca86cbc28043c4b88bc203f95169fa30d15daaeb1ea2f6eb1826ec332 = $this->env->getExtension("native_profiler");
        $__internal_44dfe91ca86cbc28043c4b88bc203f95169fa30d15daaeb1ea2f6eb1826ec332->enter($__internal_44dfe91ca86cbc28043c4b88bc203f95169fa30d15daaeb1ea2f6eb1826ec332_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_44dfe91ca86cbc28043c4b88bc203f95169fa30d15daaeb1ea2f6eb1826ec332->leave($__internal_44dfe91ca86cbc28043c4b88bc203f95169fa30d15daaeb1ea2f6eb1826ec332_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}*/
/* *//* */
/* */
