<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_d487956a50c866633766a507fdacfe3979c296e04a03b31c87cc1528b890a73f extends Twig_Template
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
        $__internal_096d98ebfe7bdeddab734e7727ddb2a2260d54bb8e5c099f6779bd0272f2c101 = $this->env->getExtension("native_profiler");
        $__internal_096d98ebfe7bdeddab734e7727ddb2a2260d54bb8e5c099f6779bd0272f2c101->enter($__internal_096d98ebfe7bdeddab734e7727ddb2a2260d54bb8e5c099f6779bd0272f2c101_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_096d98ebfe7bdeddab734e7727ddb2a2260d54bb8e5c099f6779bd0272f2c101->leave($__internal_096d98ebfe7bdeddab734e7727ddb2a2260d54bb8e5c099f6779bd0272f2c101_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (count($errors) > 0): ?>*/
/*     <ul>*/
/*         <?php foreach ($errors as $error): ?>*/
/*             <li><?php echo $error->getMessage() ?></li>*/
/*         <?php endforeach; ?>*/
/*     </ul>*/
/* <?php endif ?>*/
/* */
