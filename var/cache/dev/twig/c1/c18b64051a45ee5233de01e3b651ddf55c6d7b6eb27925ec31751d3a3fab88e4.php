<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_72e86c22b9ef3a7dd334477894772cafea95a7be56b3c6bf095443eac127e837 extends Twig_Template
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
        $__internal_670f13e46ec27f8c141414d0eedff97b4ac51b2a292afcd22b60dc6d5c3ed6db = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_670f13e46ec27f8c141414d0eedff97b4ac51b2a292afcd22b60dc6d5c3ed6db->enter($__internal_670f13e46ec27f8c141414d0eedff97b4ac51b2a292afcd22b60dc6d5c3ed6db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_387922368f112e46bc796d9ccb326c1466ba952cddb6ed965b3fd6b9acc1785e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_387922368f112e46bc796d9ccb326c1466ba952cddb6ed965b3fd6b9acc1785e->enter($__internal_387922368f112e46bc796d9ccb326c1466ba952cddb6ed965b3fd6b9acc1785e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_670f13e46ec27f8c141414d0eedff97b4ac51b2a292afcd22b60dc6d5c3ed6db->leave($__internal_670f13e46ec27f8c141414d0eedff97b4ac51b2a292afcd22b60dc6d5c3ed6db_prof);

        
        $__internal_387922368f112e46bc796d9ccb326c1466ba952cddb6ed965b3fd6b9acc1785e->leave($__internal_387922368f112e46bc796d9ccb326c1466ba952cddb6ed965b3fd6b9acc1785e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "/home/fanny/Documents/HACKATHON/Questions pour un hackathon/hackathon-2-Quizz/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_widget.html.php");
    }
}
