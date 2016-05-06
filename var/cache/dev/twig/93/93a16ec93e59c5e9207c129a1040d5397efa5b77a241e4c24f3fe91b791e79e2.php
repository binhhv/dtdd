<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_853e774d9397c67aae3a63aeae94fd1ef432b32e5e320972e3259b980e726bb0 extends Twig_Template
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
        $__internal_16a29b22e76e8725a40bfa555f91167f7f6280b2a061bd16a06a93263778b005 = $this->env->getExtension("native_profiler");
        $__internal_16a29b22e76e8725a40bfa555f91167f7f6280b2a061bd16a06a93263778b005->enter($__internal_16a29b22e76e8725a40bfa555f91167f7f6280b2a061bd16a06a93263778b005_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_16a29b22e76e8725a40bfa555f91167f7f6280b2a061bd16a06a93263778b005->leave($__internal_16a29b22e76e8725a40bfa555f91167f7f6280b2a061bd16a06a93263778b005_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </div>*/
/* */
