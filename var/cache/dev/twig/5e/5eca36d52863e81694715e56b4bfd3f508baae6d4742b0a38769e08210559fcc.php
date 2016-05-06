<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_f44243e70cbc0e763336a3f88243f52cc27f7d4670a5ad9768e7e07b2c9ec713 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_41cb82895d65302c3f18e16b412c25216bf565805d163733f31319ac16ebddab = $this->env->getExtension("native_profiler");
        $__internal_41cb82895d65302c3f18e16b412c25216bf565805d163733f31319ac16ebddab->enter($__internal_41cb82895d65302c3f18e16b412c25216bf565805d163733f31319ac16ebddab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_41cb82895d65302c3f18e16b412c25216bf565805d163733f31319ac16ebddab->leave($__internal_41cb82895d65302c3f18e16b412c25216bf565805d163733f31319ac16ebddab_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_f39baa07a70e052f7c16341318b5fc2c9f0027de50cb2090fa573f585030ac20 = $this->env->getExtension("native_profiler");
        $__internal_f39baa07a70e052f7c16341318b5fc2c9f0027de50cb2090fa573f585030ac20->enter($__internal_f39baa07a70e052f7c16341318b5fc2c9f0027de50cb2090fa573f585030ac20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_f39baa07a70e052f7c16341318b5fc2c9f0027de50cb2090fa573f585030ac20->leave($__internal_f39baa07a70e052f7c16341318b5fc2c9f0027de50cb2090fa573f585030ac20_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_824586dca3ac78887db4b72f3338c9955f8fd36137e4b187f1883ca03c2edb74 = $this->env->getExtension("native_profiler");
        $__internal_824586dca3ac78887db4b72f3338c9955f8fd36137e4b187f1883ca03c2edb74->enter($__internal_824586dca3ac78887db4b72f3338c9955f8fd36137e4b187f1883ca03c2edb74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_824586dca3ac78887db4b72f3338c9955f8fd36137e4b187f1883ca03c2edb74->leave($__internal_824586dca3ac78887db4b72f3338c9955f8fd36137e4b187f1883ca03c2edb74_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_a1c4536c673fe6c5cf9a84462c54fe5bfb9b6fc956fd8b54813e2a8a1b179cd7 = $this->env->getExtension("native_profiler");
        $__internal_a1c4536c673fe6c5cf9a84462c54fe5bfb9b6fc956fd8b54813e2a8a1b179cd7->enter($__internal_a1c4536c673fe6c5cf9a84462c54fe5bfb9b6fc956fd8b54813e2a8a1b179cd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_a1c4536c673fe6c5cf9a84462c54fe5bfb9b6fc956fd8b54813e2a8a1b179cd7->leave($__internal_a1c4536c673fe6c5cf9a84462c54fe5bfb9b6fc956fd8b54813e2a8a1b179cd7_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
