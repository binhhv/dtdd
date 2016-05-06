<?php

/* @Twig/Exception/error.atom.twig */
class __TwigTemplate_0abd7aa761108668789c9fcb198470c1857f2f1bff54c1c3935ad1540ee47f2c extends Twig_Template
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
        $__internal_fdb64af99546fa91086248fc1ea6c0d7e417718a1c2f46256f8895043056a324 = $this->env->getExtension("native_profiler");
        $__internal_fdb64af99546fa91086248fc1ea6c0d7e417718a1c2f46256f8895043056a324->enter($__internal_fdb64af99546fa91086248fc1ea6c0d7e417718a1c2f46256f8895043056a324_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.atom.twig", 1)->display($context);
        
        $__internal_fdb64af99546fa91086248fc1ea6c0d7e417718a1c2f46256f8895043056a324->leave($__internal_fdb64af99546fa91086248fc1ea6c0d7e417718a1c2f46256f8895043056a324_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
