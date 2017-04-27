<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_483b197cf204587a66b12757e2b423e735d38a1e01b0f178ecd0e641d12e72e9 extends Twig_Template
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
        $__internal_56532c16475cba3b858ce24746068471c27e6a28f3a76fc88fa690e644bbb236 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_56532c16475cba3b858ce24746068471c27e6a28f3a76fc88fa690e644bbb236->enter($__internal_56532c16475cba3b858ce24746068471c27e6a28f3a76fc88fa690e644bbb236_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        $__internal_146ac4235b6b8ce45aced8fcf12a83bb148f6d38f5563139c2490140a95c349b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_146ac4235b6b8ce45aced8fcf12a83bb148f6d38f5563139c2490140a95c349b->enter($__internal_146ac4235b6b8ce45aced8fcf12a83bb148f6d38f5563139c2490140a95c349b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo ($context["status_code"] ?? $this->getContext($context, "status_code"));
        echo " ";
        echo ($context["status_text"] ?? $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_56532c16475cba3b858ce24746068471c27e6a28f3a76fc88fa690e644bbb236->leave($__internal_56532c16475cba3b858ce24746068471c27e6a28f3a76fc88fa690e644bbb236_prof);

        
        $__internal_146ac4235b6b8ce45aced8fcf12a83bb148f6d38f5563139c2490140a95c349b->leave($__internal_146ac4235b6b8ce45aced8fcf12a83bb148f6d38f5563139c2490140a95c349b_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("Oops! An Error Occurred
=======================

The server returned a \"{{ status_code }} {{ status_text }}\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
", "TwigBundle:Exception:error.txt.twig", "/home/fanny/Documents/HACKATHON/Questions pour un hackathon/hackathon-2-Quizz/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.txt.twig");
    }
}
