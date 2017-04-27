<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_c9d1b5eb893d45f011b462503c840f22713ac80a6ee06cdffc93c51227ba15cf extends Twig_Template
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
        $__internal_42e02416c53d2f3afea0bfd255b9487245aec211cbb802b9a2e6801b19876f7a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_42e02416c53d2f3afea0bfd255b9487245aec211cbb802b9a2e6801b19876f7a->enter($__internal_42e02416c53d2f3afea0bfd255b9487245aec211cbb802b9a2e6801b19876f7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        $__internal_3ef11f92800a991432bb1bc2d373e19dae2a2b5f5e40c4fa31fd0184e36aa7d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ef11f92800a991432bb1bc2d373e19dae2a2b5f5e40c4fa31fd0184e36aa7d2->enter($__internal_3ef11f92800a991432bb1bc2d373e19dae2a2b5f5e40c4fa31fd0184e36aa7d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_42e02416c53d2f3afea0bfd255b9487245aec211cbb802b9a2e6801b19876f7a->leave($__internal_42e02416c53d2f3afea0bfd255b9487245aec211cbb802b9a2e6801b19876f7a_prof);

        
        $__internal_3ef11f92800a991432bb1bc2d373e19dae2a2b5f5e40c4fa31fd0184e36aa7d2->leave($__internal_3ef11f92800a991432bb1bc2d373e19dae2a2b5f5e40c4fa31fd0184e36aa7d2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
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
        return new Twig_Source("<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
", "@Framework/Form/form_widget_simple.html.php", "/home/fanny/Documents/HACKATHON/Questions pour un hackathon/hackathon-2-Quizz/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget_simple.html.php");
    }
}
