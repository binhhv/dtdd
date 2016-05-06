<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_8b956eda9cf0e7de0e08ca13de4e8f7ba3c4d03c1eebe57ab072d313b3270de8 extends Twig_Template
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
        $__internal_d0354cbb1e5c35c813778c52481e2f399d2cd3be29bb2acf440cbefc17edeb26 = $this->env->getExtension("native_profiler");
        $__internal_d0354cbb1e5c35c813778c52481e2f399d2cd3be29bb2acf440cbefc17edeb26->enter($__internal_d0354cbb1e5c35c813778c52481e2f399d2cd3be29bb2acf440cbefc17edeb26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_d0354cbb1e5c35c813778c52481e2f399d2cd3be29bb2acf440cbefc17edeb26->leave($__internal_d0354cbb1e5c35c813778c52481e2f399d2cd3be29bb2acf440cbefc17edeb26_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr style="display: none">*/
/*     <td colspan="2">*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
