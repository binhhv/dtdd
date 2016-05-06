<?php

/* @Twig/Exception/exception.css.twig */
class __TwigTemplate_faaab252ac085c401f8d767991edcf33f8b3ba53075d1e2199d6b8df385dee99 extends Twig_Template
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
        $__internal_0e98f93ce116bdbd0c08398cf77b96564901f526ba8cbd426f9624d1e12f1f80 = $this->env->getExtension("native_profiler");
        $__internal_0e98f93ce116bdbd0c08398cf77b96564901f526ba8cbd426f9624d1e12f1f80->enter($__internal_0e98f93ce116bdbd0c08398cf77b96564901f526ba8cbd426f9624d1e12f1f80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_0e98f93ce116bdbd0c08398cf77b96564901f526ba8cbd426f9624d1e12f1f80->leave($__internal_0e98f93ce116bdbd0c08398cf77b96564901f526ba8cbd426f9624d1e12f1f80_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.css.twig";
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
