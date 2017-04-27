<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_9fe76bd1c2f3bda8d87e9c28cbe4da71db0d8b271dd71a98eb5ec2a2aa1717fa extends Twig_Template
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
        $__internal_430ab068b130ed22b95b322339cd498daf263aaf351b7c9a2f2cb49861f6df72 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_430ab068b130ed22b95b322339cd498daf263aaf351b7c9a2f2cb49861f6df72->enter($__internal_430ab068b130ed22b95b322339cd498daf263aaf351b7c9a2f2cb49861f6df72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_ce650818a047b11f850e327108c21f3600751f4c72a17f3875a82c0cc30a3ce7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce650818a047b11f850e327108c21f3600751f4c72a17f3875a82c0cc30a3ce7->enter($__internal_ce650818a047b11f850e327108c21f3600751f4c72a17f3875a82c0cc30a3ce7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_430ab068b130ed22b95b322339cd498daf263aaf351b7c9a2f2cb49861f6df72->leave($__internal_430ab068b130ed22b95b322339cd498daf263aaf351b7c9a2f2cb49861f6df72_prof);

        
        $__internal_ce650818a047b11f850e327108c21f3600751f4c72a17f3875a82c0cc30a3ce7->leave($__internal_ce650818a047b11f850e327108c21f3600751f4c72a17f3875a82c0cc30a3ce7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
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
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "/home/fanny/Documents/HACKATHON/Questions pour un hackathon/hackathon-2-Quizz/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/button_row.html.php");
    }
}
