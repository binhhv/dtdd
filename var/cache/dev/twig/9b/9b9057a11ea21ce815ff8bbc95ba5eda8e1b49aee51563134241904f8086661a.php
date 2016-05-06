<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_99bc2a83c65d92db0478981f513f0a3ae5a9472a5dc6f3281ea9b853a2237645 extends Twig_Template
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
        $__internal_7b2fca0ae8c1f7630b58211ccf0096a50d3dc73725945ca31196d7c219456fc7 = $this->env->getExtension("native_profiler");
        $__internal_7b2fca0ae8c1f7630b58211ccf0096a50d3dc73725945ca31196d7c219456fc7->enter($__internal_7b2fca0ae8c1f7630b58211ccf0096a50d3dc73725945ca31196d7c219456fc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_7b2fca0ae8c1f7630b58211ccf0096a50d3dc73725945ca31196d7c219456fc7->leave($__internal_7b2fca0ae8c1f7630b58211ccf0096a50d3dc73725945ca31196d7c219456fc7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php echo str_replace('{{ widget }}', $view['form']->block($form, 'form_widget_simple'), $money_pattern) ?>*/
/* */
