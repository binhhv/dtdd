<?php

/* @Twig/Exception/error.json.twig */
class __TwigTemplate_b41b221d1800b0ba58d879acfd11ad6cdbd621d4be013cfb9a1b879e38016b53 extends Twig_Template
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
        $__internal_853919a82cd16b85b9cee72fab50d4454fee73e657478cf71a0489f9c4d59ee0 = $this->env->getExtension("native_profiler");
        $__internal_853919a82cd16b85b9cee72fab50d4454fee73e657478cf71a0489f9c4d59ee0->enter($__internal_853919a82cd16b85b9cee72fab50d4454fee73e657478cf71a0489f9c4d59ee0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_853919a82cd16b85b9cee72fab50d4454fee73e657478cf71a0489f9c4d59ee0->leave($__internal_853919a82cd16b85b9cee72fab50d4454fee73e657478cf71a0489f9c4d59ee0_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}*/
/* */
