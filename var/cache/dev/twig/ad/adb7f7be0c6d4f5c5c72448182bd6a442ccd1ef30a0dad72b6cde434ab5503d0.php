<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_db688c6560cb5c6970dec47f82619ccf7023653b63fbf5b810231de242d038d6 extends Twig_Template
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
        $__internal_dfdf5ca8a02b534b6a2747120a0c2b122a42f86b7c3aeb0eda45d49d3cfaa8a4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dfdf5ca8a02b534b6a2747120a0c2b122a42f86b7c3aeb0eda45d49d3cfaa8a4->enter($__internal_dfdf5ca8a02b534b6a2747120a0c2b122a42f86b7c3aeb0eda45d49d3cfaa8a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_d047e98a5bc7602983dc7c483863edaeafb2e498a223a5cac4e15de345a3e36c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d047e98a5bc7602983dc7c483863edaeafb2e498a223a5cac4e15de345a3e36c->enter($__internal_d047e98a5bc7602983dc7c483863edaeafb2e498a223a5cac4e15de345a3e36c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_dfdf5ca8a02b534b6a2747120a0c2b122a42f86b7c3aeb0eda45d49d3cfaa8a4->leave($__internal_dfdf5ca8a02b534b6a2747120a0c2b122a42f86b7c3aeb0eda45d49d3cfaa8a4_prof);

        
        $__internal_d047e98a5bc7602983dc7c483863edaeafb2e498a223a5cac4e15de345a3e36c->leave($__internal_d047e98a5bc7602983dc7c483863edaeafb2e498a223a5cac4e15de345a3e36c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "/home/fanny/Documents/HACKATHON/Questions pour un hackathon/hackathon-2-Quizz/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_options.html.php");
    }
}
