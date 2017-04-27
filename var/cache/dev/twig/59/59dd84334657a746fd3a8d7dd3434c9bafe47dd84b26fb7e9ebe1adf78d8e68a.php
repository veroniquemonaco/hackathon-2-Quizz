<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_02fe47fdd4604ba9d5baeb22e3ca82f2aa72ae15cc686e24e6bda415f5967a09 extends Twig_Template
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
        $__internal_bcb8688daec65e8af1bed9c372575d41243df91da9ae1372b688f496fb4e308f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bcb8688daec65e8af1bed9c372575d41243df91da9ae1372b688f496fb4e308f->enter($__internal_bcb8688daec65e8af1bed9c372575d41243df91da9ae1372b688f496fb4e308f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_cea0c91e9fc411dd9d442f5c2555da28101cf38a9a93646f8522c28a58eadf1d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cea0c91e9fc411dd9d442f5c2555da28101cf38a9a93646f8522c28a58eadf1d->enter($__internal_cea0c91e9fc411dd9d442f5c2555da28101cf38a9a93646f8522c28a58eadf1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_bcb8688daec65e8af1bed9c372575d41243df91da9ae1372b688f496fb4e308f->leave($__internal_bcb8688daec65e8af1bed9c372575d41243df91da9ae1372b688f496fb4e308f_prof);

        
        $__internal_cea0c91e9fc411dd9d442f5c2555da28101cf38a9a93646f8522c28a58eadf1d->leave($__internal_cea0c91e9fc411dd9d442f5c2555da28101cf38a9a93646f8522c28a58eadf1d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "/home/fanny/Documents/HACKATHON/Questions pour un hackathon/hackathon-2-Quizz/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/submit_widget.html.php");
    }
}
