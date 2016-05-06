<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_8c834c7e18caa24d361750b1c373644167117f2cf552a2168032c07fc8e8c740 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
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
        $__internal_c052d3fd1a5151b74b48bb9864e074c0f0c9cb6f5d9233fb72554773548624fe = $this->env->getExtension("native_profiler");
        $__internal_c052d3fd1a5151b74b48bb9864e074c0f0c9cb6f5d9233fb72554773548624fe->enter($__internal_c052d3fd1a5151b74b48bb9864e074c0f0c9cb6f5d9233fb72554773548624fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c052d3fd1a5151b74b48bb9864e074c0f0c9cb6f5d9233fb72554773548624fe->leave($__internal_c052d3fd1a5151b74b48bb9864e074c0f0c9cb6f5d9233fb72554773548624fe_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_cea56e2ac32b6d24d55a6214d4832130cdeae5fee3a1b9ed68e4ffbc0f581a87 = $this->env->getExtension("native_profiler");
        $__internal_cea56e2ac32b6d24d55a6214d4832130cdeae5fee3a1b9ed68e4ffbc0f581a87->enter($__internal_cea56e2ac32b6d24d55a6214d4832130cdeae5fee3a1b9ed68e4ffbc0f581a87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_cea56e2ac32b6d24d55a6214d4832130cdeae5fee3a1b9ed68e4ffbc0f581a87->leave($__internal_cea56e2ac32b6d24d55a6214d4832130cdeae5fee3a1b9ed68e4ffbc0f581a87_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_588c63872af6cc23c264596ad26418a07f61d9ac3300f3aab32b76f964dbcde6 = $this->env->getExtension("native_profiler");
        $__internal_588c63872af6cc23c264596ad26418a07f61d9ac3300f3aab32b76f964dbcde6->enter($__internal_588c63872af6cc23c264596ad26418a07f61d9ac3300f3aab32b76f964dbcde6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_588c63872af6cc23c264596ad26418a07f61d9ac3300f3aab32b76f964dbcde6->leave($__internal_588c63872af6cc23c264596ad26418a07f61d9ac3300f3aab32b76f964dbcde6_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
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
