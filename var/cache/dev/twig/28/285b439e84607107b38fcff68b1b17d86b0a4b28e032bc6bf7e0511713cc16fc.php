<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_9fb11c21cfd97782d6b26a922254b9100fe2a8be7fe47d857c3750e789142e5c extends Twig_Template
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
        $__internal_a5ca3d3f4f217fee00155405028562dcddc0f2f9ff7355f4025c347e44b12b89 = $this->env->getExtension("native_profiler");
        $__internal_a5ca3d3f4f217fee00155405028562dcddc0f2f9ff7355f4025c347e44b12b89->enter($__internal_a5ca3d3f4f217fee00155405028562dcddc0f2f9ff7355f4025c347e44b12b89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_a5ca3d3f4f217fee00155405028562dcddc0f2f9ff7355f4025c347e44b12b89->leave($__internal_a5ca3d3f4f217fee00155405028562dcddc0f2f9ff7355f4025c347e44b12b89_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <table <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <tr>*/
/*         <td colspan="2">*/
/*             <?php echo $view['form']->errors($form) ?>*/
/*         </td>*/
/*     </tr>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </table>*/
/* */
