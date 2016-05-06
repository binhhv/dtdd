<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_7b93305e4da146a1c13a4f713a34fb062a9cebc5562b327205d10c615a0243fe extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
        $this->blocks = array(
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
        $__internal_2916827eb37887808ec6e6e7f0ff8b9cd32e5dd564a372153b8bbd34456766f5 = $this->env->getExtension("native_profiler");
        $__internal_2916827eb37887808ec6e6e7f0ff8b9cd32e5dd564a372153b8bbd34456766f5->enter($__internal_2916827eb37887808ec6e6e7f0ff8b9cd32e5dd564a372153b8bbd34456766f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2916827eb37887808ec6e6e7f0ff8b9cd32e5dd564a372153b8bbd34456766f5->leave($__internal_2916827eb37887808ec6e6e7f0ff8b9cd32e5dd564a372153b8bbd34456766f5_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_152ca31ed07d23b264ea567478a69bf020c04d4eec78c6b136c33b0f34645f6b = $this->env->getExtension("native_profiler");
        $__internal_152ca31ed07d23b264ea567478a69bf020c04d4eec78c6b136c33b0f34645f6b->enter($__internal_152ca31ed07d23b264ea567478a69bf020c04d4eec78c6b136c33b0f34645f6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_152ca31ed07d23b264ea567478a69bf020c04d4eec78c6b136c33b0f34645f6b->leave($__internal_152ca31ed07d23b264ea567478a69bf020c04d4eec78c6b136c33b0f34645f6b_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_637de906a5f14d0f0a5615537f329a809d8cdf5d4f60ab204ebdaa2dbca21d60 = $this->env->getExtension("native_profiler");
        $__internal_637de906a5f14d0f0a5615537f329a809d8cdf5d4f60ab204ebdaa2dbca21d60->enter($__internal_637de906a5f14d0f0a5615537f329a809d8cdf5d4f60ab204ebdaa2dbca21d60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_637de906a5f14d0f0a5615537f329a809d8cdf5d4f60ab204ebdaa2dbca21d60->leave($__internal_637de906a5f14d0f0a5615537f329a809d8cdf5d4f60ab204ebdaa2dbca21d60_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block title 'Redirection Intercepted' %}*/
/* */
/* {% block body %}*/
/*     <div class="sf-reset">*/
/*         <div class="block-exception">*/
/*             <h1>This request redirects to <a href="{{ location }}">{{ location }}</a>.</h1>*/
/* */
/*             <p>*/
/*                 <small>*/
/*                     The redirect was intercepted by the web debug toolbar to help debugging.*/
/*                     For more information, see the "intercept-redirects" option of the Profiler.*/
/*                 </small>*/
/*             </p>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
