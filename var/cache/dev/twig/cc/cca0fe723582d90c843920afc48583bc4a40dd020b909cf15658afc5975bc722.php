<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_2f1cf9d90b5c49c44bcc37eccfd709d11f969115bd692bb6db9545ded866b5f8 extends Twig_Template
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
        $__internal_625a858843bdb1f597a485ad91937927a346254efb7f4b5269ee5847102cabb7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_625a858843bdb1f597a485ad91937927a346254efb7f4b5269ee5847102cabb7->enter($__internal_625a858843bdb1f597a485ad91937927a346254efb7f4b5269ee5847102cabb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        $__internal_dc5f6342838e97b72a96997af112fb9e2ebd391d95b0599110697e1d7bb1dcda = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc5f6342838e97b72a96997af112fb9e2ebd391d95b0599110697e1d7bb1dcda->enter($__internal_dc5f6342838e97b72a96997af112fb9e2ebd391d95b0599110697e1d7bb1dcda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => ($context["exception"] ?? $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_625a858843bdb1f597a485ad91937927a346254efb7f4b5269ee5847102cabb7->leave($__internal_625a858843bdb1f597a485ad91937927a346254efb7f4b5269ee5847102cabb7_prof);

        
        $__internal_dc5f6342838e97b72a96997af112fb9e2ebd391d95b0599110697e1d7bb1dcda->leave($__internal_dc5f6342838e97b72a96997af112fb9e2ebd391d95b0599110697e1d7bb1dcda_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
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
", "TwigBundle:Exception:exception.js.twig", "/home/fanny/Documents/HACKATHON/Questions pour un hackathon/hackathon-2-Quizz/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.js.twig");
    }
}
