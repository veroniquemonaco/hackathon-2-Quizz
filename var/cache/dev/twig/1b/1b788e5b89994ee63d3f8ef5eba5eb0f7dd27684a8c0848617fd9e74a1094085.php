<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_e32fe7bbc587592d7d02b52fb0d248e7f6247282752466e0f9c5031b2c7e618c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_a4deb6f052cbd733519dc9e0e9291259a5d9b85c1a9b1923fa643787afe20a66 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a4deb6f052cbd733519dc9e0e9291259a5d9b85c1a9b1923fa643787afe20a66->enter($__internal_a4deb6f052cbd733519dc9e0e9291259a5d9b85c1a9b1923fa643787afe20a66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_67af352714243e9a8a6a01c4247dbc22739df07f4f8ebf3830d627d03f33396f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_67af352714243e9a8a6a01c4247dbc22739df07f4f8ebf3830d627d03f33396f->enter($__internal_67af352714243e9a8a6a01c4247dbc22739df07f4f8ebf3830d627d03f33396f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a4deb6f052cbd733519dc9e0e9291259a5d9b85c1a9b1923fa643787afe20a66->leave($__internal_a4deb6f052cbd733519dc9e0e9291259a5d9b85c1a9b1923fa643787afe20a66_prof);

        
        $__internal_67af352714243e9a8a6a01c4247dbc22739df07f4f8ebf3830d627d03f33396f->leave($__internal_67af352714243e9a8a6a01c4247dbc22739df07f4f8ebf3830d627d03f33396f_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_f224aaf994446e09a985773bdd779ac9e259ea8882cf7f5b56ef5a68d2281ddd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f224aaf994446e09a985773bdd779ac9e259ea8882cf7f5b56ef5a68d2281ddd->enter($__internal_f224aaf994446e09a985773bdd779ac9e259ea8882cf7f5b56ef5a68d2281ddd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_29ad9d33e4cb3aba2d2c663799270a2a9c0781d81fa692d3d87733e2fd9b9f1c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_29ad9d33e4cb3aba2d2c663799270a2a9c0781d81fa692d3d87733e2fd9b9f1c->enter($__internal_29ad9d33e4cb3aba2d2c663799270a2a9c0781d81fa692d3d87733e2fd9b9f1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_29ad9d33e4cb3aba2d2c663799270a2a9c0781d81fa692d3d87733e2fd9b9f1c->leave($__internal_29ad9d33e4cb3aba2d2c663799270a2a9c0781d81fa692d3d87733e2fd9b9f1c_prof);

        
        $__internal_f224aaf994446e09a985773bdd779ac9e259ea8882cf7f5b56ef5a68d2281ddd->leave($__internal_f224aaf994446e09a985773bdd779ac9e259ea8882cf7f5b56ef5a68d2281ddd_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_8b0d2bc45d5e5edcf95b12f7c1adcfccacace6825a75d3f32a4879f022300f70 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8b0d2bc45d5e5edcf95b12f7c1adcfccacace6825a75d3f32a4879f022300f70->enter($__internal_8b0d2bc45d5e5edcf95b12f7c1adcfccacace6825a75d3f32a4879f022300f70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_3f39298d355f3464dd5ea17c99f4f7f135504433429eea55749dc4078dac2c2f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f39298d355f3464dd5ea17c99f4f7f135504433429eea55749dc4078dac2c2f->enter($__internal_3f39298d355f3464dd5ea17c99f4f7f135504433429eea55749dc4078dac2c2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_3f39298d355f3464dd5ea17c99f4f7f135504433429eea55749dc4078dac2c2f->leave($__internal_3f39298d355f3464dd5ea17c99f4f7f135504433429eea55749dc4078dac2c2f_prof);

        
        $__internal_8b0d2bc45d5e5edcf95b12f7c1adcfccacace6825a75d3f32a4879f022300f70->leave($__internal_8b0d2bc45d5e5edcf95b12f7c1adcfccacace6825a75d3f32a4879f022300f70_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_d1459967d90434d6d9f829b9ef5377d3e9ae82f8f75fe2b63761beda2dadfa4c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d1459967d90434d6d9f829b9ef5377d3e9ae82f8f75fe2b63761beda2dadfa4c->enter($__internal_d1459967d90434d6d9f829b9ef5377d3e9ae82f8f75fe2b63761beda2dadfa4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_157c700cc1dc34c982033045487fc44c9e33d3b95edaa241dcb985cd87b91733 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_157c700cc1dc34c982033045487fc44c9e33d3b95edaa241dcb985cd87b91733->enter($__internal_157c700cc1dc34c982033045487fc44c9e33d3b95edaa241dcb985cd87b91733_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_157c700cc1dc34c982033045487fc44c9e33d3b95edaa241dcb985cd87b91733->leave($__internal_157c700cc1dc34c982033045487fc44c9e33d3b95edaa241dcb985cd87b91733_prof);

        
        $__internal_d1459967d90434d6d9f829b9ef5377d3e9ae82f8f75fe2b63761beda2dadfa4c->leave($__internal_d1459967d90434d6d9f829b9ef5377d3e9ae82f8f75fe2b63761beda2dadfa4c_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "WebProfilerBundle:Collector:router.html.twig", "/home/fanny/Documents/HACKATHON/Questions pour un hackathon/hackathon-2-Quizz/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
