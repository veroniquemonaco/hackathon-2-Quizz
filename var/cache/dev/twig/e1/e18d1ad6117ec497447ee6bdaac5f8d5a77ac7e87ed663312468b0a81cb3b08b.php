<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_a0cb5a7d7ffd83f2d1a15872436da9b7be55c926a954cee6968cc997f80a2d86 extends Twig_Template
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
        $__internal_f1f3b7104f286828d3db32b401e6e18f33af71a2f014f9841cd7d5df64762c82 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f1f3b7104f286828d3db32b401e6e18f33af71a2f014f9841cd7d5df64762c82->enter($__internal_f1f3b7104f286828d3db32b401e6e18f33af71a2f014f9841cd7d5df64762c82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        $__internal_f5634ada149ff5d24a962f1aef33cc2d5b1f7d7359b95836e2ac76bf72436292 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f5634ada149ff5d24a962f1aef33cc2d5b1f7d7359b95836e2ac76bf72436292->enter($__internal_f5634ada149ff5d24a962f1aef33cc2d5b1f7d7359b95836e2ac76bf72436292_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_f1f3b7104f286828d3db32b401e6e18f33af71a2f014f9841cd7d5df64762c82->leave($__internal_f1f3b7104f286828d3db32b401e6e18f33af71a2f014f9841cd7d5df64762c82_prof);

        
        $__internal_f5634ada149ff5d24a962f1aef33cc2d5b1f7d7359b95836e2ac76bf72436292->leave($__internal_f5634ada149ff5d24a962f1aef33cc2d5b1f7d7359b95836e2ac76bf72436292_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
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
{{ status_code }} {{ status_text }}

*/
", "TwigBundle:Exception:error.css.twig", "/home/fanny/Documents/HACKATHON/Questions pour un hackathon/hackathon-2-Quizz/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.css.twig");
    }
}
