<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_5a5e50c2c435d3d0b639e08e65f7d45416a064deb9badbcd8d488815526acb26 extends Twig_Template
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
        $__internal_4078f5fd23afcf647def6843e2b2364c2c56e6467c41cfa321b7442bf9a8cd0e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4078f5fd23afcf647def6843e2b2364c2c56e6467c41cfa321b7442bf9a8cd0e->enter($__internal_4078f5fd23afcf647def6843e2b2364c2c56e6467c41cfa321b7442bf9a8cd0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_ba271f9b3a3a59d3700bf3b80133d3cc6e30450e5b48de6e21678d8f538b4b61 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba271f9b3a3a59d3700bf3b80133d3cc6e30450e5b48de6e21678d8f538b4b61->enter($__internal_ba271f9b3a3a59d3700bf3b80133d3cc6e30450e5b48de6e21678d8f538b4b61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_4078f5fd23afcf647def6843e2b2364c2c56e6467c41cfa321b7442bf9a8cd0e->leave($__internal_4078f5fd23afcf647def6843e2b2364c2c56e6467c41cfa321b7442bf9a8cd0e_prof);

        
        $__internal_ba271f9b3a3a59d3700bf3b80133d3cc6e30450e5b48de6e21678d8f538b4b61->leave($__internal_ba271f9b3a3a59d3700bf3b80133d3cc6e30450e5b48de6e21678d8f538b4b61_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
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
        return new Twig_Source("<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
", "@Framework/FormTable/form_widget_compound.html.php", "/home/fanny/Documents/HACKATHON/Questions pour un hackathon/hackathon-2-Quizz/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_widget_compound.html.php");
    }
}
