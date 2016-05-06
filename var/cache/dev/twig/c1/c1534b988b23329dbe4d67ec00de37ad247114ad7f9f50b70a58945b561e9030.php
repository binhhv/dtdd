<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_78b6f40e17e1ab640eaa395c557c55119661d3b709a94d3e87f7212e7a83f222 extends Twig_Template
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
        $__internal_a69de575915d004cc06e39b57e39751dbbfbbd0a012b4fdb44222e244480a056 = $this->env->getExtension("native_profiler");
        $__internal_a69de575915d004cc06e39b57e39751dbbfbbd0a012b4fdb44222e244480a056->enter($__internal_a69de575915d004cc06e39b57e39751dbbfbbd0a012b4fdb44222e244480a056_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_a69de575915d004cc06e39b57e39751dbbfbbd0a012b4fdb44222e244480a056->leave($__internal_a69de575915d004cc06e39b57e39751dbbfbbd0a012b4fdb44222e244480a056_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="<?php echo isset($type) ? $view->escape($type) : 'text' ?>" <?php echo $view['form']->block($form, 'widget_attributes') ?><?php if (!empty($value) || is_numeric($value)): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?> />*/
/* */
