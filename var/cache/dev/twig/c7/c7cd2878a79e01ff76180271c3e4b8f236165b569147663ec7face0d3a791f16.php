<?php

/* @Framework/Form/choice_attributes.html.php */
class __TwigTemplate_9b3fcb0f1f9e83f102d3702cd882f270fdc0531dd8ba2cf7cd7514f211e5e221 extends Twig_Template
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
        $__internal_acb78b0219e1d3c27471e114888411f2a21f5ca65c5ca956478589f8b6c9bf6f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_acb78b0219e1d3c27471e114888411f2a21f5ca65c5ca956478589f8b6c9bf6f->enter($__internal_acb78b0219e1d3c27471e114888411f2a21f5ca65c5ca956478589f8b6c9bf6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        $__internal_63f1977cffb7c224b15a4d27d74e4c90efdadf49ef79e193fbdc6d2bc6113afe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_63f1977cffb7c224b15a4d27d74e4c90efdadf49ef79e193fbdc6d2bc6113afe->enter($__internal_63f1977cffb7c224b15a4d27d74e4c90efdadf49ef79e193fbdc6d2bc6113afe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        // line 1
        echo "<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_acb78b0219e1d3c27471e114888411f2a21f5ca65c5ca956478589f8b6c9bf6f->leave($__internal_acb78b0219e1d3c27471e114888411f2a21f5ca65c5ca956478589f8b6c9bf6f_prof);

        
        $__internal_63f1977cffb7c224b15a4d27d74e4c90efdadf49ef79e193fbdc6d2bc6113afe->leave($__internal_63f1977cffb7c224b15a4d27d74e4c90efdadf49ef79e193fbdc6d2bc6113afe_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_attributes.html.php";
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
        return new Twig_Source("<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
", "@Framework/Form/choice_attributes.html.php", "/home/fanny/Documents/HACKATHON/Questions pour un hackathon/hackathon-2-Quizz/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_attributes.html.php");
    }
}
