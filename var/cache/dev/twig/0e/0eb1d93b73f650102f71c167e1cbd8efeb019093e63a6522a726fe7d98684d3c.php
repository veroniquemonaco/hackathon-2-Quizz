<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_48fd95720911e6965718a61ede18421169d22f4fd684e4f2367a484ce961a7e9 extends Twig_Template
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
        $__internal_cde5a90b92ca5ac9db71207e0991d37d72c8c9cb93c3b559046836f51b5ce1ee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cde5a90b92ca5ac9db71207e0991d37d72c8c9cb93c3b559046836f51b5ce1ee->enter($__internal_cde5a90b92ca5ac9db71207e0991d37d72c8c9cb93c3b559046836f51b5ce1ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_5962f20df5560d1de97b2a671c516c3647ee3c54e77039a08dd276df41090dec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5962f20df5560d1de97b2a671c516c3647ee3c54e77039a08dd276df41090dec->enter($__internal_5962f20df5560d1de97b2a671c516c3647ee3c54e77039a08dd276df41090dec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_cde5a90b92ca5ac9db71207e0991d37d72c8c9cb93c3b559046836f51b5ce1ee->leave($__internal_cde5a90b92ca5ac9db71207e0991d37d72c8c9cb93c3b559046836f51b5ce1ee_prof);

        
        $__internal_5962f20df5560d1de97b2a671c516c3647ee3c54e77039a08dd276df41090dec->leave($__internal_5962f20df5560d1de97b2a671c516c3647ee3c54e77039a08dd276df41090dec_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "/home/fanny/Documents/HACKATHON/Questions pour un hackathon/hackathon-2-Quizz/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/integer_widget.html.php");
    }
}
