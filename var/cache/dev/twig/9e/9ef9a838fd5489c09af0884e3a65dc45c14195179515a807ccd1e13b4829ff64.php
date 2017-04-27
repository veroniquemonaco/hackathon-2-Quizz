<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_7327538189c56aaeb1355365ef104871292efa945038fe0958a5a2947819ebec extends Twig_Template
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
        $__internal_1d85896921beb57fd4e183847059dd7274826891305019fa594f1b082efa7298 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1d85896921beb57fd4e183847059dd7274826891305019fa594f1b082efa7298->enter($__internal_1d85896921beb57fd4e183847059dd7274826891305019fa594f1b082efa7298_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_131e3424cfcc42e73637bb7c506f04ed111e1a6219498a8ccf63764fa532043f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_131e3424cfcc42e73637bb7c506f04ed111e1a6219498a8ccf63764fa532043f->enter($__internal_131e3424cfcc42e73637bb7c506f04ed111e1a6219498a8ccf63764fa532043f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_1d85896921beb57fd4e183847059dd7274826891305019fa594f1b082efa7298->leave($__internal_1d85896921beb57fd4e183847059dd7274826891305019fa594f1b082efa7298_prof);

        
        $__internal_131e3424cfcc42e73637bb7c506f04ed111e1a6219498a8ccf63764fa532043f->leave($__internal_131e3424cfcc42e73637bb7c506f04ed111e1a6219498a8ccf63764fa532043f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
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
        return new Twig_Source("<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
", "@Framework/Form/collection_widget.html.php", "/home/fanny/Documents/HACKATHON/Questions pour un hackathon/hackathon-2-Quizz/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/collection_widget.html.php");
    }
}
