<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_2919079727d4c0081f9ea66c16c5f15aaccc8a6ee6975ab8487472aa858d6c7d extends Twig_Template
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
        $__internal_b1401393a6a2a2589e2aa0c6220ea9baa75248b4d2dfd4afa6b3ff9a073b33cd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b1401393a6a2a2589e2aa0c6220ea9baa75248b4d2dfd4afa6b3ff9a073b33cd->enter($__internal_b1401393a6a2a2589e2aa0c6220ea9baa75248b4d2dfd4afa6b3ff9a073b33cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        $__internal_52101ff9060e3391f981d34b1ab3d029becda24086380b4aa569bde9bac18e6e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_52101ff9060e3391f981d34b1ab3d029becda24086380b4aa569bde9bac18e6e->enter($__internal_52101ff9060e3391f981d34b1ab3d029becda24086380b4aa569bde9bac18e6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_b1401393a6a2a2589e2aa0c6220ea9baa75248b4d2dfd4afa6b3ff9a073b33cd->leave($__internal_b1401393a6a2a2589e2aa0c6220ea9baa75248b4d2dfd4afa6b3ff9a073b33cd_prof);

        
        $__internal_52101ff9060e3391f981d34b1ab3d029becda24086380b4aa569bde9bac18e6e->leave($__internal_52101ff9060e3391f981d34b1ab3d029becda24086380b4aa569bde9bac18e6e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "/home/fanny/Documents/HACKATHON/Questions pour un hackathon/hackathon-2-Quizz/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_row.html.php");
    }
}
