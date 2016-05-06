<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_d260c144eadf88d052b455bcf7b68a587229923b8ae954aca6e1c109cbc438dc extends Twig_Template
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
        $__internal_a76c4875b0c9465401bff54cdb15ffd1c45ddeb223aed59f144c7034e6ead883 = $this->env->getExtension("native_profiler");
        $__internal_a76c4875b0c9465401bff54cdb15ffd1c45ddeb223aed59f144c7034e6ead883->enter($__internal_a76c4875b0c9465401bff54cdb15ffd1c45ddeb223aed59f144c7034e6ead883_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_a76c4875b0c9465401bff54cdb15ffd1c45ddeb223aed59f144c7034e6ead883->leave($__internal_a76c4875b0c9465401bff54cdb15ffd1c45ddeb223aed59f144c7034e6ead883_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="checkbox"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     <?php if (strlen($value) > 0): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?>*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
