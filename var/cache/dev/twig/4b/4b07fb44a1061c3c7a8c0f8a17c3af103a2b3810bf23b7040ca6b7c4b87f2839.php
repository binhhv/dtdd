<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_c27c1c295ac3da08bcfe93c15701048ab6a63fe0d4fa756d16ff5b08bba48c45 extends Twig_Template
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
        $__internal_43ba70dc7cce70f928844fb6ed6167f4a48facd0c85be96061fe3bafdf7375f6 = $this->env->getExtension("native_profiler");
        $__internal_43ba70dc7cce70f928844fb6ed6167f4a48facd0c85be96061fe3bafdf7375f6->enter($__internal_43ba70dc7cce70f928844fb6ed6167f4a48facd0c85be96061fe3bafdf7375f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_43ba70dc7cce70f928844fb6ed6167f4a48facd0c85be96061fe3bafdf7375f6->leave($__internal_43ba70dc7cce70f928844fb6ed6167f4a48facd0c85be96061fe3bafdf7375f6_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
