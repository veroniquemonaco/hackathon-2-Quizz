<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_a1525a61a3301f5a07d62f2684d4314e26bd55aa823260813fee4101103f4ce7 extends Twig_Template
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
        $__internal_12b79f9c0d24756e9e9aff6a6fb5fcfa030a153b769e71033cb5a653413a0d03 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_12b79f9c0d24756e9e9aff6a6fb5fcfa030a153b769e71033cb5a653413a0d03->enter($__internal_12b79f9c0d24756e9e9aff6a6fb5fcfa030a153b769e71033cb5a653413a0d03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_6db182e8f6c236ce23c2d5a2d71660b9f5b3deb29b374f330f3df4352be033b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6db182e8f6c236ce23c2d5a2d71660b9f5b3deb29b374f330f3df4352be033b2->enter($__internal_6db182e8f6c236ce23c2d5a2d71660b9f5b3deb29b374f330f3df4352be033b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_12b79f9c0d24756e9e9aff6a6fb5fcfa030a153b769e71033cb5a653413a0d03->leave($__internal_12b79f9c0d24756e9e9aff6a6fb5fcfa030a153b769e71033cb5a653413a0d03_prof);

        
        $__internal_6db182e8f6c236ce23c2d5a2d71660b9f5b3deb29b374f330f3df4352be033b2->leave($__internal_6db182e8f6c236ce23c2d5a2d71660b9f5b3deb29b374f330f3df4352be033b2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
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
        return new Twig_Source("<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
", "@Framework/Form/choice_widget.html.php", "/home/fanny/Documents/HACKATHON/Questions pour un hackathon/hackathon-2-Quizz/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget.html.php");
    }
}
