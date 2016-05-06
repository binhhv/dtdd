<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_421c63d1f8f55fe1bd19381f4bc8925e1b3a14f28d472b3a36fd930bf1af4845 extends Twig_Template
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
        $__internal_a52b979b94c2f201dc402fd4fe8cc8587624ed3acbf4dab96c0fb95ab9be83df = $this->env->getExtension("native_profiler");
        $__internal_a52b979b94c2f201dc402fd4fe8cc8587624ed3acbf4dab96c0fb95ab9be83df->enter($__internal_a52b979b94c2f201dc402fd4fe8cc8587624ed3acbf4dab96c0fb95ab9be83df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_a52b979b94c2f201dc402fd4fe8cc8587624ed3acbf4dab96c0fb95ab9be83df->leave($__internal_a52b979b94c2f201dc402fd4fe8cc8587624ed3acbf4dab96c0fb95ab9be83df_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child): ?>*/
/*     <?php if (!$child->isRendered()): ?>*/
/*         <?php echo $view['form']->row($child) ?>*/
/*     <?php endif; ?>*/
/* <?php endforeach; ?>*/
/* */
