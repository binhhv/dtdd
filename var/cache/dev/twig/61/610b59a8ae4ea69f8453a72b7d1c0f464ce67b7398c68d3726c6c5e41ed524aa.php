<?php

/* @Twig/Exception/exception.json.twig */
class __TwigTemplate_3ef24196e0651d6770df0a8eec4342310ef3d670520c9963a8de8bb5afa2eaa5 extends Twig_Template
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
        $__internal_4b08a9f90d07193c8c68999df6c1a9a10d86dfeb905362b57748dd828eba7a42 = $this->env->getExtension("native_profiler");
        $__internal_4b08a9f90d07193c8c68999df6c1a9a10d86dfeb905362b57748dd828eba7a42->enter($__internal_4b08a9f90d07193c8c68999df6c1a9a10d86dfeb905362b57748dd828eba7a42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_4b08a9f90d07193c8c68999df6c1a9a10d86dfeb905362b57748dd828eba7a42->leave($__internal_4b08a9f90d07193c8c68999df6c1a9a10d86dfeb905362b57748dd828eba7a42_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}*/
/* */
