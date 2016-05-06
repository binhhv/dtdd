<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_59ec38eed9ff843fbe654d660dd858545068d7f41583665b232ca238bad2dbfc extends Twig_Template
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
        $__internal_b7bad99df14e3bb06f2123959e87c0f234f96a11258ebf544d3cadbf6480c030 = $this->env->getExtension("native_profiler");
        $__internal_b7bad99df14e3bb06f2123959e87c0f234f96a11258ebf544d3cadbf6480c030->enter($__internal_b7bad99df14e3bb06f2123959e87c0f234f96a11258ebf544d3cadbf6480c030_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_b7bad99df14e3bb06f2123959e87c0f234f96a11258ebf544d3cadbf6480c030->leave($__internal_b7bad99df14e3bb06f2123959e87c0f234f96a11258ebf544d3cadbf6480c030_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/* <?php foreach ($form as $child): ?>*/
/*     <?php echo $view['form']->widget($child) ?>*/
/*     <?php echo $view['form']->label($child, null, array('translation_domain' => $choice_translation_domain)) ?>*/
/* <?php endforeach ?>*/
/* </div>*/
/* */
