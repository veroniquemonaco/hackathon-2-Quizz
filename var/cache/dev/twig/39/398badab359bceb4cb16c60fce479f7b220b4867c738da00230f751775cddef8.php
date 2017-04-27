<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_27a14dc2bfef375141ad2a11215d385dc8f936bf01588520927377aafb5b6f7b extends Twig_Template
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
        $__internal_ecf1a141eeb420f785bca9f4768efdfe815cc073c5a11ac95ad6899eef0a5662 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ecf1a141eeb420f785bca9f4768efdfe815cc073c5a11ac95ad6899eef0a5662->enter($__internal_ecf1a141eeb420f785bca9f4768efdfe815cc073c5a11ac95ad6899eef0a5662_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_49d5b115c191f4ce856ee5323785e33c771b409694caa622d287c96ffdcc888a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_49d5b115c191f4ce856ee5323785e33c771b409694caa622d287c96ffdcc888a->enter($__internal_49d5b115c191f4ce856ee5323785e33c771b409694caa622d287c96ffdcc888a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_ecf1a141eeb420f785bca9f4768efdfe815cc073c5a11ac95ad6899eef0a5662->leave($__internal_ecf1a141eeb420f785bca9f4768efdfe815cc073c5a11ac95ad6899eef0a5662_prof);

        
        $__internal_49d5b115c191f4ce856ee5323785e33c771b409694caa622d287c96ffdcc888a->leave($__internal_49d5b115c191f4ce856ee5323785e33c771b409694caa622d287c96ffdcc888a_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
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
        return new Twig_Source("{% include '@Twig/Exception/error.xml.twig' %}
", "TwigBundle:Exception:error.rdf.twig", "/home/fanny/Documents/HACKATHON/Questions pour un hackathon/hackathon-2-Quizz/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
