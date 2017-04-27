<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_562be9ca48bb7b9e7a2d0d2a53db65db1a26a6ceda2e7afd82b9b4ab8a63e54e extends Twig_Template
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
        $__internal_bc6498cff137e6a03e909bc52a00cc83390c4beb5b8ea81e26629a02c23a671a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bc6498cff137e6a03e909bc52a00cc83390c4beb5b8ea81e26629a02c23a671a->enter($__internal_bc6498cff137e6a03e909bc52a00cc83390c4beb5b8ea81e26629a02c23a671a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        $__internal_b9f989371d0603ef187b4091fca482ba1b7d57de5dd14ce45da223a8b96870ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b9f989371d0603ef187b4091fca482ba1b7d57de5dd14ce45da223a8b96870ad->enter($__internal_b9f989371d0603ef187b4091fca482ba1b7d57de5dd14ce45da223a8b96870ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_bc6498cff137e6a03e909bc52a00cc83390c4beb5b8ea81e26629a02c23a671a->leave($__internal_bc6498cff137e6a03e909bc52a00cc83390c4beb5b8ea81e26629a02c23a671a_prof);

        
        $__internal_b9f989371d0603ef187b4091fca482ba1b7d57de5dd14ce45da223a8b96870ad->leave($__internal_b9f989371d0603ef187b4091fca482ba1b7d57de5dd14ce45da223a8b96870ad_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
", "TwigBundle:Exception:error.json.twig", "/home/fanny/Documents/HACKATHON/Questions pour un hackathon/hackathon-2-Quizz/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.json.twig");
    }
}
