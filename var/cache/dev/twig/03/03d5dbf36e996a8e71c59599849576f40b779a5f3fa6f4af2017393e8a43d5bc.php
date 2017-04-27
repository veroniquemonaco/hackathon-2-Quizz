<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_0525e73710e966f774f6e30b0e64a9190e0ecc342637bb72ca2d8b51e7996982 extends Twig_Template
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
        $__internal_308460c5e93153ca85442faeffba2a381f2e2b5936a7f84e959209e67b1848fd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_308460c5e93153ca85442faeffba2a381f2e2b5936a7f84e959209e67b1848fd->enter($__internal_308460c5e93153ca85442faeffba2a381f2e2b5936a7f84e959209e67b1848fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_ce4d1e81a5e28bd00a95d9b56599c3481dd3d5baebe9eceb0d29388476b85e05 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce4d1e81a5e28bd00a95d9b56599c3481dd3d5baebe9eceb0d29388476b85e05->enter($__internal_ce4d1e81a5e28bd00a95d9b56599c3481dd3d5baebe9eceb0d29388476b85e05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_308460c5e93153ca85442faeffba2a381f2e2b5936a7f84e959209e67b1848fd->leave($__internal_308460c5e93153ca85442faeffba2a381f2e2b5936a7f84e959209e67b1848fd_prof);

        
        $__internal_ce4d1e81a5e28bd00a95d9b56599c3481dd3d5baebe9eceb0d29388476b85e05->leave($__internal_ce4d1e81a5e28bd00a95d9b56599c3481dd3d5baebe9eceb0d29388476b85e05_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
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
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
", "@Framework/Form/form_widget_compound.html.php", "/home/fanny/Documents/HACKATHON/Questions pour un hackathon/hackathon-2-Quizz/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget_compound.html.php");
    }
}
