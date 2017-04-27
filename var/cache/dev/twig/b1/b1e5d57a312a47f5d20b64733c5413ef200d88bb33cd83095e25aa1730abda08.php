<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_5056df37cd35ddfe5da27c18801041ddc89e17b8ad0332e01f64f6ebf60396d3 extends Twig_Template
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
        $__internal_17b61cc4ce9018e2ae1593de96dc9c7c067983d988c96577b708170f15e8264c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_17b61cc4ce9018e2ae1593de96dc9c7c067983d988c96577b708170f15e8264c->enter($__internal_17b61cc4ce9018e2ae1593de96dc9c7c067983d988c96577b708170f15e8264c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_281640ab410ae38e71d1170f20d39adfb0d4df153a4fb0f8ab7da6c9570b1440 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_281640ab410ae38e71d1170f20d39adfb0d4df153a4fb0f8ab7da6c9570b1440->enter($__internal_281640ab410ae38e71d1170f20d39adfb0d4df153a4fb0f8ab7da6c9570b1440_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_17b61cc4ce9018e2ae1593de96dc9c7c067983d988c96577b708170f15e8264c->leave($__internal_17b61cc4ce9018e2ae1593de96dc9c7c067983d988c96577b708170f15e8264c_prof);

        
        $__internal_281640ab410ae38e71d1170f20d39adfb0d4df153a4fb0f8ab7da6c9570b1440->leave($__internal_281640ab410ae38e71d1170f20d39adfb0d4df153a4fb0f8ab7da6c9570b1440_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "/home/fanny/Documents/HACKATHON/Questions pour un hackathon/hackathon-2-Quizz/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/password_widget.html.php");
    }
}
