<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_762c3de104188b8395e38a8713f663added6ba7fb4adab1a06495152e8db768c extends Twig_Template
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
        $__internal_c31b6c9daf69289f863b73cbf075fe410c1a6f7ab856a97b1a402966584de661 = $this->env->getExtension("native_profiler");
        $__internal_c31b6c9daf69289f863b73cbf075fe410c1a6f7ab856a97b1a402966584de661->enter($__internal_c31b6c9daf69289f863b73cbf075fe410c1a6f7ab856a97b1a402966584de661_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_c31b6c9daf69289f863b73cbf075fe410c1a6f7ab856a97b1a402966584de661->leave($__internal_c31b6c9daf69289f863b73cbf075fe410c1a6f7ab856a97b1a402966584de661_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
