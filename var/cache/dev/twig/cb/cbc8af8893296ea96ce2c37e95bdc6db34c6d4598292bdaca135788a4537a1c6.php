<?php

/* @Twig/Exception/error.js.twig */
class __TwigTemplate_4a78aa4302d19f5a90125a2f031e37b6d10b78856cd87735fad6d435120cce9f extends Twig_Template
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
        $__internal_14e951378222f19b8b5985bfd3a6362661d53c2236d75fb786a70d1ac4269cbd = $this->env->getExtension("native_profiler");
        $__internal_14e951378222f19b8b5985bfd3a6362661d53c2236d75fb786a70d1ac4269cbd->enter($__internal_14e951378222f19b8b5985bfd3a6362661d53c2236d75fb786a70d1ac4269cbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_14e951378222f19b8b5985bfd3a6362661d53c2236d75fb786a70d1ac4269cbd->leave($__internal_14e951378222f19b8b5985bfd3a6362661d53c2236d75fb786a70d1ac4269cbd_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */
