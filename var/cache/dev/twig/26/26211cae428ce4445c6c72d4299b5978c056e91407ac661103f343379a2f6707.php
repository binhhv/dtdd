<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_612d79c418c4f9df94ecc2520a46e707045890f9cd0c62dbb15495d977bf4218 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
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
        $__internal_c85302c668c48e410a3d81c0ed07b36ab38f45f3bf7bda92923b8d7727bff40a = $this->env->getExtension("native_profiler");
        $__internal_c85302c668c48e410a3d81c0ed07b36ab38f45f3bf7bda92923b8d7727bff40a->enter($__internal_c85302c668c48e410a3d81c0ed07b36ab38f45f3bf7bda92923b8d7727bff40a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c85302c668c48e410a3d81c0ed07b36ab38f45f3bf7bda92923b8d7727bff40a->leave($__internal_c85302c668c48e410a3d81c0ed07b36ab38f45f3bf7bda92923b8d7727bff40a_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_e937da59814fe9034d8ae77688d9cd0273255f020b13ab6fc9761be905a09bd3 = $this->env->getExtension("native_profiler");
        $__internal_e937da59814fe9034d8ae77688d9cd0273255f020b13ab6fc9761be905a09bd3->enter($__internal_e937da59814fe9034d8ae77688d9cd0273255f020b13ab6fc9761be905a09bd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_e937da59814fe9034d8ae77688d9cd0273255f020b13ab6fc9761be905a09bd3->leave($__internal_e937da59814fe9034d8ae77688d9cd0273255f020b13ab6fc9761be905a09bd3_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_be380bf61be8bb06c169819befd5879567b670dd27ec8ed502477ca63c47910b = $this->env->getExtension("native_profiler");
        $__internal_be380bf61be8bb06c169819befd5879567b670dd27ec8ed502477ca63c47910b->enter($__internal_be380bf61be8bb06c169819befd5879567b670dd27ec8ed502477ca63c47910b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_be380bf61be8bb06c169819befd5879567b670dd27ec8ed502477ca63c47910b->leave($__internal_be380bf61be8bb06c169819befd5879567b670dd27ec8ed502477ca63c47910b_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_d2e602f0cd2b03406c11f558040a218bb63bba3e2ff5f385212e38cbb1319a59 = $this->env->getExtension("native_profiler");
        $__internal_d2e602f0cd2b03406c11f558040a218bb63bba3e2ff5f385212e38cbb1319a59->enter($__internal_d2e602f0cd2b03406c11f558040a218bb63bba3e2ff5f385212e38cbb1319a59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_d2e602f0cd2b03406c11f558040a218bb63bba3e2ff5f385212e38cbb1319a59->leave($__internal_d2e602f0cd2b03406c11f558040a218bb63bba3e2ff5f385212e38cbb1319a59_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
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
