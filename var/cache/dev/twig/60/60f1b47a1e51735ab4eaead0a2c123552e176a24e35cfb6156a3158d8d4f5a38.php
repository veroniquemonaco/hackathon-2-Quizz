<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_dfd18cca4f478316a15a30b274128c5a94e2eabab242eb22444292b111f156c9 extends Twig_Template
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
        $__internal_b71acc81586280fb5be20d387ebe7f75c45f855c325678ef745fdf2b3b4da7ec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b71acc81586280fb5be20d387ebe7f75c45f855c325678ef745fdf2b3b4da7ec->enter($__internal_b71acc81586280fb5be20d387ebe7f75c45f855c325678ef745fdf2b3b4da7ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_44800454f9fbafda89b5223fb8e4904aebba58554791033d98140025317b7188 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44800454f9fbafda89b5223fb8e4904aebba58554791033d98140025317b7188->enter($__internal_44800454f9fbafda89b5223fb8e4904aebba58554791033d98140025317b7188_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_b71acc81586280fb5be20d387ebe7f75c45f855c325678ef745fdf2b3b4da7ec->leave($__internal_b71acc81586280fb5be20d387ebe7f75c45f855c325678ef745fdf2b3b4da7ec_prof);

        
        $__internal_44800454f9fbafda89b5223fb8e4904aebba58554791033d98140025317b7188->leave($__internal_44800454f9fbafda89b5223fb8e4904aebba58554791033d98140025317b7188_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "/home/fanny/Documents/HACKATHON/Questions pour un hackathon/hackathon-2-Quizz/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_row.html.php");
    }
}
