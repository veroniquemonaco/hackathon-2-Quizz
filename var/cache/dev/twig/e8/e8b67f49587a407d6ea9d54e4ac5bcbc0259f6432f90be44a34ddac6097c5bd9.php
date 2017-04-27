<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_04b0d5b68b2e7cad0dd94f8a266e92ef18dc421a23faaba9704df6a5f3ed9acd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_1d830ad6f012b4d60d4c1ac5138c95fc85741f06550968bf5a2a9848036ec16b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1d830ad6f012b4d60d4c1ac5138c95fc85741f06550968bf5a2a9848036ec16b->enter($__internal_1d830ad6f012b4d60d4c1ac5138c95fc85741f06550968bf5a2a9848036ec16b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $__internal_cf297eccfcbcf44ea18fcd51aedfd85989f33f503fa1f856ecd931d1b17a388b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf297eccfcbcf44ea18fcd51aedfd85989f33f503fa1f856ecd931d1b17a388b->enter($__internal_cf297eccfcbcf44ea18fcd51aedfd85989f33f503fa1f856ecd931d1b17a388b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1d830ad6f012b4d60d4c1ac5138c95fc85741f06550968bf5a2a9848036ec16b->leave($__internal_1d830ad6f012b4d60d4c1ac5138c95fc85741f06550968bf5a2a9848036ec16b_prof);

        
        $__internal_cf297eccfcbcf44ea18fcd51aedfd85989f33f503fa1f856ecd931d1b17a388b->leave($__internal_cf297eccfcbcf44ea18fcd51aedfd85989f33f503fa1f856ecd931d1b17a388b_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_234b53a8d9325db9d13515a99b0f3c7064429e7e17e3ae231fde2ae0ade6d356 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_234b53a8d9325db9d13515a99b0f3c7064429e7e17e3ae231fde2ae0ade6d356->enter($__internal_234b53a8d9325db9d13515a99b0f3c7064429e7e17e3ae231fde2ae0ade6d356_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_6e490115daa6043d1c66c589725381eddad6be4ffd940d336d78f130827c0725 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e490115daa6043d1c66c589725381eddad6be4ffd940d336d78f130827c0725->enter($__internal_6e490115daa6043d1c66c589725381eddad6be4ffd940d336d78f130827c0725_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_6e490115daa6043d1c66c589725381eddad6be4ffd940d336d78f130827c0725->leave($__internal_6e490115daa6043d1c66c589725381eddad6be4ffd940d336d78f130827c0725_prof);

        
        $__internal_234b53a8d9325db9d13515a99b0f3c7064429e7e17e3ae231fde2ae0ade6d356->leave($__internal_234b53a8d9325db9d13515a99b0f3c7064429e7e17e3ae231fde2ae0ade6d356_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_d2d920cd28eecd9c0a16a52d8d74ca1b7e38c49b93272158a80a1d48d96005fb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d2d920cd28eecd9c0a16a52d8d74ca1b7e38c49b93272158a80a1d48d96005fb->enter($__internal_d2d920cd28eecd9c0a16a52d8d74ca1b7e38c49b93272158a80a1d48d96005fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_4e2f85edae61a4317777610ee43f0e8a575f60d93dca4763c9315cc85d0d1a32 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e2f85edae61a4317777610ee43f0e8a575f60d93dca4763c9315cc85d0d1a32->enter($__internal_4e2f85edae61a4317777610ee43f0e8a575f60d93dca4763c9315cc85d0d1a32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_4e2f85edae61a4317777610ee43f0e8a575f60d93dca4763c9315cc85d0d1a32->leave($__internal_4e2f85edae61a4317777610ee43f0e8a575f60d93dca4763c9315cc85d0d1a32_prof);

        
        $__internal_d2d920cd28eecd9c0a16a52d8d74ca1b7e38c49b93272158a80a1d48d96005fb->leave($__internal_d2d920cd28eecd9c0a16a52d8d74ca1b7e38c49b93272158a80a1d48d96005fb_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_75f0b38fbc6a95d3fc5ccb89eeccf06054a6bba2984ca51ceeb70c0307044935 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_75f0b38fbc6a95d3fc5ccb89eeccf06054a6bba2984ca51ceeb70c0307044935->enter($__internal_75f0b38fbc6a95d3fc5ccb89eeccf06054a6bba2984ca51ceeb70c0307044935_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ab89204fdae9e3675fe2be9e31d8f6af6371f9a6da1d6701d276bf8bfa34a9da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab89204fdae9e3675fe2be9e31d8f6af6371f9a6da1d6701d276bf8bfa34a9da->enter($__internal_ab89204fdae9e3675fe2be9e31d8f6af6371f9a6da1d6701d276bf8bfa34a9da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 141)->display($context);
        
        $__internal_ab89204fdae9e3675fe2be9e31d8f6af6371f9a6da1d6701d276bf8bfa34a9da->leave($__internal_ab89204fdae9e3675fe2be9e31d8f6af6371f9a6da1d6701d276bf8bfa34a9da_prof);

        
        $__internal_75f0b38fbc6a95d3fc5ccb89eeccf06054a6bba2984ca51ceeb70c0307044935->leave($__internal_75f0b38fbc6a95d3fc5ccb89eeccf06054a6bba2984ca51ceeb70c0307044935_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "TwigBundle:Exception:exception_full.html.twig", "/home/fanny/Documents/HACKATHON/Questions pour un hackathon/hackathon-2-Quizz/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
