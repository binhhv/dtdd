<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_d4042845ab0dcd368eff3412f403696bb194611f0722e15373c390fdfab0c00e extends Twig_Template
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
        $__internal_fae55e2ecec150a468c55a4905f0aabc0a72413cb230c92fc224e04b4861a86a = $this->env->getExtension("native_profiler");
        $__internal_fae55e2ecec150a468c55a4905f0aabc0a72413cb230c92fc224e04b4861a86a->enter($__internal_fae55e2ecec150a468c55a4905f0aabc0a72413cb230c92fc224e04b4861a86a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_fae55e2ecec150a468c55a4905f0aabc0a72413cb230c92fc224e04b4861a86a->leave($__internal_fae55e2ecec150a468c55a4905f0aabc0a72413cb230c92fc224e04b4861a86a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <textarea <?php echo $view['form']->block($form, 'widget_attributes') ?>><?php echo $view->escape($value) ?></textarea>*/
/* */
