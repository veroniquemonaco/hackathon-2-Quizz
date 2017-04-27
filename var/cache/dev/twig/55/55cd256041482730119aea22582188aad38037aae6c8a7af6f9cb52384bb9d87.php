<?php

/* @Framework/Form/form_label.html.php */
class __TwigTemplate_0f6fa22dfefa33db02780db5f92d95bd2c874f0014d7ea6af11ad49528efa836 extends Twig_Template
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
        $__internal_d7598c900cc5d75552e38f29d44f7e58f14e0135c408b958ea42a140ed3d11d4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d7598c900cc5d75552e38f29d44f7e58f14e0135c408b958ea42a140ed3d11d4->enter($__internal_d7598c900cc5d75552e38f29d44f7e58f14e0135c408b958ea42a140ed3d11d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_label.html.php"));

        $__internal_8bac6a52c8eeb1758b3422d7e5f2b473c14a7012d53e19d57214b569a9b92f7b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8bac6a52c8eeb1758b3422d7e5f2b473c14a7012d53e19d57214b569a9b92f7b->enter($__internal_8bac6a52c8eeb1758b3422d7e5f2b473c14a7012d53e19d57214b569a9b92f7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_label.html.php"));

        // line 1
        echo "<?php if (false !== \$label): ?>
<?php if (\$required) { \$label_attr['class'] = trim((isset(\$label_attr['class']) ? \$label_attr['class'] : '').' required'); } ?>
<?php if (!\$compound) { \$label_attr['for'] = \$id; } ?>
<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<label <?php foreach (\$label_attr as \$k => \$v) { printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)); } ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></label>
<?php endif ?>
";
        
        $__internal_d7598c900cc5d75552e38f29d44f7e58f14e0135c408b958ea42a140ed3d11d4->leave($__internal_d7598c900cc5d75552e38f29d44f7e58f14e0135c408b958ea42a140ed3d11d4_prof);

        
        $__internal_8bac6a52c8eeb1758b3422d7e5f2b473c14a7012d53e19d57214b569a9b92f7b->leave($__internal_8bac6a52c8eeb1758b3422d7e5f2b473c14a7012d53e19d57214b569a9b92f7b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_label.html.php";
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
        return new Twig_Source("<?php if (false !== \$label): ?>
<?php if (\$required) { \$label_attr['class'] = trim((isset(\$label_attr['class']) ? \$label_attr['class'] : '').' required'); } ?>
<?php if (!\$compound) { \$label_attr['for'] = \$id; } ?>
<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<label <?php foreach (\$label_attr as \$k => \$v) { printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)); } ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></label>
<?php endif ?>
", "@Framework/Form/form_label.html.php", "/home/fanny/Documents/HACKATHON/Questions pour un hackathon/hackathon-2-Quizz/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_label.html.php");
    }
}
