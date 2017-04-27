<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_bd94edd8a045875b07481df56b2c40bde00dae3addef2b02f43bce2c92b6a189 extends Twig_Template
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
        $__internal_14be849b81adf12cb65c7d1b62f7c323e1231e884ea2e3e91801af6eda62f315 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_14be849b81adf12cb65c7d1b62f7c323e1231e884ea2e3e91801af6eda62f315->enter($__internal_14be849b81adf12cb65c7d1b62f7c323e1231e884ea2e3e91801af6eda62f315_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_bfa8daa725e6b944027ff04a70daabdd4fda979b51b1e72ef1bacfdf33e1ca92 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bfa8daa725e6b944027ff04a70daabdd4fda979b51b1e72ef1bacfdf33e1ca92->enter($__internal_bfa8daa725e6b944027ff04a70daabdd4fda979b51b1e72ef1bacfdf33e1ca92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_14be849b81adf12cb65c7d1b62f7c323e1231e884ea2e3e91801af6eda62f315->leave($__internal_14be849b81adf12cb65c7d1b62f7c323e1231e884ea2e3e91801af6eda62f315_prof);

        
        $__internal_bfa8daa725e6b944027ff04a70daabdd4fda979b51b1e72ef1bacfdf33e1ca92->leave($__internal_bfa8daa725e6b944027ff04a70daabdd4fda979b51b1e72ef1bacfdf33e1ca92_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "/home/fanny/Documents/HACKATHON/Questions pour un hackathon/hackathon-2-Quizz/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/url_widget.html.php");
    }
}
