<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_bb0cf70f589234e16f72f6d2db29c7fe1986dc7d9c4f2eac2442a0a5f7bfaaa0 extends Twig_Template
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
        $__internal_e55fbc7215987387ba24fca8492f41f143a07a2a016e2ab6919c7b0f01f38b68 = $this->env->getExtension("native_profiler");
        $__internal_e55fbc7215987387ba24fca8492f41f143a07a2a016e2ab6919c7b0f01f38b68->enter($__internal_e55fbc7215987387ba24fca8492f41f143a07a2a016e2ab6919c7b0f01f38b68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_e55fbc7215987387ba24fca8492f41f143a07a2a016e2ab6919c7b0f01f38b68->leave($__internal_e55fbc7215987387ba24fca8492f41f143a07a2a016e2ab6919c7b0f01f38b68_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child) : ?>*/
/*     <?php echo $view['form']->row($child) ?>*/
/* <?php endforeach; ?>*/
/* */
