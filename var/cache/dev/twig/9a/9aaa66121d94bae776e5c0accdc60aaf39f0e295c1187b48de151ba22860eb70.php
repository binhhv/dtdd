<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_22f42baea4ea696e70098da1bc890ace06fac9507bf48e16f6ca5e9ca07fe033 extends Twig_Template
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
        $__internal_8abe5edfa943d9b02f87e398faa43ce4c9359b4d0206397a2788da815d4aaa94 = $this->env->getExtension("native_profiler");
        $__internal_8abe5edfa943d9b02f87e398faa43ce4c9359b4d0206397a2788da815d4aaa94->enter($__internal_8abe5edfa943d9b02f87e398faa43ce4c9359b4d0206397a2788da815d4aaa94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_8abe5edfa943d9b02f87e398faa43ce4c9359b4d0206397a2788da815d4aaa94->leave($__internal_8abe5edfa943d9b02f87e398faa43ce4c9359b4d0206397a2788da815d4aaa94_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr>*/
/*     <td>*/
/*         <?php echo $view['form']->label($form) ?>*/
/*     </td>*/
/*     <td>*/
/*         <?php echo $view['form']->errors($form) ?>*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
