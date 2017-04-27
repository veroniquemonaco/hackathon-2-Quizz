<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_ab21dcc6286500afd891e04a6108da091a610407550dcd122451ff8e3d76f613 extends Twig_Template
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
        $__internal_f4b82d5dd818e5588927584985627edb891656a71e1f868c5528df5ec3b449cd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f4b82d5dd818e5588927584985627edb891656a71e1f868c5528df5ec3b449cd->enter($__internal_f4b82d5dd818e5588927584985627edb891656a71e1f868c5528df5ec3b449cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_295fbb1d30d593686c4f44d5d856329780521b6a521fdd45d315b5c6db361842 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_295fbb1d30d593686c4f44d5d856329780521b6a521fdd45d315b5c6db361842->enter($__internal_295fbb1d30d593686c4f44d5d856329780521b6a521fdd45d315b5c6db361842_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_f4b82d5dd818e5588927584985627edb891656a71e1f868c5528df5ec3b449cd->leave($__internal_f4b82d5dd818e5588927584985627edb891656a71e1f868c5528df5ec3b449cd_prof);

        
        $__internal_295fbb1d30d593686c4f44d5d856329780521b6a521fdd45d315b5c6db361842->leave($__internal_295fbb1d30d593686c4f44d5d856329780521b6a521fdd45d315b5c6db361842_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "/home/fanny/Documents/HACKATHON/Questions pour un hackathon/hackathon-2-Quizz/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/email_widget.html.php");
    }
}
