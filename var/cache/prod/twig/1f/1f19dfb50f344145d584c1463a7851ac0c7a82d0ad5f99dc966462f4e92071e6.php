<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_0825056cf5bfc877ff197fc0ce6f9d3300a869aac334a1d9ab646cca4a35fe60 extends Twig_Template
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
        $__internal_7563e0bdb5c8d1c7cd98e3087353e82ac6705a555cc8a93f9339068c64f6eb3e = $this->env->getExtension("native_profiler");
        $__internal_7563e0bdb5c8d1c7cd98e3087353e82ac6705a555cc8a93f9339068c64f6eb3e->enter($__internal_7563e0bdb5c8d1c7cd98e3087353e82ac6705a555cc8a93f9339068c64f6eb3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7563e0bdb5c8d1c7cd98e3087353e82ac6705a555cc8a93f9339068c64f6eb3e->leave($__internal_7563e0bdb5c8d1c7cd98e3087353e82ac6705a555cc8a93f9339068c64f6eb3e_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_bcdbd45cd82ce0ce85050f85281212f4a1f48f95531a06c2db0e3ed5b2aec7d6 = $this->env->getExtension("native_profiler");
        $__internal_bcdbd45cd82ce0ce85050f85281212f4a1f48f95531a06c2db0e3ed5b2aec7d6->enter($__internal_bcdbd45cd82ce0ce85050f85281212f4a1f48f95531a06c2db0e3ed5b2aec7d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_bcdbd45cd82ce0ce85050f85281212f4a1f48f95531a06c2db0e3ed5b2aec7d6->leave($__internal_bcdbd45cd82ce0ce85050f85281212f4a1f48f95531a06c2db0e3ed5b2aec7d6_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_72351e62181fd5c1cc40e41048ca0abc8801d08df385a11011c9a87194e2c424 = $this->env->getExtension("native_profiler");
        $__internal_72351e62181fd5c1cc40e41048ca0abc8801d08df385a11011c9a87194e2c424->enter($__internal_72351e62181fd5c1cc40e41048ca0abc8801d08df385a11011c9a87194e2c424_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_72351e62181fd5c1cc40e41048ca0abc8801d08df385a11011c9a87194e2c424->leave($__internal_72351e62181fd5c1cc40e41048ca0abc8801d08df385a11011c9a87194e2c424_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_69e0ca54250a6555c2a5e215201df51ba2553af039620813fd195ccc6071561a = $this->env->getExtension("native_profiler");
        $__internal_69e0ca54250a6555c2a5e215201df51ba2553af039620813fd195ccc6071561a->enter($__internal_69e0ca54250a6555c2a5e215201df51ba2553af039620813fd195ccc6071561a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_69e0ca54250a6555c2a5e215201df51ba2553af039620813fd195ccc6071561a->leave($__internal_69e0ca54250a6555c2a5e215201df51ba2553af039620813fd195ccc6071561a_prof);

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
