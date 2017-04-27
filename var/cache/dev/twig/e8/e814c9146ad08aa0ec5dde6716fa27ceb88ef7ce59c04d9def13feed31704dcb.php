<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_acfe819b6f4a7232b54f39cdbb3388fd6f0d690a404297663cb5171468e5c743 extends Twig_Template
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
        $__internal_80a5527bde10781463149e7c3363de436a39b518aeaa25c0e5920d1d38f9918e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_80a5527bde10781463149e7c3363de436a39b518aeaa25c0e5920d1d38f9918e->enter($__internal_80a5527bde10781463149e7c3363de436a39b518aeaa25c0e5920d1d38f9918e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        $__internal_e50cca6e71eb2f0d8ca0e88d7b77e98e44fa5284ab455fd516e776338b7ae62a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e50cca6e71eb2f0d8ca0e88d7b77e98e44fa5284ab455fd516e776338b7ae62a->enter($__internal_e50cca6e71eb2f0d8ca0e88d7b77e98e44fa5284ab455fd516e776338b7ae62a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_80a5527bde10781463149e7c3363de436a39b518aeaa25c0e5920d1d38f9918e->leave($__internal_80a5527bde10781463149e7c3363de436a39b518aeaa25c0e5920d1d38f9918e_prof);

        
        $__internal_e50cca6e71eb2f0d8ca0e88d7b77e98e44fa5284ab455fd516e776338b7ae62a->leave($__internal_e50cca6e71eb2f0d8ca0e88d7b77e98e44fa5284ab455fd516e776338b7ae62a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
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
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
", "@Framework/Form/choice_widget_expanded.html.php", "/home/fanny/Documents/HACKATHON/Questions pour un hackathon/hackathon-2-Quizz/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget_expanded.html.php");
    }
}
