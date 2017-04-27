<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_9cdd3f8a4cea117afd5817428ba1c79d7bfddb675cfef2859e23d941b66a5f08 extends Twig_Template
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
        $__internal_5548c968dd537c1aec597571583bc861ab83f438f8c696fd002471ab396b7de7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5548c968dd537c1aec597571583bc861ab83f438f8c696fd002471ab396b7de7->enter($__internal_5548c968dd537c1aec597571583bc861ab83f438f8c696fd002471ab396b7de7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_32374f859a48fb55b70b8f27b2425450cd092dc35df27e79fa0af1257f7e6f7c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_32374f859a48fb55b70b8f27b2425450cd092dc35df27e79fa0af1257f7e6f7c->enter($__internal_32374f859a48fb55b70b8f27b2425450cd092dc35df27e79fa0af1257f7e6f7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_5548c968dd537c1aec597571583bc861ab83f438f8c696fd002471ab396b7de7->leave($__internal_5548c968dd537c1aec597571583bc861ab83f438f8c696fd002471ab396b7de7_prof);

        
        $__internal_32374f859a48fb55b70b8f27b2425450cd092dc35df27e79fa0af1257f7e6f7c->leave($__internal_32374f859a48fb55b70b8f27b2425450cd092dc35df27e79fa0af1257f7e6f7c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
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
        return new Twig_Source("<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/form_row.html.php", "/home/fanny/Documents/HACKATHON/Questions pour un hackathon/hackathon-2-Quizz/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_row.html.php");
    }
}
