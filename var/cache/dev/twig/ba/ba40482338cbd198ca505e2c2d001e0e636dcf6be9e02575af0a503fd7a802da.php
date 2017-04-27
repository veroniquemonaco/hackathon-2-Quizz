<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_d98e059dec94411996bf41f2474b2307753580b1e1cce53146d32434edb61019 extends Twig_Template
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
        $__internal_55b030268676eaeee9bbbbf2576ae1ee026ab2d006a71170e1e6c8a1220d9ac0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_55b030268676eaeee9bbbbf2576ae1ee026ab2d006a71170e1e6c8a1220d9ac0->enter($__internal_55b030268676eaeee9bbbbf2576ae1ee026ab2d006a71170e1e6c8a1220d9ac0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_b53ee112e62b8db81b7b5922e2829b4e2aef6736291bddbf9284bf942b388d6b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b53ee112e62b8db81b7b5922e2829b4e2aef6736291bddbf9284bf942b388d6b->enter($__internal_b53ee112e62b8db81b7b5922e2829b4e2aef6736291bddbf9284bf942b388d6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_55b030268676eaeee9bbbbf2576ae1ee026ab2d006a71170e1e6c8a1220d9ac0->leave($__internal_55b030268676eaeee9bbbbf2576ae1ee026ab2d006a71170e1e6c8a1220d9ac0_prof);

        
        $__internal_b53ee112e62b8db81b7b5922e2829b4e2aef6736291bddbf9284bf942b388d6b->leave($__internal_b53ee112e62b8db81b7b5922e2829b4e2aef6736291bddbf9284bf942b388d6b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "/home/fanny/Documents/HACKATHON/Questions pour un hackathon/hackathon-2-Quizz/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/search_widget.html.php");
    }
}
