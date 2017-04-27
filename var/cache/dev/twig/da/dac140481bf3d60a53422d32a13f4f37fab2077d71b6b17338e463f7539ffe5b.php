<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_37f668905e2e7628dce9aaebcfb0172ba9ea505753ed820d901e53bf77fbdfaf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a1f89de42c882f9703d1855390f673e09935a2890697df568bfbcf95568271fb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a1f89de42c882f9703d1855390f673e09935a2890697df568bfbcf95568271fb->enter($__internal_a1f89de42c882f9703d1855390f673e09935a2890697df568bfbcf95568271fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_38e0d06d05b1f4991b8904de3e1ffd86fdda14bd631fd45443a2fcee9ead2b0e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_38e0d06d05b1f4991b8904de3e1ffd86fdda14bd631fd45443a2fcee9ead2b0e->enter($__internal_38e0d06d05b1f4991b8904de3e1ffd86fdda14bd631fd45443a2fcee9ead2b0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a1f89de42c882f9703d1855390f673e09935a2890697df568bfbcf95568271fb->leave($__internal_a1f89de42c882f9703d1855390f673e09935a2890697df568bfbcf95568271fb_prof);

        
        $__internal_38e0d06d05b1f4991b8904de3e1ffd86fdda14bd631fd45443a2fcee9ead2b0e->leave($__internal_38e0d06d05b1f4991b8904de3e1ffd86fdda14bd631fd45443a2fcee9ead2b0e_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_5befc72effa5e8c8a28531bc5ad6001a0e1ac9edb9a0e7af5f71e69f302ad063 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5befc72effa5e8c8a28531bc5ad6001a0e1ac9edb9a0e7af5f71e69f302ad063->enter($__internal_5befc72effa5e8c8a28531bc5ad6001a0e1ac9edb9a0e7af5f71e69f302ad063_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_9d687613f59830870d26cf93f4a85a46864e1947b6819e0f5c2c56a92b993548 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d687613f59830870d26cf93f4a85a46864e1947b6819e0f5c2c56a92b993548->enter($__internal_9d687613f59830870d26cf93f4a85a46864e1947b6819e0f5c2c56a92b993548_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_9d687613f59830870d26cf93f4a85a46864e1947b6819e0f5c2c56a92b993548->leave($__internal_9d687613f59830870d26cf93f4a85a46864e1947b6819e0f5c2c56a92b993548_prof);

        
        $__internal_5befc72effa5e8c8a28531bc5ad6001a0e1ac9edb9a0e7af5f71e69f302ad063->leave($__internal_5befc72effa5e8c8a28531bc5ad6001a0e1ac9edb9a0e7af5f71e69f302ad063_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_ee54de0c23efce636d4666edc68d72c72c200e46935e3c0bb7eca573de533d31 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ee54de0c23efce636d4666edc68d72c72c200e46935e3c0bb7eca573de533d31->enter($__internal_ee54de0c23efce636d4666edc68d72c72c200e46935e3c0bb7eca573de533d31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_df4b1259eca19c6de0141a5e890370d14edc6ab7136ce31085dd98a723c0f817 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df4b1259eca19c6de0141a5e890370d14edc6ab7136ce31085dd98a723c0f817->enter($__internal_df4b1259eca19c6de0141a5e890370d14edc6ab7136ce31085dd98a723c0f817_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_df4b1259eca19c6de0141a5e890370d14edc6ab7136ce31085dd98a723c0f817->leave($__internal_df4b1259eca19c6de0141a5e890370d14edc6ab7136ce31085dd98a723c0f817_prof);

        
        $__internal_ee54de0c23efce636d4666edc68d72c72c200e46935e3c0bb7eca573de533d31->leave($__internal_ee54de0c23efce636d4666edc68d72c72c200e46935e3c0bb7eca573de533d31_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "/home/fanny/Documents/HACKATHON/Questions pour un hackathon/hackathon-2-Quizz/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
