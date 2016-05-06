<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_07d10418f2160738a2cc857f48746deb34e3b914bfa766c8e696c6d6c536bb93 extends Twig_Template
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
        $__internal_91b2492cc8feb6d1f247f648e09714851b98d3ad6ffb0435a057a378b437067b = $this->env->getExtension("native_profiler");
        $__internal_91b2492cc8feb6d1f247f648e09714851b98d3ad6ffb0435a057a378b437067b->enter($__internal_91b2492cc8feb6d1f247f648e09714851b98d3ad6ffb0435a057a378b437067b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

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
        
        $__internal_91b2492cc8feb6d1f247f648e09714851b98d3ad6ffb0435a057a378b437067b->leave($__internal_91b2492cc8feb6d1f247f648e09714851b98d3ad6ffb0435a057a378b437067b_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
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
