<?php

/* @Twig/Exception/exception.atom.twig */
class __TwigTemplate_6aefae8a302e9ab880d904c751a8c5dde7db2f9219a4fd4f1d0ddb35f2085490 extends Twig_Template
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
        $__internal_b5099cc1c03f13e36e2f40e95c75e8b9d10a2a663c4072b5655999334fccb110 = $this->env->getExtension("native_profiler");
        $__internal_b5099cc1c03f13e36e2f40e95c75e8b9d10a2a663c4072b5655999334fccb110->enter($__internal_b5099cc1c03f13e36e2f40e95c75e8b9d10a2a663c4072b5655999334fccb110_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_b5099cc1c03f13e36e2f40e95c75e8b9d10a2a663c4072b5655999334fccb110->leave($__internal_b5099cc1c03f13e36e2f40e95c75e8b9d10a2a663c4072b5655999334fccb110_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.atom.twig";
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
