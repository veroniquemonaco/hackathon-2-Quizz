<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_e19945631fbccf073be34e34efbbb6682d7b6a5587abb5ecd23dd7bdcb80521a extends Twig_Template
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
        $__internal_f9c1191113ab0e09c536c4ee2bf2d6fd4b76dc5d505341b37e504ff9476fe9f8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f9c1191113ab0e09c536c4ee2bf2d6fd4b76dc5d505341b37e504ff9476fe9f8->enter($__internal_f9c1191113ab0e09c536c4ee2bf2d6fd4b76dc5d505341b37e504ff9476fe9f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_466d5c0466261ac2382e00a6a58f3bc3ab9a9073e9c63e7ec94e291663b2ea28 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_466d5c0466261ac2382e00a6a58f3bc3ab9a9073e9c63e7ec94e291663b2ea28->enter($__internal_466d5c0466261ac2382e00a6a58f3bc3ab9a9073e9c63e7ec94e291663b2ea28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_f9c1191113ab0e09c536c4ee2bf2d6fd4b76dc5d505341b37e504ff9476fe9f8->leave($__internal_f9c1191113ab0e09c536c4ee2bf2d6fd4b76dc5d505341b37e504ff9476fe9f8_prof);

        
        $__internal_466d5c0466261ac2382e00a6a58f3bc3ab9a9073e9c63e7ec94e291663b2ea28->leave($__internal_466d5c0466261ac2382e00a6a58f3bc3ab9a9073e9c63e7ec94e291663b2ea28_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
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
        return new Twig_Source("<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
", "@Framework/Form/form_errors.html.php", "/home/fanny/Documents/HACKATHON/Questions pour un hackathon/hackathon-2-Quizz/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_errors.html.php");
    }
}
