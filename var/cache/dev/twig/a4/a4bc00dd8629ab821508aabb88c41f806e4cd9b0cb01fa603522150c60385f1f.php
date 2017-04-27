<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_3a661ebe73fff3d18a348cf3043f93fbb24469c839d6b205865544eb9ecb6155 extends Twig_Template
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
        $__internal_d742176c57378d736d183c11212e23a4efd25847d5ceefa4c25b28dfc4c15bf6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d742176c57378d736d183c11212e23a4efd25847d5ceefa4c25b28dfc4c15bf6->enter($__internal_d742176c57378d736d183c11212e23a4efd25847d5ceefa4c25b28dfc4c15bf6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_03a47187b58609ab8e124199a906385ffceccad70ebcec7b82628bdc310180a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_03a47187b58609ab8e124199a906385ffceccad70ebcec7b82628bdc310180a9->enter($__internal_03a47187b58609ab8e124199a906385ffceccad70ebcec7b82628bdc310180a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_d742176c57378d736d183c11212e23a4efd25847d5ceefa4c25b28dfc4c15bf6->leave($__internal_d742176c57378d736d183c11212e23a4efd25847d5ceefa4c25b28dfc4c15bf6_prof);

        
        $__internal_03a47187b58609ab8e124199a906385ffceccad70ebcec7b82628bdc310180a9->leave($__internal_03a47187b58609ab8e124199a906385ffceccad70ebcec7b82628bdc310180a9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "/home/fanny/Documents/HACKATHON/Questions pour un hackathon/hackathon-2-Quizz/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form.html.php");
    }
}
