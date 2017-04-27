<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_2b862ac6c2dbcc245bd37b96112245747335c672e73677a420556821d1a3cb83 extends Twig_Template
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
        $__internal_6da35ff53234453b58e247cfbcab55debdbed400c79fc65aba5fe8229bfd2f33 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6da35ff53234453b58e247cfbcab55debdbed400c79fc65aba5fe8229bfd2f33->enter($__internal_6da35ff53234453b58e247cfbcab55debdbed400c79fc65aba5fe8229bfd2f33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        $__internal_5f85e2fd148edf6b0113051b40d30100a8b52c3c6be7d59bc9f720047fd6f15f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f85e2fd148edf6b0113051b40d30100a8b52c3c6be7d59bc9f720047fd6f15f->enter($__internal_5f85e2fd148edf6b0113051b40d30100a8b52c3c6be7d59bc9f720047fd6f15f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, ($context["widget"] ?? $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_6da35ff53234453b58e247cfbcab55debdbed400c79fc65aba5fe8229bfd2f33->leave($__internal_6da35ff53234453b58e247cfbcab55debdbed400c79fc65aba5fe8229bfd2f33_prof);

        
        $__internal_5f85e2fd148edf6b0113051b40d30100a8b52c3c6be7d59bc9f720047fd6f15f->leave($__internal_5f85e2fd148edf6b0113051b40d30100a8b52c3c6be7d59bc9f720047fd6f15f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
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
        return new Twig_Source("<?php echo str_replace('{{ widget }}', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
", "@Framework/Form/money_widget.html.php", "/home/fanny/Documents/HACKATHON/Questions pour un hackathon/hackathon-2-Quizz/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/money_widget.html.php");
    }
}
