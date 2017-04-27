<?php

/* WebProfilerBundle:Collector:ajax.html.twig */
class __TwigTemplate_ee20e546a617b72acfa3f6b524eceed87a2784458018f669e386512df33bccea extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0e90243c1f7115918a83656da76b4a567955b9074345839c0eaa3c23e0bb4b29 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0e90243c1f7115918a83656da76b4a567955b9074345839c0eaa3c23e0bb4b29->enter($__internal_0e90243c1f7115918a83656da76b4a567955b9074345839c0eaa3c23e0bb4b29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $__internal_011edc5ac0e173573de76ebdb5645754d7742468522c5d25d7328e2e23a1ded9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_011edc5ac0e173573de76ebdb5645754d7742468522c5d25d7328e2e23a1ded9->enter($__internal_011edc5ac0e173573de76ebdb5645754d7742468522c5d25d7328e2e23a1ded9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0e90243c1f7115918a83656da76b4a567955b9074345839c0eaa3c23e0bb4b29->leave($__internal_0e90243c1f7115918a83656da76b4a567955b9074345839c0eaa3c23e0bb4b29_prof);

        
        $__internal_011edc5ac0e173573de76ebdb5645754d7742468522c5d25d7328e2e23a1ded9->leave($__internal_011edc5ac0e173573de76ebdb5645754d7742468522c5d25d7328e2e23a1ded9_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_9febbebdd67419357e8a4de0090657ea9429d40cca15f6c6112ebd7921c6cd46 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9febbebdd67419357e8a4de0090657ea9429d40cca15f6c6112ebd7921c6cd46->enter($__internal_9febbebdd67419357e8a4de0090657ea9429d40cca15f6c6112ebd7921c6cd46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_7727204adf3040bef99ab6a6e6858c35db3e69e59fe27c1ac31c03086717192d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7727204adf3040bef99ab6a6e6858c35db3e69e59fe27c1ac31c03086717192d->enter($__internal_7727204adf3040bef99ab6a6e6858c35db3e69e59fe27c1ac31c03086717192d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_7727204adf3040bef99ab6a6e6858c35db3e69e59fe27c1ac31c03086717192d->leave($__internal_7727204adf3040bef99ab6a6e6858c35db3e69e59fe27c1ac31c03086717192d_prof);

        
        $__internal_9febbebdd67419357e8a4de0090657ea9429d40cca15f6c6112ebd7921c6cd46->leave($__internal_9febbebdd67419357e8a4de0090657ea9429d40cca15f6c6112ebd7921c6cd46_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "WebProfilerBundle:Collector:ajax.html.twig", "/home/fanny/Documents/HACKATHON/Questions pour un hackathon/hackathon-2-Quizz/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
