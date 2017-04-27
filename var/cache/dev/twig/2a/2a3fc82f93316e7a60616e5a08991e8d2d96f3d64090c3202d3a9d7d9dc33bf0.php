<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_b4ad2d6449a54b396adc7eb7f6a55caf3172798308c5253e76ab521f69e740f9 extends Twig_Template
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
        $__internal_65c2c4a8c8c4ec30d6b0080018c0c60a1aa326721bbbd742af5ee27561c3b35b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_65c2c4a8c8c4ec30d6b0080018c0c60a1aa326721bbbd742af5ee27561c3b35b->enter($__internal_65c2c4a8c8c4ec30d6b0080018c0c60a1aa326721bbbd742af5ee27561c3b35b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_773f84b26dbf038e7b21084eff295640abef4b41887915a74cc85b8e10567dd5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_773f84b26dbf038e7b21084eff295640abef4b41887915a74cc85b8e10567dd5->enter($__internal_773f84b26dbf038e7b21084eff295640abef4b41887915a74cc85b8e10567dd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_65c2c4a8c8c4ec30d6b0080018c0c60a1aa326721bbbd742af5ee27561c3b35b->leave($__internal_65c2c4a8c8c4ec30d6b0080018c0c60a1aa326721bbbd742af5ee27561c3b35b_prof);

        
        $__internal_773f84b26dbf038e7b21084eff295640abef4b41887915a74cc85b8e10567dd5->leave($__internal_773f84b26dbf038e7b21084eff295640abef4b41887915a74cc85b8e10567dd5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
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
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "/home/fanny/Documents/HACKATHON/Questions pour un hackathon/hackathon-2-Quizz/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget.html.php");
    }
}
