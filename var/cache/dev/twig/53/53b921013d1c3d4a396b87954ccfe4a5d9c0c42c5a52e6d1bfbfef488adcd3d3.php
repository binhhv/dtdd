<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_9e914b46a1ee7578f7cba5be1c6bfc4509223334c344b88009ba91992d0e25fb extends Twig_Template
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
        $__internal_8cd2d6a4b5e35021e391bf2b6c4303c9d6627a0527a43321a10c7af42aeb51e1 = $this->env->getExtension("native_profiler");
        $__internal_8cd2d6a4b5e35021e391bf2b6c4303c9d6627a0527a43321a10c7af42aeb51e1->enter($__internal_8cd2d6a4b5e35021e391bf2b6c4303c9d6627a0527a43321a10c7af42aeb51e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_8cd2d6a4b5e35021e391bf2b6c4303c9d6627a0527a43321a10c7af42aeb51e1->leave($__internal_8cd2d6a4b5e35021e391bf2b6c4303c9d6627a0527a43321a10c7af42aeb51e1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($expanded): ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_expanded') ?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_collapsed') ?>*/
/* <?php endif ?>*/
/* */
