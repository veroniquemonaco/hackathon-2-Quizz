<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_108768bd00bc12379c9ba14ea8d6b197bd65f53a08fd61f7c36f9ac7a18866d4 extends Twig_Template
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
        $__internal_ae83cd628fd799514df1cced492e0b21f746f19779c8abd2acc2494fd5dae43e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ae83cd628fd799514df1cced492e0b21f746f19779c8abd2acc2494fd5dae43e->enter($__internal_ae83cd628fd799514df1cced492e0b21f746f19779c8abd2acc2494fd5dae43e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_5ba2305e1d1257b9c340c5d34eea72d6b2e8d4240fedea627214b4931e642a74 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ba2305e1d1257b9c340c5d34eea72d6b2e8d4240fedea627214b4931e642a74->enter($__internal_5ba2305e1d1257b9c340c5d34eea72d6b2e8d4240fedea627214b4931e642a74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_ae83cd628fd799514df1cced492e0b21f746f19779c8abd2acc2494fd5dae43e->leave($__internal_ae83cd628fd799514df1cced492e0b21f746f19779c8abd2acc2494fd5dae43e_prof);

        
        $__internal_5ba2305e1d1257b9c340c5d34eea72d6b2e8d4240fedea627214b4931e642a74->leave($__internal_5ba2305e1d1257b9c340c5d34eea72d6b2e8d4240fedea627214b4931e642a74_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
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
        return new Twig_Source("<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/checkbox_widget.html.php", "/home/fanny/Documents/HACKATHON/Questions pour un hackathon/hackathon-2-Quizz/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/checkbox_widget.html.php");
    }
}
