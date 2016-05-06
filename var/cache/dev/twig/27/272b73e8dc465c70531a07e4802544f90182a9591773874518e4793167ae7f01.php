<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_b5b0befc4949512058cc31cc4027bf041a3eab972a791262b1ad4073313436ed extends Twig_Template
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
        $__internal_1ad16b8f11aa4e5cd27d8f50cda348bfabf6507183c59bed0b44ba0afd9075d6 = $this->env->getExtension("native_profiler");
        $__internal_1ad16b8f11aa4e5cd27d8f50cda348bfabf6507183c59bed0b44ba0afd9075d6->enter($__internal_1ad16b8f11aa4e5cd27d8f50cda348bfabf6507183c59bed0b44ba0afd9075d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_1ad16b8f11aa4e5cd27d8f50cda348bfabf6507183c59bed0b44ba0afd9075d6->leave($__internal_1ad16b8f11aa4e5cd27d8f50cda348bfabf6507183c59bed0b44ba0afd9075d6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (isset($prototype)): ?>*/
/*     <?php $attr['data-prototype'] = $view->escape($view['form']->row($prototype)) ?>*/
/* <?php endif ?>*/
/* <?php echo $view['form']->widget($form, array('attr' => $attr)) ?>*/
/* */
