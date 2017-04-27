<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_1cd7c5f205026ed6c821ab0c7ac3f72e7401bb0b041eb8fbca2252352ca93772 extends Twig_Template
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
        $__internal_6ef4b83203fd12e3ab02fb05b221cc1857019e2e094a05aff0bde4f694b8080a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6ef4b83203fd12e3ab02fb05b221cc1857019e2e094a05aff0bde4f694b8080a->enter($__internal_6ef4b83203fd12e3ab02fb05b221cc1857019e2e094a05aff0bde4f694b8080a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_0a77176375f74453243c825158af3c63560c8e04d63eb2216772a2baf2309ab3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a77176375f74453243c825158af3c63560c8e04d63eb2216772a2baf2309ab3->enter($__internal_0a77176375f74453243c825158af3c63560c8e04d63eb2216772a2baf2309ab3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_6ef4b83203fd12e3ab02fb05b221cc1857019e2e094a05aff0bde4f694b8080a->leave($__internal_6ef4b83203fd12e3ab02fb05b221cc1857019e2e094a05aff0bde4f694b8080a_prof);

        
        $__internal_0a77176375f74453243c825158af3c63560c8e04d63eb2216772a2baf2309ab3->leave($__internal_0a77176375f74453243c825158af3c63560c8e04d63eb2216772a2baf2309ab3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "/home/fanny/Documents/HACKATHON/Questions pour un hackathon/hackathon-2-Quizz/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/container_attributes.html.php");
    }
}
