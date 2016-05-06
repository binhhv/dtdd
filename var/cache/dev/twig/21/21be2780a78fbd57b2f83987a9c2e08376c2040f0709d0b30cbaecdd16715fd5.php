<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_6589cc6eb03432a164583299b0f0577c142d4b230a3ac931491eefe108d4860f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_22b3aa16f9b6e8cd009ebff2663a4d7bc51062b1d1c034a882b5bd81b0d1fff3 = $this->env->getExtension("native_profiler");
        $__internal_22b3aa16f9b6e8cd009ebff2663a4d7bc51062b1d1c034a882b5bd81b0d1fff3->enter($__internal_22b3aa16f9b6e8cd009ebff2663a4d7bc51062b1d1c034a882b5bd81b0d1fff3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_22b3aa16f9b6e8cd009ebff2663a4d7bc51062b1d1c034a882b5bd81b0d1fff3->leave($__internal_22b3aa16f9b6e8cd009ebff2663a4d7bc51062b1d1c034a882b5bd81b0d1fff3_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_e48ce0b86eaecd7d8c443c821403284b59873e3c9fc032150ddb2b81eaa23e53 = $this->env->getExtension("native_profiler");
        $__internal_e48ce0b86eaecd7d8c443c821403284b59873e3c9fc032150ddb2b81eaa23e53->enter($__internal_e48ce0b86eaecd7d8c443c821403284b59873e3c9fc032150ddb2b81eaa23e53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_e48ce0b86eaecd7d8c443c821403284b59873e3c9fc032150ddb2b81eaa23e53->leave($__internal_e48ce0b86eaecd7d8c443c821403284b59873e3c9fc032150ddb2b81eaa23e53_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_90b81017df5b299bd236268cb2b28946eb498fd9742edb68565fc17db51e37ea = $this->env->getExtension("native_profiler");
        $__internal_90b81017df5b299bd236268cb2b28946eb498fd9742edb68565fc17db51e37ea->enter($__internal_90b81017df5b299bd236268cb2b28946eb498fd9742edb68565fc17db51e37ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_90b81017df5b299bd236268cb2b28946eb498fd9742edb68565fc17db51e37ea->leave($__internal_90b81017df5b299bd236268cb2b28946eb498fd9742edb68565fc17db51e37ea_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_6181cf00d3802a928f33ffacdc371791795068d978845be2e883fdbe9b2eb5e0 = $this->env->getExtension("native_profiler");
        $__internal_6181cf00d3802a928f33ffacdc371791795068d978845be2e883fdbe9b2eb5e0->enter($__internal_6181cf00d3802a928f33ffacdc371791795068d978845be2e883fdbe9b2eb5e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_6181cf00d3802a928f33ffacdc371791795068d978845be2e883fdbe9b2eb5e0->leave($__internal_6181cf00d3802a928f33ffacdc371791795068d978845be2e883fdbe9b2eb5e0_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
