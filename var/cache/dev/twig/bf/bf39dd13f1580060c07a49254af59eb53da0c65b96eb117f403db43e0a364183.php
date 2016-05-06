<?php

/* @Twig/Exception/error.css.twig */
class __TwigTemplate_b1119021ba8ca6346f3a22e082accfaa627e04d6dbb85ba7439ee60323f001c3 extends Twig_Template
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
        $__internal_e00d2dbe61b738ac93c6fe99c9e79ebc766e9c9a8526c51465da6b695ab38e04 = $this->env->getExtension("native_profiler");
        $__internal_e00d2dbe61b738ac93c6fe99c9e79ebc766e9c9a8526c51465da6b695ab38e04->enter($__internal_e00d2dbe61b738ac93c6fe99c9e79ebc766e9c9a8526c51465da6b695ab38e04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_e00d2dbe61b738ac93c6fe99c9e79ebc766e9c9a8526c51465da6b695ab38e04->leave($__internal_e00d2dbe61b738ac93c6fe99c9e79ebc766e9c9a8526c51465da6b695ab38e04_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.css.twig";
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
