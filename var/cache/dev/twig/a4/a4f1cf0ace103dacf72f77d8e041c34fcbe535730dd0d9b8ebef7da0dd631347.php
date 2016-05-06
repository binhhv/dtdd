<?php

/* @Twig/Exception/exception.js.twig */
class __TwigTemplate_8c046cf4a255e6048b1fc0cd17231e6c63594a35c84f66055cac388b6cc489c7 extends Twig_Template
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
        $__internal_74396fbff4c4bd88f56e41cb29cdf26b53e498e79ff733ab26d7165f75fa4f49 = $this->env->getExtension("native_profiler");
        $__internal_74396fbff4c4bd88f56e41cb29cdf26b53e498e79ff733ab26d7165f75fa4f49->enter($__internal_74396fbff4c4bd88f56e41cb29cdf26b53e498e79ff733ab26d7165f75fa4f49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_74396fbff4c4bd88f56e41cb29cdf26b53e498e79ff733ab26d7165f75fa4f49->leave($__internal_74396fbff4c4bd88f56e41cb29cdf26b53e498e79ff733ab26d7165f75fa4f49_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.js.twig";
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
