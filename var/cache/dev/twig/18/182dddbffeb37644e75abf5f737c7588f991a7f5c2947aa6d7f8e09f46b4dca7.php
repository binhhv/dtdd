<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_6d6bf291615a760c947500832f3c79f9afea420cba2a3b0c8602538a3ba1627a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_386693b40068ba7604187ec0abdb438915ddef58d5fabb5f727715ba27f9bc43 = $this->env->getExtension("native_profiler");
        $__internal_386693b40068ba7604187ec0abdb438915ddef58d5fabb5f727715ba27f9bc43->enter($__internal_386693b40068ba7604187ec0abdb438915ddef58d5fabb5f727715ba27f9bc43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_386693b40068ba7604187ec0abdb438915ddef58d5fabb5f727715ba27f9bc43->leave($__internal_386693b40068ba7604187ec0abdb438915ddef58d5fabb5f727715ba27f9bc43_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_d191f225061e79821998b69d0f5c841f4d3a96fa1de20b4f00f9f4e873f2d66c = $this->env->getExtension("native_profiler");
        $__internal_d191f225061e79821998b69d0f5c841f4d3a96fa1de20b4f00f9f4e873f2d66c->enter($__internal_d191f225061e79821998b69d0f5c841f4d3a96fa1de20b4f00f9f4e873f2d66c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_d191f225061e79821998b69d0f5c841f4d3a96fa1de20b4f00f9f4e873f2d66c->leave($__internal_d191f225061e79821998b69d0f5c841f4d3a96fa1de20b4f00f9f4e873f2d66c_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_8f80678d8a1db9ba6c04b5aa0065d376d8356640566f90ba4b2eeba6e60d8911 = $this->env->getExtension("native_profiler");
        $__internal_8f80678d8a1db9ba6c04b5aa0065d376d8356640566f90ba4b2eeba6e60d8911->enter($__internal_8f80678d8a1db9ba6c04b5aa0065d376d8356640566f90ba4b2eeba6e60d8911_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_8f80678d8a1db9ba6c04b5aa0065d376d8356640566f90ba4b2eeba6e60d8911->leave($__internal_8f80678d8a1db9ba6c04b5aa0065d376d8356640566f90ba4b2eeba6e60d8911_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_4f99926e4a40aec67fc7cc5f394923122d63aa959fc66b4791d39606cdfca1ec = $this->env->getExtension("native_profiler");
        $__internal_4f99926e4a40aec67fc7cc5f394923122d63aa959fc66b4791d39606cdfca1ec->enter($__internal_4f99926e4a40aec67fc7cc5f394923122d63aa959fc66b4791d39606cdfca1ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_4f99926e4a40aec67fc7cc5f394923122d63aa959fc66b4791d39606cdfca1ec->leave($__internal_4f99926e4a40aec67fc7cc5f394923122d63aa959fc66b4791d39606cdfca1ec_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 33,  114 => 32,  108 => 28,  106 => 27,  102 => 25,  96 => 24,  88 => 21,  82 => 17,  80 => 16,  75 => 14,  70 => 13,  64 => 12,  54 => 9,  48 => 6,  45 => 5,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     {% if collector.hasexception %}*/
/*         <style>*/
/*             {{ render(path('_profiler_exception_css', { token: token })) }}*/
/*         </style>*/
/*     {% endif %}*/
/*     {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block menu %}*/
/*     <span class="label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}">*/
/*         <span class="icon">{{ include('@WebProfiler/Icon/exception.svg') }}</span>*/
/*         <strong>Exception</strong>*/
/*         {% if collector.hasexception %}*/
/*             <span class="count">*/
/*                 <span>1</span>*/
/*             </span>*/
/*         {% endif %}*/
/*     </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     <h2>Exceptions</h2>*/
/* */
/*     {% if not collector.hasexception %}*/
/*         <div class="empty">*/
/*             <p>No exception was thrown and caught during the request.</p>*/
/*         </div>*/
/*     {% else %}*/
/*         <div class="sf-reset">*/
/*             {{ render(path('_profiler_exception', { token: token })) }}*/
/*         </div>*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
