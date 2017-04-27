<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_11148cd946ddc855793cd1d60500c40ac9b1bf7a7b2d256fdd955d5d31a385d5 extends Twig_Template
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
        $__internal_79c38ba4b7d95c176a514e26b65b88c449c19e7aa80bc1dc5c458f11b95af07d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_79c38ba4b7d95c176a514e26b65b88c449c19e7aa80bc1dc5c458f11b95af07d->enter($__internal_79c38ba4b7d95c176a514e26b65b88c449c19e7aa80bc1dc5c458f11b95af07d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_fcdfd93b2ff92ad6f1d55b541ea424cc675786cab0f4303f1c5f3670f87d6167 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fcdfd93b2ff92ad6f1d55b541ea424cc675786cab0f4303f1c5f3670f87d6167->enter($__internal_fcdfd93b2ff92ad6f1d55b541ea424cc675786cab0f4303f1c5f3670f87d6167_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_79c38ba4b7d95c176a514e26b65b88c449c19e7aa80bc1dc5c458f11b95af07d->leave($__internal_79c38ba4b7d95c176a514e26b65b88c449c19e7aa80bc1dc5c458f11b95af07d_prof);

        
        $__internal_fcdfd93b2ff92ad6f1d55b541ea424cc675786cab0f4303f1c5f3670f87d6167->leave($__internal_fcdfd93b2ff92ad6f1d55b541ea424cc675786cab0f4303f1c5f3670f87d6167_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
", "@Framework/Form/form_rest.html.php", "/home/fanny/Documents/HACKATHON/Questions pour un hackathon/hackathon-2-Quizz/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rest.html.php");
    }
}
