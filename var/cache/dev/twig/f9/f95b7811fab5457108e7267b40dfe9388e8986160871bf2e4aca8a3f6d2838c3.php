<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_bd839a623d41e65c7ad875f8876c26b53612d034a2fd2ba100c18e03a3c8b771 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_18240924c3ad97e094715469b78be1367c4cf24ff9ca96b64f1c21cb14ea08a2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_18240924c3ad97e094715469b78be1367c4cf24ff9ca96b64f1c21cb14ea08a2->enter($__internal_18240924c3ad97e094715469b78be1367c4cf24ff9ca96b64f1c21cb14ea08a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $__internal_a1d03af952eaa7f9fa13db8a4c85f820f04cef047e61792571c12c9a11703bad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a1d03af952eaa7f9fa13db8a4c85f820f04cef047e61792571c12c9a11703bad->enter($__internal_a1d03af952eaa7f9fa13db8a4c85f820f04cef047e61792571c12c9a11703bad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_18240924c3ad97e094715469b78be1367c4cf24ff9ca96b64f1c21cb14ea08a2->leave($__internal_18240924c3ad97e094715469b78be1367c4cf24ff9ca96b64f1c21cb14ea08a2_prof);

        
        $__internal_a1d03af952eaa7f9fa13db8a4c85f820f04cef047e61792571c12c9a11703bad->leave($__internal_a1d03af952eaa7f9fa13db8a4c85f820f04cef047e61792571c12c9a11703bad_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_67f466c9b457a525ae0539d5ebdfd47763afc7d1d03223c5d9376ab5f7207c17 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_67f466c9b457a525ae0539d5ebdfd47763afc7d1d03223c5d9376ab5f7207c17->enter($__internal_67f466c9b457a525ae0539d5ebdfd47763afc7d1d03223c5d9376ab5f7207c17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_473f80cae692aa2dc9d8e69f74ecf411b1bce044ed62a799debe054ac336fea3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_473f80cae692aa2dc9d8e69f74ecf411b1bce044ed62a799debe054ac336fea3->enter($__internal_473f80cae692aa2dc9d8e69f74ecf411b1bce044ed62a799debe054ac336fea3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_473f80cae692aa2dc9d8e69f74ecf411b1bce044ed62a799debe054ac336fea3->leave($__internal_473f80cae692aa2dc9d8e69f74ecf411b1bce044ed62a799debe054ac336fea3_prof);

        
        $__internal_67f466c9b457a525ae0539d5ebdfd47763afc7d1d03223c5d9376ab5f7207c17->leave($__internal_67f466c9b457a525ae0539d5ebdfd47763afc7d1d03223c5d9376ab5f7207c17_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_4d3aad08379782b1e9e86b13d39e24517378d71bbbc60b87c2253ef9538be027 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4d3aad08379782b1e9e86b13d39e24517378d71bbbc60b87c2253ef9538be027->enter($__internal_4d3aad08379782b1e9e86b13d39e24517378d71bbbc60b87c2253ef9538be027_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_1cfd9176dbd862e275d47cc67b220c3a25fd07504f4c2c9b9c6a9c04a2165f78 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1cfd9176dbd862e275d47cc67b220c3a25fd07504f4c2c9b9c6a9c04a2165f78->enter($__internal_1cfd9176dbd862e275d47cc67b220c3a25fd07504f4c2c9b9c6a9c04a2165f78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_1cfd9176dbd862e275d47cc67b220c3a25fd07504f4c2c9b9c6a9c04a2165f78->leave($__internal_1cfd9176dbd862e275d47cc67b220c3a25fd07504f4c2c9b9c6a9c04a2165f78_prof);

        
        $__internal_4d3aad08379782b1e9e86b13d39e24517378d71bbbc60b87c2253ef9538be027->leave($__internal_4d3aad08379782b1e9e86b13d39e24517378d71bbbc60b87c2253ef9538be027_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_5e08efae4b827bfd158fcf8c0f647db22fa101ab7da85c875047bc067e384e35 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5e08efae4b827bfd158fcf8c0f647db22fa101ab7da85c875047bc067e384e35->enter($__internal_5e08efae4b827bfd158fcf8c0f647db22fa101ab7da85c875047bc067e384e35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_728a3674304d301d136b3a81860113928c6d3b5c9ccdefc5ed98353687160447 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_728a3674304d301d136b3a81860113928c6d3b5c9ccdefc5ed98353687160447->enter($__internal_728a3674304d301d136b3a81860113928c6d3b5c9ccdefc5ed98353687160447_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_728a3674304d301d136b3a81860113928c6d3b5c9ccdefc5ed98353687160447->leave($__internal_728a3674304d301d136b3a81860113928c6d3b5c9ccdefc5ed98353687160447_prof);

        
        $__internal_5e08efae4b827bfd158fcf8c0f647db22fa101ab7da85c875047bc067e384e35->leave($__internal_5e08efae4b827bfd158fcf8c0f647db22fa101ab7da85c875047bc067e384e35_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "WebProfilerBundle:Collector:exception.html.twig", "/home/fanny/Documents/HACKATHON/Questions pour un hackathon/hackathon-2-Quizz/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
