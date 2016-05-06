<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_b0c1697630ac6a20d0a82f8f5474d6f25c6bb1d433e155afbde2a5515d5c17ec extends Twig_Template
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
        $__internal_f8f8a06fa9d9dd927e2806fedc90f965848984dc6e781c70d6693bc6eb31c7df = $this->env->getExtension("native_profiler");
        $__internal_f8f8a06fa9d9dd927e2806fedc90f965848984dc6e781c70d6693bc6eb31c7df->enter($__internal_f8f8a06fa9d9dd927e2806fedc90f965848984dc6e781c70d6693bc6eb31c7df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_f8f8a06fa9d9dd927e2806fedc90f965848984dc6e781c70d6693bc6eb31c7df->leave($__internal_f8f8a06fa9d9dd927e2806fedc90f965848984dc6e781c70d6693bc6eb31c7df_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!isset($render_rest) || $render_rest): ?>*/
/* <?php echo $view['form']->rest($form) ?>*/
/* <?php endif ?>*/
/* </form>*/
/* */
