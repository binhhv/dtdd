<?php

/* @Twig/Exception/error.xml.twig */
class __TwigTemplate_42003b6b85d18484ebd3a5841bd62112e917497d1e28c8479287f0c4f13e8ddb extends Twig_Template
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
        $__internal_93ace2c1f7794d7d5ac2c79878569d9329271788c8e0bece66e8437b18151c81 = $this->env->getExtension("native_profiler");
        $__internal_93ace2c1f7794d7d5ac2c79878569d9329271788c8e0bece66e8437b18151c81->enter($__internal_93ace2c1f7794d7d5ac2c79878569d9329271788c8e0bece66e8437b18151c81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_93ace2c1f7794d7d5ac2c79878569d9329271788c8e0bece66e8437b18151c81->leave($__internal_93ace2c1f7794d7d5ac2c79878569d9329271788c8e0bece66e8437b18151c81_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 3,  22 => 1,);
    }
}
/* <?xml version="1.0" encoding="{{ _charset }}" ?>*/
/* */
/* <error code="{{ status_code }}" message="{{ status_text }}" />*/
/* */
