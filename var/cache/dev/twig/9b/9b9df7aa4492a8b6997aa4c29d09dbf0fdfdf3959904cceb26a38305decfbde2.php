<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_02e82817eba516ee8b0104632d3428a786a93df59bab57737fbd191ef93dbbb8 extends Twig_Template
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
        $__internal_d75f309943e8385a233937c8e10ee910bc2557590672fcfb8253a72d8e52dba1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d75f309943e8385a233937c8e10ee910bc2557590672fcfb8253a72d8e52dba1->enter($__internal_d75f309943e8385a233937c8e10ee910bc2557590672fcfb8253a72d8e52dba1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_2cf958c35d99c2fbcf9836268eab10d5a93e9af66e241d83203bbf64e4e1851a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2cf958c35d99c2fbcf9836268eab10d5a93e9af66e241d83203bbf64e4e1851a->enter($__internal_2cf958c35d99c2fbcf9836268eab10d5a93e9af66e241d83203bbf64e4e1851a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_d75f309943e8385a233937c8e10ee910bc2557590672fcfb8253a72d8e52dba1->leave($__internal_d75f309943e8385a233937c8e10ee910bc2557590672fcfb8253a72d8e52dba1_prof);

        
        $__internal_2cf958c35d99c2fbcf9836268eab10d5a93e9af66e241d83203bbf64e4e1851a->leave($__internal_2cf958c35d99c2fbcf9836268eab10d5a93e9af66e241d83203bbf64e4e1851a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "/home/fanny/Documents/HACKATHON/Questions pour un hackathon/hackathon-2-Quizz/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rows.html.php");
    }
}
