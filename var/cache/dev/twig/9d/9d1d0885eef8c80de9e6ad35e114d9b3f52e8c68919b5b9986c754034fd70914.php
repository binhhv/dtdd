<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_88a626a7d0f0f7fdf8549e9909743b325a2ede66fc8526a880bfcca6cefda7ce extends Twig_Template
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
        $__internal_c5e27176d00f275b16228ba84df853c56c76decc79dd9f8afaabe285b528c004 = $this->env->getExtension("native_profiler");
        $__internal_c5e27176d00f275b16228ba84df853c56c76decc79dd9f8afaabe285b528c004->enter($__internal_c5e27176d00f275b16228ba84df853c56c76decc79dd9f8afaabe285b528c004_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_c5e27176d00f275b16228ba84df853c56c76decc79dd9f8afaabe285b528c004->leave($__internal_c5e27176d00f275b16228ba84df853c56c76decc79dd9f8afaabe285b528c004_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
