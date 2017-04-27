<?php

/* QuizzBundle:Default:index.html.twig */
class __TwigTemplate_202d36df2bdb85b56d561a1b7860ed0f48ecc98344e4f6bb196626bb3c3b1392 extends Twig_Template
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
        $__internal_a200895ecef4299b42791fa4bc3bda386d7006f15f7b03c2f10f477ac2f57f28 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a200895ecef4299b42791fa4bc3bda386d7006f15f7b03c2f10f477ac2f57f28->enter($__internal_a200895ecef4299b42791fa4bc3bda386d7006f15f7b03c2f10f477ac2f57f28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "QuizzBundle:Default:index.html.twig"));

        $__internal_4e326b50e815be8b3f45eb221ab0a0b177b1cd5d439f7cea1f62d31b481e9881 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e326b50e815be8b3f45eb221ab0a0b177b1cd5d439f7cea1f62d31b481e9881->enter($__internal_4e326b50e815be8b3f45eb221ab0a0b177b1cd5d439f7cea1f62d31b481e9881_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "QuizzBundle:Default:index.html.twig"));

        // line 1
        echo "Hello World!
";
        
        $__internal_a200895ecef4299b42791fa4bc3bda386d7006f15f7b03c2f10f477ac2f57f28->leave($__internal_a200895ecef4299b42791fa4bc3bda386d7006f15f7b03c2f10f477ac2f57f28_prof);

        
        $__internal_4e326b50e815be8b3f45eb221ab0a0b177b1cd5d439f7cea1f62d31b481e9881->leave($__internal_4e326b50e815be8b3f45eb221ab0a0b177b1cd5d439f7cea1f62d31b481e9881_prof);

    }

    public function getTemplateName()
    {
        return "QuizzBundle:Default:index.html.twig";
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
        return new Twig_Source("Hello World!
", "QuizzBundle:Default:index.html.twig", "/home/fanny/Documents/HACKATHON/Questions pour un hackathon/hackathon-2-Quizz/src/QuizzBundle/Resources/views/Default/index.html.twig");
    }
}
