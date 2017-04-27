<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_adf68b964f531ad4e7f0260efac69a23a7361a4ce0a3ca16970d15a9a1e84a8c extends Twig_Template
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
        $__internal_ff10ba941ea000894c022701729ef6488eee07b78916a5c352912bd450cfc707 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ff10ba941ea000894c022701729ef6488eee07b78916a5c352912bd450cfc707->enter($__internal_ff10ba941ea000894c022701729ef6488eee07b78916a5c352912bd450cfc707_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_856e751f4bd6124702eb1586b1ee21fb74981e82d44df2fcd457486e50d59ab8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_856e751f4bd6124702eb1586b1ee21fb74981e82d44df2fcd457486e50d59ab8->enter($__internal_856e751f4bd6124702eb1586b1ee21fb74981e82d44df2fcd457486e50d59ab8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_ff10ba941ea000894c022701729ef6488eee07b78916a5c352912bd450cfc707->leave($__internal_ff10ba941ea000894c022701729ef6488eee07b78916a5c352912bd450cfc707_prof);

        
        $__internal_856e751f4bd6124702eb1586b1ee21fb74981e82d44df2fcd457486e50d59ab8->leave($__internal_856e751f4bd6124702eb1586b1ee21fb74981e82d44df2fcd457486e50d59ab8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
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
        return new Twig_Source("<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/radio_widget.html.php", "/home/fanny/Documents/HACKATHON/Questions pour un hackathon/hackathon-2-Quizz/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/radio_widget.html.php");
    }
}
