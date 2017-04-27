<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_26d84ac4a45cb43d70c92b1f75afeb473f852183b354ad1e2ed39b3a5764453a extends Twig_Template
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
        $__internal_b62621cd268a43d0f26bcc551282bfcfd3938b9e62e72d86406d0ec8bbb7d445 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b62621cd268a43d0f26bcc551282bfcfd3938b9e62e72d86406d0ec8bbb7d445->enter($__internal_b62621cd268a43d0f26bcc551282bfcfd3938b9e62e72d86406d0ec8bbb7d445_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        $__internal_b7fa31a372e1d39d93e2cec421af0cf197168386af17108c7a7b3c679d9e5d25 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b7fa31a372e1d39d93e2cec421af0cf197168386af17108c7a7b3c679d9e5d25->enter($__internal_b7fa31a372e1d39d93e2cec421af0cf197168386af17108c7a7b3c679d9e5d25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_b62621cd268a43d0f26bcc551282bfcfd3938b9e62e72d86406d0ec8bbb7d445->leave($__internal_b62621cd268a43d0f26bcc551282bfcfd3938b9e62e72d86406d0ec8bbb7d445_prof);

        
        $__internal_b7fa31a372e1d39d93e2cec421af0cf197168386af17108c7a7b3c679d9e5d25->leave($__internal_b7fa31a372e1d39d93e2cec421af0cf197168386af17108c7a7b3c679d9e5d25_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
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
        return new Twig_Source("<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
", "@Framework/Form/datetime_widget.html.php", "/home/fanny/Documents/HACKATHON/Questions pour un hackathon/hackathon-2-Quizz/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/datetime_widget.html.php");
    }
}
