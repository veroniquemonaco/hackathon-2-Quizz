<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_5976661a6a8ff4f557e6cc64ba11986b2678b302275d9a9286d58000dfd2b928 extends Twig_Template
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
        $__internal_8ed23851e677f1fc6c78f702c935974d4b53be09568b9e3b16a4b8154fe65eec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8ed23851e677f1fc6c78f702c935974d4b53be09568b9e3b16a4b8154fe65eec->enter($__internal_8ed23851e677f1fc6c78f702c935974d4b53be09568b9e3b16a4b8154fe65eec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        $__internal_5986402df77bb1c7a3c0a4a904714a7c1bfc2769e523c05ab6579505d7679b0f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5986402df77bb1c7a3c0a4a904714a7c1bfc2769e523c05ab6579505d7679b0f->enter($__internal_5986402df77bb1c7a3c0a4a904714a7c1bfc2769e523c05ab6579505d7679b0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => ($context["exception"] ?? $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_8ed23851e677f1fc6c78f702c935974d4b53be09568b9e3b16a4b8154fe65eec->leave($__internal_8ed23851e677f1fc6c78f702c935974d4b53be09568b9e3b16a4b8154fe65eec_prof);

        
        $__internal_5986402df77bb1c7a3c0a4a904714a7c1bfc2769e523c05ab6579505d7679b0f->leave($__internal_5986402df77bb1c7a3c0a4a904714a7c1bfc2769e523c05ab6579505d7679b0f_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 3,  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}
*/
", "TwigBundle:Exception:exception.css.twig", "/home/fanny/Documents/HACKATHON/Questions pour un hackathon/hackathon-2-Quizz/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.css.twig");
    }
}
