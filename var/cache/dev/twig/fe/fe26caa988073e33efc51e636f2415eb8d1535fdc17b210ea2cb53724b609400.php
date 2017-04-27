<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_c4cd8584726b4cbf296055e79b04044973c6c2263a7a920197d8904fd438803e extends Twig_Template
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
        $__internal_99f49a1e5c01f458a3930683dded04c389cf99511f3a63f9f20c4472e5640fb0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_99f49a1e5c01f458a3930683dded04c389cf99511f3a63f9f20c4472e5640fb0->enter($__internal_99f49a1e5c01f458a3930683dded04c389cf99511f3a63f9f20c4472e5640fb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_e31db096603fb41ba281b847a9456a157a77bc5258f837aacd3043da37c1188c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e31db096603fb41ba281b847a9456a157a77bc5258f837aacd3043da37c1188c->enter($__internal_e31db096603fb41ba281b847a9456a157a77bc5258f837aacd3043da37c1188c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_99f49a1e5c01f458a3930683dded04c389cf99511f3a63f9f20c4472e5640fb0->leave($__internal_99f49a1e5c01f458a3930683dded04c389cf99511f3a63f9f20c4472e5640fb0_prof);

        
        $__internal_e31db096603fb41ba281b847a9456a157a77bc5258f837aacd3043da37c1188c->leave($__internal_e31db096603fb41ba281b847a9456a157a77bc5258f837aacd3043da37c1188c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "/home/fanny/Documents/HACKATHON/Questions pour un hackathon/hackathon-2-Quizz/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/reset_widget.html.php");
    }
}
