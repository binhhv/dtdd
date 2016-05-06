<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_5a650c1318904e63e624e6ee2cea5dd9b63dc81ec69d4a7847fdb917ae871636 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f46f114d40721d68853a51fe09c1024d2993f04f0f3190c28dcc61bdf98fd22c = $this->env->getExtension("native_profiler");
        $__internal_f46f114d40721d68853a51fe09c1024d2993f04f0f3190c28dcc61bdf98fd22c->enter($__internal_f46f114d40721d68853a51fe09c1024d2993f04f0f3190c28dcc61bdf98fd22c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_f46f114d40721d68853a51fe09c1024d2993f04f0f3190c28dcc61bdf98fd22c->leave($__internal_f46f114d40721d68853a51fe09c1024d2993f04f0f3190c28dcc61bdf98fd22c_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_9b5fde8ce6f4fb5a24619b63a2e0826660958df5fcbe6445c2911cb799afb5a4 = $this->env->getExtension("native_profiler");
        $__internal_9b5fde8ce6f4fb5a24619b63a2e0826660958df5fcbe6445c2911cb799afb5a4->enter($__internal_9b5fde8ce6f4fb5a24619b63a2e0826660958df5fcbe6445c2911cb799afb5a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_9b5fde8ce6f4fb5a24619b63a2e0826660958df5fcbe6445c2911cb799afb5a4->leave($__internal_9b5fde8ce6f4fb5a24619b63a2e0826660958df5fcbe6445c2911cb799afb5a4_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block panel '' %}*/
/* */
