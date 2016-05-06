<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_84b1f7424ac453c829a8f50417a429fdb55f18d4893c4439f739b8db82df47a7 extends Twig_Template
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
        $__internal_738334a5b288509a554f6b3c2728413f229f3f4521f4051feae7042ce4ed4d30 = $this->env->getExtension("native_profiler");
        $__internal_738334a5b288509a554f6b3c2728413f229f3f4521f4051feae7042ce4ed4d30->enter($__internal_738334a5b288509a554f6b3c2728413f229f3f4521f4051feae7042ce4ed4d30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

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
        
        $__internal_738334a5b288509a554f6b3c2728413f229f3f4521f4051feae7042ce4ed4d30->leave($__internal_738334a5b288509a554f6b3c2728413f229f3f4521f4051feae7042ce4ed4d30_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
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
