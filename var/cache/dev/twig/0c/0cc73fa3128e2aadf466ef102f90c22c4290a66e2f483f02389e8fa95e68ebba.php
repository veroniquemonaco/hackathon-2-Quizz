<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_9eb9427f0681f6c757aa23cac29e88c7097157c7b3953dd68cb0443bf377623f extends Twig_Template
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
        $__internal_bed2171270e09f0bfbe0f3351c824da20e3ce05eb0c75a48d77efab5e7efdb9b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bed2171270e09f0bfbe0f3351c824da20e3ce05eb0c75a48d77efab5e7efdb9b->enter($__internal_bed2171270e09f0bfbe0f3351c824da20e3ce05eb0c75a48d77efab5e7efdb9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        $__internal_91c606c247cbc3fae605ed9646a76f9ddc00cbc1e384e10979afcaaf630f34cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91c606c247cbc3fae605ed9646a76f9ddc00cbc1e384e10979afcaaf630f34cd->enter($__internal_91c606c247cbc3fae605ed9646a76f9ddc00cbc1e384e10979afcaaf630f34cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => ($context["exception"] ?? $this->getContext($context, "exception")))));
        
        $__internal_bed2171270e09f0bfbe0f3351c824da20e3ce05eb0c75a48d77efab5e7efdb9b->leave($__internal_bed2171270e09f0bfbe0f3351c824da20e3ce05eb0c75a48d77efab5e7efdb9b_prof);

        
        $__internal_91c606c247cbc3fae605ed9646a76f9ddc00cbc1e384e10979afcaaf630f34cd->leave($__internal_91c606c247cbc3fae605ed9646a76f9ddc00cbc1e384e10979afcaaf630f34cd_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
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
        return new Twig_Source("{% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}
", "TwigBundle:Exception:exception.rdf.twig", "/home/fanny/Documents/HACKATHON/Questions pour un hackathon/hackathon-2-Quizz/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.rdf.twig");
    }
}
