<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_b6991726562a754abea0300e6d209728accf2bd9e29b42a8c773899a9d32afc0 extends Twig_Template
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
        $__internal_e2522226f755fbaa266ac2b20df0325d48450e04222eda8f0780296c309ef85e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e2522226f755fbaa266ac2b20df0325d48450e04222eda8f0780296c309ef85e->enter($__internal_e2522226f755fbaa266ac2b20df0325d48450e04222eda8f0780296c309ef85e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        $__internal_a86f7b3969595ab2fc67e5bf3910ffcbcc1c07a4cfc42320d6e8a68a850af8fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a86f7b3969595ab2fc67e5bf3910ffcbcc1c07a4cfc42320d6e8a68a850af8fc->enter($__internal_a86f7b3969595ab2fc67e5bf3910ffcbcc1c07a4cfc42320d6e8a68a850af8fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => ($context["exception"] ?? $this->getContext($context, "exception")))));
        
        $__internal_e2522226f755fbaa266ac2b20df0325d48450e04222eda8f0780296c309ef85e->leave($__internal_e2522226f755fbaa266ac2b20df0325d48450e04222eda8f0780296c309ef85e_prof);

        
        $__internal_a86f7b3969595ab2fc67e5bf3910ffcbcc1c07a4cfc42320d6e8a68a850af8fc->leave($__internal_a86f7b3969595ab2fc67e5bf3910ffcbcc1c07a4cfc42320d6e8a68a850af8fc_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
", "TwigBundle:Exception:exception.atom.twig", "/home/fanny/Documents/HACKATHON/Questions pour un hackathon/hackathon-2-Quizz/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.atom.twig");
    }
}
