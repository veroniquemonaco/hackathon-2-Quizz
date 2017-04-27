<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_ccdcaf32110dc132b014b139663e1da2e16a65f4a922b53bacf8af576f4e01da extends Twig_Template
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
        $__internal_0bb1a086d51605a8d7da1167078f9637d002d20cf6b479da957f3fc0f6e5ded7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0bb1a086d51605a8d7da1167078f9637d002d20cf6b479da957f3fc0f6e5ded7->enter($__internal_0bb1a086d51605a8d7da1167078f9637d002d20cf6b479da957f3fc0f6e5ded7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        $__internal_d7e25c8157a38a27a5b33fe505e3e2f5cc7537eb6c7a969e42a40adc3f897c02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7e25c8157a38a27a5b33fe505e3e2f5cc7537eb6c7a969e42a40adc3f897c02->enter($__internal_d7e25c8157a38a27a5b33fe505e3e2f5cc7537eb6c7a969e42a40adc3f897c02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")), "exception" => $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_0bb1a086d51605a8d7da1167078f9637d002d20cf6b479da957f3fc0f6e5ded7->leave($__internal_0bb1a086d51605a8d7da1167078f9637d002d20cf6b479da957f3fc0f6e5ded7_prof);

        
        $__internal_d7e25c8157a38a27a5b33fe505e3e2f5cc7537eb6c7a969e42a40adc3f897c02->leave($__internal_d7e25c8157a38a27a5b33fe505e3e2f5cc7537eb6c7a969e42a40adc3f897c02_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}
", "TwigBundle:Exception:exception.json.twig", "/home/fanny/Documents/HACKATHON/Questions pour un hackathon/hackathon-2-Quizz/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.json.twig");
    }
}
