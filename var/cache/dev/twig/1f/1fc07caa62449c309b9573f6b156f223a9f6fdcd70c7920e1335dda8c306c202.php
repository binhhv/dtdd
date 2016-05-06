<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_02eabb233429a11be05894490c06f222eff18d9ecead5120a62c752f21f440a6 extends Twig_Template
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
        $__internal_e5f2dfb9b22c531f457ed183a578fa716a3160b0df274605081b21c9f20773a6 = $this->env->getExtension("native_profiler");
        $__internal_e5f2dfb9b22c531f457ed183a578fa716a3160b0df274605081b21c9f20773a6->enter($__internal_e5f2dfb9b22c531f457ed183a578fa716a3160b0df274605081b21c9f20773a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_e5f2dfb9b22c531f457ed183a578fa716a3160b0df274605081b21c9f20773a6->leave($__internal_e5f2dfb9b22c531f457ed183a578fa716a3160b0df274605081b21c9f20773a6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!$label) { $label = isset($label_format)*/
/*     ? strtr($label_format, array('%name%' => $name, '%id%' => $id))*/
/*     : $view['form']->humanize($name); } ?>*/
/* <button type="<?php echo isset($type) ? $view->escape($type) : 'button' ?>" <?php echo $view['form']->block($form, 'button_attributes') ?>><?php echo $view->escape(false !== $translation_domain ? $view['translator']->trans($label, array(), $translation_domain) : $label) ?></button>*/
/* */
