<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_97c8e7b5666f204c6a13116370da271fa6617435a1630e5f5be30eb4bc829b34 extends Twig_Template
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
        $__internal_e3d5dd3ad673125e5333646147c4fb5da71b154d97b59108ab445f5780818c58 = $this->env->getExtension("native_profiler");
        $__internal_e3d5dd3ad673125e5333646147c4fb5da71b154d97b59108ab445f5780818c58->enter($__internal_e3d5dd3ad673125e5333646147c4fb5da71b154d97b59108ab445f5780818c58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_e3d5dd3ad673125e5333646147c4fb5da71b154d97b59108ab445f5780818c58->leave($__internal_e3d5dd3ad673125e5333646147c4fb5da71b154d97b59108ab445f5780818c58_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($compound): ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_compound')?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_simple')?>*/
/* <?php endif ?>*/
/* */
