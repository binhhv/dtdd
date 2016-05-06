<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_ea9d9a6b8506849401f6ba0753805549b387a6bfadd1afab00e9a9885a2681be extends Twig_Template
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
        $__internal_822c97e7b4ce8e51660ddbf8d2581f36c659b6280151d9c9aa73af206ed49d7e = $this->env->getExtension("native_profiler");
        $__internal_822c97e7b4ce8e51660ddbf8d2581f36c659b6280151d9c9aa73af206ed49d7e->enter($__internal_822c97e7b4ce8e51660ddbf8d2581f36c659b6280151d9c9aa73af206ed49d7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_822c97e7b4ce8e51660ddbf8d2581f36c659b6280151d9c9aa73af206ed49d7e->leave($__internal_822c97e7b4ce8e51660ddbf8d2581f36c659b6280151d9c9aa73af206ed49d7e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="radio"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     value="<?php echo $view->escape($value) ?>"*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
