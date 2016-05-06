<?php

/* @Twig/Exception/error.txt.twig */
class __TwigTemplate_de2f157426a062a25c8d0041f7beb7b4035b379196b8d2dafb30d0b65088cd7b extends Twig_Template
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
        $__internal_5eb4785ffc3360e243245de000d5d2c65b9bd00bf7f549857779c542a9b71472 = $this->env->getExtension("native_profiler");
        $__internal_5eb4785ffc3360e243245de000d5d2c65b9bd00bf7f549857779c542a9b71472->enter($__internal_5eb4785ffc3360e243245de000d5d2c65b9bd00bf7f549857779c542a9b71472_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code"));
        echo " ";
        echo (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_5eb4785ffc3360e243245de000d5d2c65b9bd00bf7f549857779c542a9b71472->leave($__internal_5eb4785ffc3360e243245de000d5d2c65b9bd00bf7f549857779c542a9b71472_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  22 => 1,);
    }
}
/* Oops! An Error Occurred*/
/* =======================*/
/* */
/* The server returned a "{{ status_code }} {{ status_text }}".*/
/* */
/* Something is broken. Please let us know what you were doing when this error occurred.*/
/* We will fix it as soon as possible. Sorry for any inconvenience caused.*/
/* */
