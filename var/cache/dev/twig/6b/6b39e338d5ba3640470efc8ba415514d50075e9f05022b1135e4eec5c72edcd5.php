<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_6245c126a63bb771acd5cdc8cc334df52fdcf10b82be74b72974defd328b6873 extends Twig_Template
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
        $__internal_da0a4edc243226b0c7539f10cfd92896b792dfba7f54ad697dbbb2b4b7641412 = $this->env->getExtension("native_profiler");
        $__internal_da0a4edc243226b0c7539f10cfd92896b792dfba7f54ad697dbbb2b4b7641412->enter($__internal_da0a4edc243226b0c7539f10cfd92896b792dfba7f54ad697dbbb2b4b7641412_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_da0a4edc243226b0c7539f10cfd92896b792dfba7f54ad697dbbb2b4b7641412->leave($__internal_da0a4edc243226b0c7539f10cfd92896b792dfba7f54ad697dbbb2b4b7641412_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div>*/
/*     <?php echo $view['form']->label($form) ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php echo $view['form']->widget($form) ?>*/
/* </div>*/
/* */
