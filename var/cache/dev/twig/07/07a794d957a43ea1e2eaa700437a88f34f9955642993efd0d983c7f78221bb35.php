<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_008cdc2257fcd3fbc5ae5ed4c8dcfb742e184ed2ea67c98ced25babbd76d79e5 extends Twig_Template
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
        $__internal_9d8064740c5fb2819b7841d44da8408665d3cc592608ff1e98bfd72ca4a8268c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9d8064740c5fb2819b7841d44da8408665d3cc592608ff1e98bfd72ca4a8268c->enter($__internal_9d8064740c5fb2819b7841d44da8408665d3cc592608ff1e98bfd72ca4a8268c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_db85bc13b3a62705978d65d97d250e93137153b75b9e419a9ae9d62c721a0003 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db85bc13b3a62705978d65d97d250e93137153b75b9e419a9ae9d62c721a0003->enter($__internal_db85bc13b3a62705978d65d97d250e93137153b75b9e419a9ae9d62c721a0003_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_9d8064740c5fb2819b7841d44da8408665d3cc592608ff1e98bfd72ca4a8268c->leave($__internal_9d8064740c5fb2819b7841d44da8408665d3cc592608ff1e98bfd72ca4a8268c_prof);

        
        $__internal_db85bc13b3a62705978d65d97d250e93137153b75b9e419a9ae9d62c721a0003->leave($__internal_db85bc13b3a62705978d65d97d250e93137153b75b9e419a9ae9d62c721a0003_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
", "@Framework/Form/form_end.html.php", "/home/fanny/Documents/HACKATHON/Questions pour un hackathon/hackathon-2-Quizz/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_end.html.php");
    }
}
