<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_f2af994afc1a590952d7500cbef3cccd31c51acf2cb9beff593cb81aaa88ebd9 extends Twig_Template
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
        $__internal_beae411675acd65eb41d0073be82ecd1f73958db474138f9eca52d5ca92f9c2d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_beae411675acd65eb41d0073be82ecd1f73958db474138f9eca52d5ca92f9c2d->enter($__internal_beae411675acd65eb41d0073be82ecd1f73958db474138f9eca52d5ca92f9c2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_ccef2b273c2bfee21fcc315d8b7f5d0ecd2b590a3e975791f26a6cb5002a4ee9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ccef2b273c2bfee21fcc315d8b7f5d0ecd2b590a3e975791f26a6cb5002a4ee9->enter($__internal_ccef2b273c2bfee21fcc315d8b7f5d0ecd2b590a3e975791f26a6cb5002a4ee9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_beae411675acd65eb41d0073be82ecd1f73958db474138f9eca52d5ca92f9c2d->leave($__internal_beae411675acd65eb41d0073be82ecd1f73958db474138f9eca52d5ca92f9c2d_prof);

        
        $__internal_ccef2b273c2bfee21fcc315d8b7f5d0ecd2b590a3e975791f26a6cb5002a4ee9->leave($__internal_ccef2b273c2bfee21fcc315d8b7f5d0ecd2b590a3e975791f26a6cb5002a4ee9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "/home/fanny/Documents/HACKATHON/Questions pour un hackathon/hackathon-2-Quizz/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_row.html.php");
    }
}
