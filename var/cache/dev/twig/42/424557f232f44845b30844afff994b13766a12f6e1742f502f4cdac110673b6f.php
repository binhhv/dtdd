<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_174568cab053cd4260106022515b0a39acdf53023c64aeb03e96b6a2272f834b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
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
        $__internal_8c0911bdbe66126d9b2fb3ef0bb6cff21b50b33cde92fc3edd6f0788b075eae2 = $this->env->getExtension("native_profiler");
        $__internal_8c0911bdbe66126d9b2fb3ef0bb6cff21b50b33cde92fc3edd6f0788b075eae2->enter($__internal_8c0911bdbe66126d9b2fb3ef0bb6cff21b50b33cde92fc3edd6f0788b075eae2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8c0911bdbe66126d9b2fb3ef0bb6cff21b50b33cde92fc3edd6f0788b075eae2->leave($__internal_8c0911bdbe66126d9b2fb3ef0bb6cff21b50b33cde92fc3edd6f0788b075eae2_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_c9c7c4fcb14f6cd9ed7ae025809322f2dade3cf7f83c266a6571f698d1fa24b2 = $this->env->getExtension("native_profiler");
        $__internal_c9c7c4fcb14f6cd9ed7ae025809322f2dade3cf7f83c266a6571f698d1fa24b2->enter($__internal_c9c7c4fcb14f6cd9ed7ae025809322f2dade3cf7f83c266a6571f698d1fa24b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_c9c7c4fcb14f6cd9ed7ae025809322f2dade3cf7f83c266a6571f698d1fa24b2->leave($__internal_c9c7c4fcb14f6cd9ed7ae025809322f2dade3cf7f83c266a6571f698d1fa24b2_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_803e6e090b82aa75a36a1936dcd1b4bf204339c4b574af0d25a814164d45bef0 = $this->env->getExtension("native_profiler");
        $__internal_803e6e090b82aa75a36a1936dcd1b4bf204339c4b574af0d25a814164d45bef0->enter($__internal_803e6e090b82aa75a36a1936dcd1b4bf204339c4b574af0d25a814164d45bef0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_803e6e090b82aa75a36a1936dcd1b4bf204339c4b574af0d25a814164d45bef0->leave($__internal_803e6e090b82aa75a36a1936dcd1b4bf204339c4b574af0d25a814164d45bef0_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_8b544a4f5ed6628acc06e51af7b11a2f84157ef62028e661c6f659951bc2dea5 = $this->env->getExtension("native_profiler");
        $__internal_8b544a4f5ed6628acc06e51af7b11a2f84157ef62028e661c6f659951bc2dea5->enter($__internal_8b544a4f5ed6628acc06e51af7b11a2f84157ef62028e661c6f659951bc2dea5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_8b544a4f5ed6628acc06e51af7b11a2f84157ef62028e661c6f659951bc2dea5->leave($__internal_8b544a4f5ed6628acc06e51af7b11a2f84157ef62028e661c6f659951bc2dea5_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
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
