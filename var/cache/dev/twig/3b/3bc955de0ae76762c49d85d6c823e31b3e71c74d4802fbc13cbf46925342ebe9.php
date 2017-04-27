<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_fcf1994925ed13ae50ceaaa9fa1630895b6d8f504524ff1d777acdd3b5e606fa extends Twig_Template
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
        $__internal_2c6ccd2b419bbc7e6ea4127f43eeb195ecbe3a74012c213d541271dd81cfc73d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2c6ccd2b419bbc7e6ea4127f43eeb195ecbe3a74012c213d541271dd81cfc73d->enter($__internal_2c6ccd2b419bbc7e6ea4127f43eeb195ecbe3a74012c213d541271dd81cfc73d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        $__internal_aa0576e540b248f45d188260cf881332c5eeac615e3b7a8c827d7e43227c5036 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa0576e540b248f45d188260cf881332c5eeac615e3b7a8c827d7e43227c5036->enter($__internal_aa0576e540b248f45d188260cf881332c5eeac615e3b7a8c827d7e43227c5036_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
";
        
        $__internal_2c6ccd2b419bbc7e6ea4127f43eeb195ecbe3a74012c213d541271dd81cfc73d->leave($__internal_2c6ccd2b419bbc7e6ea4127f43eeb195ecbe3a74012c213d541271dd81cfc73d_prof);

        
        $__internal_aa0576e540b248f45d188260cf881332c5eeac615e3b7a8c827d7e43227c5036->leave($__internal_aa0576e540b248f45d188260cf881332c5eeac615e3b7a8c827d7e43227c5036_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
", "@Framework/Form/attributes.html.php", "/home/fanny/Documents/HACKATHON/Questions pour un hackathon/hackathon-2-Quizz/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/attributes.html.php");
    }
}
