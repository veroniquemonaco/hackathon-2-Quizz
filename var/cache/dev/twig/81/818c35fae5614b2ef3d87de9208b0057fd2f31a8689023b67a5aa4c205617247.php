<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_4372f575d57aac305cd82da1036187d1e8d2dee7fb55c077b7a6b12c346cbec3 extends Twig_Template
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
        $__internal_da45413d3ff2780790cf1b6901729f312534c7691ce5b68e9811fd7796280ca2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_da45413d3ff2780790cf1b6901729f312534c7691ce5b68e9811fd7796280ca2->enter($__internal_da45413d3ff2780790cf1b6901729f312534c7691ce5b68e9811fd7796280ca2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_8b1e4489485f651c8ece2c83b9d0fcece2c1c100c6c1dd89d78eaa060688e645 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b1e4489485f651c8ece2c83b9d0fcece2c1c100c6c1dd89d78eaa060688e645->enter($__internal_8b1e4489485f651c8ece2c83b9d0fcece2c1c100c6c1dd89d78eaa060688e645_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_da45413d3ff2780790cf1b6901729f312534c7691ce5b68e9811fd7796280ca2->leave($__internal_da45413d3ff2780790cf1b6901729f312534c7691ce5b68e9811fd7796280ca2_prof);

        
        $__internal_8b1e4489485f651c8ece2c83b9d0fcece2c1c100c6c1dd89d78eaa060688e645->leave($__internal_8b1e4489485f651c8ece2c83b9d0fcece2c1c100c6c1dd89d78eaa060688e645_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
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
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "/home/fanny/Documents/HACKATHON/Questions pour un hackathon/hackathon-2-Quizz/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/textarea_widget.html.php");
    }
}
